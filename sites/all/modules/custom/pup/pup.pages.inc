<?php

/**
 * @file Page handlers for Pop-Up Player.
 */

/**
 * Menu callback. Outputs the player.
 */
function pup_player() {
  drupal_add_http_header('Content-Type', 'text/html; charset=utf-8');
  print theme('pup_player');
}

/**
 * Preprocess function for theme_pup_player().
 */
function pup_preprocess_pup_player(&$variables) {
  // TODO: Allow to configure a different skin.
  drupal_add_css(drupal_get_path('module', 'pup') . '/css/skins/bluemonday/jplayer.blue.monday.css', 'file');
  drupal_add_css(drupal_get_path('module', 'pup') . '/css/skins/bluemonday/pup.css', 'file');

  pup_add_js();
  drupal_add_js(libraries_get_path('jplayer') . '/jquery.jplayer.min.js', 'file');
  drupal_add_js(drupal_get_path('module', 'pup') . '/js/pup_player.drupal.js', 'file');

  // Construct page title
  if (drupal_get_title()) {
    $head_title = array(strip_tags(drupal_get_title()), variable_get('site_name', 'Drupal'));
  }
  else {
    $head_title = array(t('Player'), variable_get('site_name', 'Drupal'));
  }
  $variables['head_title'] = implode(' | ', $head_title);

  // Include styles and scripts.
  $variables['styles'] = drupal_get_css();
  $variables['scripts'] = drupal_get_js();
  $variables['favicon'] = theme_get_setting('toggle_favicon') ? check_url(theme_get_setting('favicon')) : '';
}

