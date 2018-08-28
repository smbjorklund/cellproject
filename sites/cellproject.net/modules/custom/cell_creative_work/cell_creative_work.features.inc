<?php
/**
 * @file
 * cell_creative_work.features.inc
 */

/**
 * Implements hook_node_info().
 */
function cell_creative_work_node_info() {
  $items = array(
    'work' => array(
      'name' => t('Creative work'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
