(function($) {

/**
 * Behavior handling the player opening logic.
 */
Drupal.behaviors.pupOpener = {
  attach: function(context, settings) {
    /**
     * Constructor for the player opener.
     */
    var Opener = function() {
      var self = this;
      this.interval = null; // Interval for checking removals from playlist.
      this.updateTrackCount(); // Initial update.
      this.listenTrackRemoval();

      // Attach player opening function.
      $('.pup-opener').click(function(event) {
        self.open();
      });

      // Attach playlist add function.
      $('.pup-playlist-add a').click(function(event) {
        event.preventDefault(); // Do not follow the link.

        if (Drupal.settings.pup.addLinkActiveColor && Drupal.settings.pup.addLinkNormalColor) {
          // Add some user feedback. jQuery Color required for this animation to work.
          $(this).css('backgroundColor', Drupal.settings.pup.addLinkActiveColor).animate({ backgroundColor: Drupal.settings.pup.addLinkNormalColor }, 3000);
        }

        // Add track to playlist.
        if (self.addTrack({ mp3: $(this).attr('href'), title: $(this).parent().attr('title') }) == 1) {
          // This was the first track added to the playlist: open the player.
          self.open();
        }
        else if (Drupal.settings.pup.openOnAdd) {
          // Always open the player after adding to playlist.
          self.open();
        }

        // Extra visual feedback.
        self.updateTrackCount();
      });
    }

    /**
     * Opens the player window, or give it focus if it already exists.
     */
    Opener.prototype.open = function() {
      // Polyfill for cross-browser retrieval of window.location.origin.
      if (!window.location.origin) {
        window.location.origin = '' + window.location.protocol + '//' + window.location.host;
      }

      // Open window without location to retrieve its reference if it exists.
      var playerWindow = window.open('', 'pup', 'width=450,height=300,location=no,menubar=no,resizable=yes,scrollbars=yes,status=no,toolbar=no');
      if (!playerWindow || playerWindow.location.href != window.location.origin + Drupal.settings.pup.playerPath) {
        playerWindow = window.open(Drupal.settings.pup.playerPath, 'pup');
      }
      if (playerWindow && playerWindow.focus) {
        playerWindow.focus();
      }
    }

    /**
     * Adds a track to the playlist.
     *
     * @return
     *   Updated number of tracks in the playlist.
     */
    Opener.prototype.addTrack = function(track) {
      // Flush storage cache (storage might have been changed from
      // within the player).
      $.jStorage.reInit();

      // Add track to the stored playlist. This is redundant with the
      // playlist that's stored in markup within the player, but ensures
      // that the playlist is built even when the player is not running,
      // and that it is preserved when the player is closed.
      var playlist = $.jStorage.get('pup-playlist', new Array());
      track.timestamp = new Date().getTime(); // The timestamp is also used as an id for tracks.
      playlist.push(track);
      $.jStorage.set('pup-playlist', playlist);

      // Save the dirty timestamp; any track with a greater or equal
      // timestamp will be considered dirty. If a dirty timestamp was
      // already set, it is preserved.
      var dirty = $.jStorage.get('pup-dirty-add', track.timestamp);
      $.jStorage.set('pup-dirty-add', dirty);

      return playlist.length;
    }

    /**
     * Starts updating the track count based on a dirty flag. This
     * watches for track removals performed from within the player.
     */
    Opener.prototype.listenTrackRemoval = function() {
      var self = this;
      var updateTrackCount = function() {
        // Flush storage cache since it may have been changed from
        // outside the current window.
        $.jStorage.reInit();

        // Check dirty flag.
        if ($.jStorage.get('pup-dirty-remove', false)) {
          $.jStorage.deleteKey('pup-dirty-remove');
          self.updateTrackCount();
        }
      }

      if (!this.interval) {
        this.interval = setInterval(updateTrackCount, 500);
      }
    }

    /**
     * Updates the track count.
     */
    Opener.prototype.updateTrackCount = function() {
      var playlist = $.jStorage.get('pup-playlist', new Array());
      var message;
      if (playlist.length <= 0) {
        message = Drupal.t('The playlist is empty');
      }
      else {
        message = Drupal.formatPlural(playlist.length, '@count track', '@count tracks');
      }
      $('.pup-opener-count').html(' (' + message + ')'); // TODO: Theme function.
    }

    // Add open handler.
    var opener = new Opener();
  }
};

})(jQuery);