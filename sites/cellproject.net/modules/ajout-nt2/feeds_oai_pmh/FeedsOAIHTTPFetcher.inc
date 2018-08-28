<?php


/**
 * Definition of the import batch object created on the fetching stage by
 * FeedsOAIHTTPFetcher.
 */
class FeedsOAIHTTPFetcherResult extends FeedsFetcherResult {
  protected $oai_endpoint_url;
  protected $from_timestamp;
  protected $until_timestamp;
  protected $resumption_token;
  public $repository;

  /**
   * Constructor.
   */
  public function __construct($oai_endpoint_url, $from_timestamp, $until_timestamp, $resumption_token, $set) {
    $this->oai_endpoint_url = $oai_endpoint_url;
    $this->from_timestamp = $from_timestamp;
    $this->until_timestamp = $until_timestamp;
    $this->set = $set;
    $this->resumption_token = $resumption_token;

    // Run identify request to fill this repository's information.
    require_once(drupal_get_path('module', 'feeds_oai_pmh') . '/feeds_oai_pmh.inc');
    $repository = feeds_oai_pmh_identify($oai_endpoint_url);
    $this->repository = $repository['repository'];

    parent::__construct('');
  }

  /**
   * Implementation of FeedsResult::getRaw();
   */
  public function getRaw() {
    // TODO: Move the URL building and data fetching to feeds_oai_pmh.inc
    // Build the request URL
    $url = $this->oai_endpoint_url;
    $url .= '?verb=ListRecords';
    if ($this->resumption_token) {
      $url .= "&resumptionToken=" . rawurlencode($this->resumption_token);
    }
    else {
      // When a resumptionToken is issued, there can't be any other arguments
      // in the request.
      $url .= '&metadataPrefix=oai_dc';
      if ($this->from_timestamp > 0) {
        $url .= '&from=' . rawurlencode($this->formatDate($this->from_timestamp));
      }
      if ($this->until_timestamp > 0) {
        $url .= '&until=' . rawurlencode($this->formatDate($this->until_timestamp));
      }
      if ($this->set && $this->set != '*') {
        $url .= '&set=' . rawurlencode($this->set);
      }
    }

    #dsm("URL for OAI request: $url");

    // Fetch the feed's contents
    $result = drupal_http_request($url);

    if ($result->code == 200) {
      $resumption_token = '';
      // TODO: Use simpleXML instead of regexp
      // Try to get resumptionToken. Example:
      // <resumptionToken completeListSize="478" cursor="0">0/300/478/oai_dc/eserev/null/null</resumptionToken>
      $ok = preg_match_all('/<resumptionToken.*?>([^<]+)<\/resumptionToken>/s', $result->data, $matches);
      if ($ok) {
        $resumption_token = array_pop($matches[1]);
        #dsm("Resumption token: $resumption_token");
        $this->setLastDate(0);
      }
      else {
        // No resumption token in response.
        if ($this->until_timestamp > 0) {
          // Since specific dates were requested, set the last date to 0.
          $this->setLastDate(0);
        }
        else {
          // Store current system timestamp so next request limits items returned.
          $this->setLastDate(time());
        }
      }
      $this->setResumptionToken($resumption_token);
    }
    else {
      // OAI fetch failed
      $msg = 'OAI-PMH request failed: @error';
      $args = array('@error' => $result->error);
      drupal_set_message(t($msg, $args), 'error');
      watchdog('feeds_oai_pmh', $msg, $args, WATCHDOG_ERROR, $url);
      return FALSE;
    }
    // Return the feed's contents
    return $result->data;
  }

  protected function setResumptionToken($resumption_token) {
    $this->resumption_token = $resumption_token;
    variable_set('feeds_oai:resumptionToken:' . $this->set . ':' . $this->oai_endpoint_url, $resumption_token);
  }

  protected function setLastDate($timestamp) {
    variable_set('feeds_oai:from:' . $this->set . ':' . $this->oai_endpoint_url, $timestamp);
  }

