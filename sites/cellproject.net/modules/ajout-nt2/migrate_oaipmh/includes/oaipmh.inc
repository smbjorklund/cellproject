<?php

/**
 * @file
 * Support for migration from OAI-PMH sources.
 */

use Phpoaipmh\Client;
use Phpoaipmh\Endpoint;

/**
 * Implementation of MigrateSource, to handle imports from OAI-PMH sources.
 */
class MigrateSourceOaiPmh extends MigrateSource {
  /**
   * List of available source fields.
   *
   * @var array
   */
  protected $fields = array();

  /**
   * @var Client
   */
  protected $client;

  /**
   * @var Endpoint
   */
  protected $endpoint;

  /**
   * @var RecordIterator
   */
  protected $sourceRecords;

  /**
   * The default namespace for the xpath queries.
   *
   * For sources which declare a default namespace, it must be made
   * possible to assign a prefix that namespace in order to use xpath.
   * This is because not specifying a namespace in xpath is always
   * interpreted as the 'null namespace', not 'default namespace'.
   *
   * @var string
   *
   * @see https://secure.php.net/manual/en/simplexmlelement.xpath.php#115957
   * @see http://www.perlmonks.org/?node_id=530519.
   */
  protected $defaultNamespacePrefix;

  /**
   * Source constructor.
   *
   * @param string $url
   *   The url to the OAI-PMH source.
   * @param array $fields
   *   Optional - keys are field names, values are descriptions. Use to override
   *   the default descriptions, or to add additional source fields which the
   *   migration will add via other means (e.g., prepareRow()).
   * @param array $options
   *   Options applied to this source.
   */
  public function __construct($url, $metadata_prefix, $from = NULL, $until = NULL, $set = NULL, $resumption_token = NULL, array $fields = array(), array $options = array()) {
    parent::__construct($options);

    $this->sourceUrl = $url;
    $this->metadataPrefix = $metadata_prefix;
    $this->from = $from;
    $this->until = $until;
    $this->set = $set;
    $this->resumptionToken = $resumption_token;
    $this->fields = $fields;
    $this->options = $options;

    // Make sure the autoloader is always registered since the migrate module
    // doesn't always bootstrap far enough.
    drupal_load('module', 'composer_manager');
    composer_manager_register_autoloader();

    $this->client = new Client($this->sourceUrl);
    $this->endpoint = new Endpoint($this->client);

    // Get a ResponseList object to fetch the source records.
    $this->sourceRecords = $this->endpoint->listRecords($this->metadataPrefix, $this->from, $this->until, $this->set, $this->resumptionToken);
  }

  /**
   * Return a string representing the source query.
   *
   * @return string
   *   Return a string representing the source query.
   */
  public function __toString() {
    return $this->sourceUrl;
  }

  /**
   * Returns a list of fields available to be mapped from the source query.
   *
   * @return array
   *   Keys: machine names of the fields (to be passed to addFieldMapping)
   *   Values: Human-friendly descriptions of the fields.
   */
  public function fields() {
    return $this->fields;
  }

  /**
   * Return a count of all available source records.
   */
  public function computeCount() {
    return $this->sourceRecords->getTotalRecordsInCollection();
  }

  /**
   * Implementation of MigrateSource::performRewind().
   */
  public function performRewind() {
  }

  /**
   * Implementation of MigrateSource::getNextRow().
   *
   * Return the next line of the OAI-PMH source as a SimpleXMLElement.
   *
   * @return object
   *   Data for the next row from the XML source files.
   */
  public function getNextRow() {
    $row = new stdClass();
    // Store resumptionToken in row when last item in batch is processed.
    // This can be used to store the resumptionToken in a variable
    // in prepareRow().
    $batch = $this->sourceRecords->getBatch();
    if (count($batch) == 0) {
      $row->resumptionToken = $this->sourceRecords->getResumptionToken();
    }
    // Fetch next item.
    $row->xml = $this->sourceRecords->nextItem();

    if ($row->xml instanceof SimpleXMLElement) {
      // Register namespaces for row.
      $namespaces = $row->xml->getNamespaces(TRUE);
      foreach ($namespaces as $prefix => $url) {
        if ($prefix == '' && $this->defaultNamespacePrefix != '') {
          $prefix = $this->defaultNamespacePrefix;
        }
        $row->xml->registerXPathNamespace($prefix, $url);
      }
      return $row;
    }
    return NULL;
  }

  /**
   * {@inheritdoc}
   */
  protected function hash($row) {
    // $row->xml is a SimpleXMLElement. Temporarily set it as an XML string
    // to prevent parent::hash() failing when try to create the hash.
    return parent::hash($row->xml->asXML());
  }

  /**
   * Get the default namespace for xpath queries.
   */
  public function getDefaultNamespacePrefix() {
    return $this->defaultNamespacePrefix;
  }

  /**
   * Set the default namespace for xpath queries.
   */
  public function setDefaultNamespacePrefix($prefix) {
    $this->defaultNamespacePrefix = $prefix;
  }

}
