<?php
/**
 * @file
 * drush command for harvesting authorities.
 */

/**
 * Implements hook_drush_command().
 */
function opac_authorities_drush_command() {
  $items = array(
    'opac-auth-harvest' => array(
      'callback' => 'opac_authorities_drush_harvest',
      'description' => dt('Import a set of authority records into Drupal'),
      'aliases' => array('auth-harvest'),
      'options' => array(
        'servers' => 'A comma-separated list of server ids. Only those servers will be harvseted.',
        'batch-size' => 'Number of authorities to harvest before committing to database.',
        'from' => 'The first authority id to harvest.',
        'to' => 'The last authority id to harvest.',
        'file' => 'You must give the absolute path of a file. Allows to specify a file containing auth ids to harvest.',
        'print-id' => 'Print each harvested authority id',
      ),
    ),
  );

  return $items;
}

/**
 * Prepare opac authorities harvesting.
 */
function opac_authorities_drush_harvest() {
  module_load_include('inc', 'opac_authorities', "includes/harvest");

  $servers = array();
  // Get command parameters.
  $servers = drush_get_option_list('servers');
  $verbose = drush_get_option('verbose');
  if (!$verbose) {
    $verbose = drush_get_option('v');
  }
  $batch_size = drush_get_option('batch-size');

  // Check from parameter.
  $from = drush_get_option('from');
  if ($from && !is_numeric($from)) {
    exit("[Error] --from parameter must be a numeric value.\n");
  }

  // Check to parameter.
  $to = drush_get_option('to');
  if ($to && !is_numeric($to)) {
    exit("[Error] --to parameter must be a numeric value.\n");
  }

  $file = drush_get_option('file');
  if ($file && ($from || $to)) {
    exit("[Error] Using file parameter with a range (from/to) is not permitted.\n");
  }

  $to = drush_get_option('to');
  $print_id = drush_get_option('print-id');
  opac_authorities_harvest($servers, $verbose, $batch_size, $from, $to, $file, $print_id);
}