  protected function formatDate($timestamp) {
    $granularity = $this->repository['granularity'];
    if ('seconds' == $granularity) {
      $date_format = 'Y-m-d\TH:m:s\Z';
    }
    elseif ('days' == $granularity) {
      $date_format = 'Y-m-d';
    }
    return date($date_format, $timestamp);
  }
}


/**
 * Fetcher class for OAI-PMH repository webservices.
 */
class FeedsOAIHTTPFetcher extends FeedsHTTPFetcher {
  /**
   * Fetch content from feed.
   */
  public function fetch(FeedsSource $source) {
    $source_config = $source->getConfigFor($this);

    $from_timestamp = FALSE;
    $until_timestamp = FALSE;

    // Fetching rules:
    // Whenever there is a resumption token, use that.
    // Else
    //   if limit by date == yes
    //     issue those
    //   else
    //     start from last known record creation date (from variable)

    $resumption_token = variable_get('feeds_oai:resumptionToken:' . $source_config['set'] . ':' . $source_config['source'], '');
    if (!$resumption_token) {
      if ($source_config['use_dates']) {
        $from_timestamp = $this->dateFieldToTimestamp($source_config['dates']['from']);
        $until_timestamp = $this->dateFieldToTimestamp($source_config['dates']['to']);
      }
      else {
        $from_timestamp = (int)variable_get('feeds_oai:from:' . $source_config['set'] . ':' . $source_config['source'], 0);
        if ($from_timestamp > 0) {
          $from_timestamp = $from_timestamp + 1;
        }
      }
    }

    // The setSpec to harvest from.
    $set = $source_config['set'];

    return new FeedsOAIHTTPFetcherResult(
      $source_config['source'],
      $from_timestamp,
      $until_timestamp,
      $resumption_token,
      $set
    );
  }

  /**
   * Implements FeedsSourceInterface::hasSourceConfig().
   *
   * Implementing this function prevents undesirable calls to sourceForm().
   */
  public function hasSourceConfig() {
    return TRUE;
  }

  /**
   * Implements FeedsSourceInterface::sourceDefaults().
   *
   * Implementing this function prevents undesirable calls to sourceForm().
   */
  public function sourceDefaults() {
    return array(
      // Actual form elements.
      'source' => '',
      'set' => '*',
      'use_dates' => FALSE,
      'from' => array(),
      'to' => array(),
      'restart' => FALSE,
      // Repository info.
      'last_fetched_timestamp' => 0,
      'earliest_timestamp' => 0,
    );
  }

