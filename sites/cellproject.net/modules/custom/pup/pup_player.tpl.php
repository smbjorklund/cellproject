<?php
/**
 * @file
 * Template file for the media player. This template uses HTML5
 * in order to use an HTML5-friendly media player: jPlayer.
 */
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title><?php print $head_title; ?></title>
    <?php print $styles; ?>
    <?php print $scripts; ?>
    <?php if ($favicon): ?>
      <link rel="shortcut icon" href="<?php print $favicon ?>" />
    <?php endif; ?>
  </head>
  <body id="pup-player">
    <?php /* Player markup based on jPlayer demo-02. jPlayer's skins expect something like that. */ ?>
    <div id="jp-player" class="jp-jplayer"></div>
    <div class="jp-audio">
      <div class="jp-type-playlist">
        <div id="jp-interface" class="jp-interface">
          <ul class="jp-controls">
            <li><a href="#" class="jp-play" tabindex="1"><?php print t('play') ?></a></li>
            <li><a href="#" class="jp-pause" tabindex="1"><?php print t('pause') ?></a></li>
            <li><a href="#" class="jp-stop" tabindex="1"><?php print t('stop') ?></a></li>
            <li><a href="#" class="jp-mute" tabindex="1"><?php print t('mute') ?></a></li>
            <li><a href="#" class="jp-unmute" tabindex="1"><?php print t('unmute') ?></a></li>
            <li><a href="#" class="jp-previous" tabindex="1"><?php print t('previous') ?></a></li>
            <li><a href="#" class="jp-next" tabindex="1"><?php print t('next') ?></a></li>
          </ul>
          <div class="jp-progress">
            <div class="jp-seek-bar">
              <div class="jp-play-bar"></div>
            </div>
          </div>
          <div class="jp-volume-bar">
            <div class="jp-volume-bar-value"></div>
          </div>
          <div class="jp-current-time"></div>
          <div class="jp-duration"></div>
        </div>
        <div id="jp-playlist" class="jp-playlist">
          <ul>
            <!-- The method Playlist.displayPlaylist() uses this unordered list -->
          </ul>
          <div class="pup-playlist-empty"><?php print t('The playlist is currently empty.') ?></div>
        </div>
      </div>
    </div>
  </body>
</html>