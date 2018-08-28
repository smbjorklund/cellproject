<?php

/**
 * @file
 * Declares our migrations.
 */

/**
 * Implements hook_migrate_api().
 */
function cell_migrate_oaipmh_migrate_api() {
  $api = array(
    'api' => 2,
    'wizard classes' => array('CellNodeMigrationWizard'),
  );
  return $api;
}
