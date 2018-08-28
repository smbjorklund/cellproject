<?php

/**
 * @file
 * Administration pages.
 */

/**
 * The Pop-Up Player configuration form.
 */
function pup_settings() {
  $form['player_behavior'] = array(
    '#type' => 'fieldset',
    '#title' => t('Player behavior'),
  );
  $form['player_behavior']['pup_open_on_add'] = array(
    '#type' => 'radios',
    '#title' => t('Automatic opening of player window'),
    '#options' => array(
      PUP_OPEN_ON_ADD_ALWAYS => t('Open the player window everytime a track is added.'),
      PUP_OPEN_ON_ADD_FIRST_TIME => t('Open the player window only the first time a track is added.'),
    ),
    '#description' => t('Recommendation: Opening the player window everytime a track is added gives the user a stronger visual confirmation of his/her action, and reminds him/her that the player resides in a separate window.'),
    '#default_value' => variable_get('pup_open_on_add', PUP_OPEN_ON_ADD_ALWAYS),
    '#required' => TRUE
  );
  $form['player_behavior']['pup_play_on_add'] = array(
    '#type' => 'radios',
    '#title' => t('Automatic playback'),
    '#options' => array(
      PUP_PLAY_ON_ADD_AUTO => t('Play track immediately when it is added to the playlist, unless another track is already playing.'),
      PUP_PLAY_ON_ADD_NONE => t('Do not play track automatically. User must start playback from the player window.'),
    ),
    '#description' => t('Recommendation: Playing tracks automatically reduces "friction" between the user\'s action of adding a track to the playlist and actually listening to the track. The player\'s window must be refreshed for any change to take effect.'),
    '#default_value' => variable_get('pup_play_on_add', PUP_PLAY_ON_ADD_AUTO),
    '#required' => TRUE
  );
  $form['player_appearance'] = array(
    '#type' => 'fieldset',
    '#title' => t('Player appearance'),
  );
  $form['player_appearance']['pup_show_hour'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show hours in time display'),
    '#default_value' => variable_get('pup_show_hour', 1),
    '#return_value' => 1,
  );
  $form['integration'] = array(
    '#type' => 'fieldset',
    '#title' => t('Integration options'),
  );
  $form['integration']['pup_add_link_active_color'] = array(
    '#type' => 'textfield',
    '#title' => t('Active background color for "Add to playlist" links'),
    '#description' => t('To provide visual feedback to the user when an "Add to playlist" link is clicked, the link\'s background will be set to this color, and gradually fade to the normal color. The specified value must be a valid CSS color (e.g. "#ffffff") or empty. If empty, no effect will be applied on the background color.'),
    '#default_value' => variable_get('pup_add_link_active_color', '#fff586'),
    '#maxlength' => 15,
    '#size' => 15,
  );
  $form['integration']['pup_add_link_normal_color'] = array(
    '#type' => 'textfield',
    '#title' => t('Normal background color for "Add to playlist" links'),
    '#description' => t('After an "Add to playlist" link has been clicked, its background will gradually fade to this color. The specified value must be a valid CSS color (e.g. "#ffffff") or empty. If empty, no effect will be applied on the background color.'),
    '#default_value' => variable_get('pup_add_link_normal_color', 'transparent'),
    '#maxlength' => 15,
    '#size' => 15,
  );
  return system_settings_form($form);
}
