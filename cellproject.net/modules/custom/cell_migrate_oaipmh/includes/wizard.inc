<?php

/**
 * A wizard for registering CELL OAI-PMH migration groups.
 *
 * Each created group will have a single CellNodeMigration task, configured for
 * the OAI-PMH base URL for a data provider.
 */
class CellNodeMigrationWizard extends MigrateUIWizard {
  protected $sourceUrl;

  public function __construct() {
    parent::__construct();
    $this->addStep(t('OAI-PMH Data Provider'), 'sourceDataForm');
    $this->addStep(t('Review'), 'reviewForm');
  }

  public function getSourceName() {
    return t('CELL OAI-PMH');
  }

  public function sourceDataForm(&$form_state) {
    $form['source_name'] = array(
      '#type' => 'textfield',
      '#title' => t('Name'),
      '#size' => 60,
      '#required' => TRUE,
      '#description' => t('The name of the data provider.')
    );
    $form['source_url'] = array(
      '#type' => 'textfield',
      '#title' => t('URL'),
      '#size' => 60,
      '#required' => TRUE,
      '#description' => t("The data provider's OAI-PMH base URL."),
    );
    $form['source_set'] = array(
      '#type' => 'textfield',
      '#title' => t('Set'),
      '#size' => 60,
      '#description' => t("An optional set criteria for selective harvesting. If a set is specified, it must be expressed using a 'setSpec' (a colon-separated list indicating a path)."),
    );
    return $form;
  }

  public function sourceDataFormValidate(&$form_state) {
    $this->groupTitle = $form_state['values']['source_name'];
    $this->groupName = preg_replace('/[^A-Za-z0-9]/', '', $this->groupTitle);
    $this->sourceUrl = $form_state['values']['source_url'];
    $this->sourceSet = $form_state['values']['source_set'];
    $this->addMigration('CellNode', 'CellNodeMigration', array(
      'url' => $this->sourceUrl,
      'set' => $this->sourceSet,
      )
    );
  }

  public function reviewForm(&$form_state) {
    $this->groupArguments = array(
      'source_url' => $this->sourceUrl,
      'source_system' => $this->getSourceName(),
    );
    $form['description'] = array(
      '#prefix' => '<div>',
      '#markup' => t('<p>Please review your migration settings. After saving these import settings, a new migration group will be made available on the Migrate dashboard.</p>'),
      '#suffix' => '</div>',
    );
    $rows = array(
      array(t('Name'), $this->groupTitle),
      array(t('URL'), $this->sourceUrl),
      array(t('Set'), $this->sourceSet),
    );
    $form['summary'] = array(
      '#markup' => theme('table', array('rows' => $rows)),
    );
    return $form;
  }
}
