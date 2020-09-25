README file for the Pop-Up Player (PUP) Drupal module.


-- DESCRIPTION --

The Pop-Up Player (PUP) module allows users to add audio files to a playlist as
they surf the site. PUP also provides an audio player in a separate window from
the browser's main window, allowing users to listen to their playlist,
uninterrupted, while navigating the site.

Some highlights:

* The playlist is saved in the browser's local storage. Nothing gets saved in
  Drupal.

* No user account on the site is required to create playlists.

* You may provide "Add to playlist" links in your pages just by wrapping any
  link pointing to an audio file with specific markup (see Installation below).

* The player is based on HTML5 and JavaScript, with a fallback to Flash.
  Playback is handled by jPlayer (http://www.jplayer.org).

Sites using PUP:

* http://radiospirale.org/ (in French only; try the "(+) Ajouter à la liste
  d'écoute" and "Ouvrir le lecteur audio" links).


-- REQUIREMENTS --

* Drupal 7.x
* Module: Libraries (http://drupal.org/project/libraries).
* Library: jPlayer (http://www.jplayer.org). Tested with version 2.6.0.
* Library: jStorage (http://www.jstorage.info). Tested with version 0.4.8.
* Library: jQuery Color (https://github.com/jquery/jquery-color). Tested with
  version 2.1.2.


-- LIMITATIONS --

* Internet Explorer 6 and Internet Explorer 7 are not supported because of
  restrictions with userData Behavior, which has a "same path" (rather than
  "same domain") access limitation. [https://drupal.org/node/1252232]

* Although jPlayer supports other formats, at the moment, only MP3 files are
  supported. [https://drupal.org/node/1252240]

* Audio files must conform with the codecs supported by HTML5 browsers and the
  codecs supported by the Adobe Flash plugin. See jPlayer's documentation:

  http://jplayer.org/latest/developer-guide/#jPlayer-media-encoding

* Your server must be configured properly to serve media files. See jPlayer's
  documentation:

  http://www.jplayer.org/latest/developer-guide/#jPlayer-server-response

* JavaScript is required. The player window won't even show up if JavaScript is
  disabled.


-- INSTALLATION --

* Download and extract the above required libraries to your site's library
  directory. If your library directory is sites/all/libraries, PUP will expect
  to find:

  sites/all/libraries/jplayer
  sites/all/libraries/jstorage
  sites/all/libraries/jquery-color

* Install the Libraries modules (follow its installation instructions).

* Install the PUP module as usual. See http://drupal.org/node/70151 for more
  information.

* Modify the output of your links to audio files by wrapping the links with an
  element having:

  - the "pup-playlist-add" class.
  - a title attribute containing the title to show in the playlist.

  Here's an example link that will be picked up by PUP:

  <span class="pup-playlist-add" title="The Drupal Song">
    <a href="http://example.com/sites/default/files/drupalsong.mp3">Add to playlist</a>
  </span>

  The way to modify those links will depend on what module generates them. It
  likely involves implementing a theme function in your theme. If the links are
  shown through Views, you may be able to rewrite those links within the
  field's configuration in Views.

* Go to Administration > Media > Pop-Up Player to configure various module
  options.

* Go to Administration > People > Permissions, and assign the "Access Pop-Up
  Player" permission to proper roles.

* Go to Administration > Structure > Blocks, and assign the "Pop-Up Player
  opener" block to an appropriate region.


-- DEVELOPER NOTES --

Keys used in local storage:
* pup-playlist: The playlist.
* pup-current-track: Timestamp of the current track.
* pup-dirty-add: Timestamp of a new track to add to the player.
* pup-dirty-remove: Flag indicating that a track has been removed.


-- SUPPORT --

For support requests, bug reports, and feature requests, please use PUP's issue
queue on drupal.org [https://drupal.org/project/issues/1250480?categories=All].

Please DO NOT send bug reports through e-mail or personal contact forms, use
the aforementioned issue queue instead.


-- CREDITS --

Current maintainer:
* David Lesieur (http://drupal.org/user/17157)

Skins:
* Blue Monday: based on the Blue Monday skin provided with jPlayer.
* Bloody Sunday: by Laboratoire NT2 (derived from Blue Monday).

This project has been sponsored by:
* Laboratoire NT2 (http://nt2.uqam.ca)
* Whisky Echo Bravo (http://whiskyechobravo.com)