  /**
   * Expose source form.
   */
  public function sourceForm($source_config) {
    $form = parent::sourceForm($source_config);

    // Override the default "source" element provided by Feeds.
    // Clearer label and description.
    $form['source']['#title'] = t('URL of OAI-PMH endpoint');
    $form['source']['#description'] = t('You can use services like http://www.opendoar.org/ to get a list of repository OAI-PMH endpoints.');
    // Add AJAX event handler.
    $form['source']['#ajax'] = array(
      'callback'  => 'feeds_oai_pmh_ajax_callback',
      'wrapper' => 'ahah-element',  // ID of div element to update.
      'method' => 'replace',
      'effect' => 'fade',
      'event' => 'change',
    );
    // A set wrapper to handle replacement by AJAX callback
    $form['source']['#prefix'] = '<div class="clear-block" id="ahah-element">';

    // Get info from repository to populate settings.
    $set_options = feeds_oai_pmh_sets_options(FALSE);
    if ($source_config['source']) {
      require_once(drupal_get_path('module', 'feeds_oai_pmh') . '/feeds_oai_pmh.inc');

      $result = feeds_oai_pmh_identify($source_config['source']);
      if ($result['status'] == 0) {
        $source_config = array_merge($source_config, $result['repository']);
        $set_options = feeds_oai_pmh_sets_options($result['repository']['sets']);
      }
      else {
        drupal_set_message(t('There was a problem fetching repository information: !list', array('!list' => $result['output'])));
      }

      $msg = feeds_oai_pmh_current_status_msg($source_config['source'], $source_config['set']);
      if ($msg) {
        $form['status'] = array(
          '#markup' => $msg,
          '#prefix' => '<div class="messages status">',
          '#suffix' => '</div>',
        );
      }
    }

    $form['set'] = array(
      '#type' => 'select',
      '#title' => t('Set to fetch'),
      '#default_value' => $source_config['set'],
      '#options' => $set_options,
      '#suffix' => '',
      '#ajax' => array(
        'callback' => 'feeds_oai_pmh_ajax_callback',
        'wrapper' => 'ahah-element',  // ID of div element to update.
        'method' => 'replace',
        'effect' => 'fade',
        'event' => 'change',
      ),
    );
    $form['use_dates'] = array(
      '#type' => 'checkbox',
      '#title' => 'Limit fetch by record creation date',
      '#default_value' => $source_config['use_dates'],
    );
    $form['dates'] = array(
      '#type' => 'fieldset',
      '#title' => t('Record creation dates to fetch'),
      // Form element IDs are edit-feeds-[feeds-object]-[form-element-id]
      '#states' => array(
        'visible' => array(
          '#edit-feeds-feedsoaihttpfetcher-use-dates' => array('checked' => TRUE),
         ),
      ),
    );
    if ($source_config['earliest_timestamp'] > 0) {
      $date = format_date($source_config['earliest_timestamp'], 'custom', 'M d, Y');
      $form['dates']['#description'] = t('Note: earliest record reported by repository is @date',
          array('@date' => $date));
    }
    $form['dates']['from'] = array(
      '#type' => 'date',
      '#title' => t('Starting date'),
      '#default_value' => $source_config['dates']['from'],
    );
    $form['dates']['to'] = array(
      '#type' => 'date',
      '#title' => t('Ending date'),
      '#default_value' => $source_config['dates']['to'],
    );
    $form['restart'] = array(
      '#type' => 'checkbox',
      '#title' => t('Reset import for this repository/set to above settings'),
      '#description' => t('This forces any imports that are currently underway
          for the chosen repository/set to start over from the beginning.
          Normally, all imports that have already begun will only try to fetch
          new items until this option is checked, or if the "Delete items"
          option is used.'),
      '#suffix' => '</div>',  // Close $form['source']['#prefix'].
    );

    return $form;
  }

  /**
   * Override parent::sourceFormValidate().
   */
  public function sourceFormValidate(&$values) {
    require_once(drupal_get_path('module', 'feeds_oai_pmh') . '/feeds_oai_pmh.inc');
    $result = feeds_oai_pmh_identify($values['source']);
    if ($result['status'] != 0) {
      return;
    }
    // TODO: Check that start date <= repository's reported earliest_timestamp
    // Check that start date <= end date
    if ($values['use_dates']) {
      $from_timestamp = $this->dateFieldToTimestamp($values['dates']['from']);
      $until_timestamp = $this->dateFieldToTimestamp($values['dates']['to']);
      if ($from_timestamp > $until_timestamp) {
        form_set_error('feeds][source', t('The ending date must be later than the starting date'));
      }
    }
    // Check for restart option.
    if ($values['restart']) {
      variable_del('feeds_oai:resumptionToken:' . $values['set'] . ':' . $values['source']);
      variable_del('feeds_oai:from:' . $values['set'] . ':' . $values['source']);
      unset($values['restart']);
      drupal_set_message(t('Import for this repository/set has been reset, ignoring any previous imports.'));
    }
  }

  protected function dateFieldToTimestamp($field_value) {
    return mktime(NULL, NULL, NULL,
        $field_value['month'], $field_value['day'],
        $field_value['year']);
  }
}
