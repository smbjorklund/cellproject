(function($) {

/**
 * Adds player logic to the page.
 */
Drupal.behaviors.pupPlayer = {
  attach: function (context, settings) {

    /**
     * Constructor for the Playlist object.
     *
     * @param options
     *   jPlayer constructor options for this playlist.
     */
    var Playlist = function(options) {
      this.initCssSelectors();
      this.options = options; // jPlayer options.
      this.interval = null; // Interval for updating playlist based on dirty flag.
      this.initPlayer();
    };

    /**
     * Initializes CSS selectors for player components.
     */
    Playlist.prototype.initCssSelectors = function() {
      // Element ids for player components.
      this.cssId = {
        player: 'jp-player',
        interface: 'jp-interface',
        playlist: 'jp-playlist'
      };

      // Element selectors for player components (all derived from cssId).
      this.cssSelector = {};
      for (var property in this.cssId) {
        this.cssSelector[property] = '#' + this.cssId[property];
      }
    }

    /**
     * Initializes the player with its options.
     */
    Playlist.prototype.initPlayer = function() {
      var self = this;

      $.jPlayer.timeFormat.showHour = Drupal.settings.pup.showHour;

      if (!this.options.cssSelectorAncestor) {
        this.options.cssSelectorAncestor = this.cssSelector.interface;
      }
    }

    Playlist.prototype.attach = function(ctx) {
      var self = this;

      $(this.cssSelector.player, ctx).jPlayer(this.options);

      // Bind player buttons.
      $(this.cssSelector.interface + ' .jp-previous', ctx).click(function() {
        self.previous();
        $(this).blur();
        return false;
      });
      $(this.cssSelector.interface + ' .jp-next', ctx).click(function() {
        self.next();
        $(this).blur();
        return false;
      });
    }

    /**
     * Shows or hides the empty playlist message.
     *
     * @param status
     *   Whether to show or hide the message.
     */
    Playlist.prototype.showEmpty = function(status) {
      if (status) {
        $('.pup-playlist-empty').show();
      }
      else {
        $('.pup-playlist-empty').hide();
      }
    }

    /**
     * Starts updating playlist based on dirty flag.
     */
    Playlist.prototype.listenTrackAdditions = function() {
      var self = this;
      var initialUpdate = true; // Force initial display.

      // Updates the playlist's display.
      var update = function() {
        // Flush storage cache since it may have been changed from
        // outside the player.
        $.jStorage.reInit();

        // Check dirty flag to determine if a refresh is needed.
        var dirty = $.jStorage.get('pup-dirty-add', 0);
        if (initialUpdate || dirty) {
          // Retrieve the playlist.
          var playlist = $.jStorage.get('pup-playlist', new Array());
          for (var i = 0; i < playlist.length; i++) {
            var track = playlist[i];
            // If track is new.
            if (initialUpdate || track.timestamp >= dirty) {
              self.displayTrack(track);
            }
          }

          // Reset dirty flags.
          initialUpdate = false;
          $.jStorage.deleteKey('pup-dirty-add');

          // Show/hide empty message.
          self.showEmpty(playlist.length == 0);

          // Ensure that a track is defined as the current one.
          self.ensureCurrentTrack(playlist, dirty);
        }
      }

      if (!this.interval) {
        this.interval = setInterval(update, 500);
      }
    }

    /**
     * Formats a track CSS id.
     *
     * @param timestamp
     *   Timestamp of the track whose id is to be generated.
     */
    Playlist.prototype.makeTrackCssId = function(timestamp) {
      return this.cssId.playlist + '-track-' + timestamp;
    }

    /**
     * Formats a track CSS selector.
     *
     * @param timestamp
     *   Timestamp of the track whose id is to be generated.
     */
    Playlist.prototype.makeTrackCssSelector = function(timestamp) {
      return '#' + this.makeTrackCssId(timestamp);
    }

    /**
     * Appends a track to the playlist's markup.
     *
     * @param track
     *   The track to display.
     */
    Playlist.prototype.displayTrack = function(track) {
      var self = this;
      var trackCssSelector = this.makeTrackCssSelector(track.timestamp);

      // Append track.
      $(this.cssSelector.playlist + ' ul').append(this.formatTrack(track));

      // Bind play handler.
      $(trackCssSelector).data('timestamp', track.timestamp).click(function() {
        self.changeCurrentTrack($(this).data('timestamp'), true);
        return false;
      });

      // Bind remove handler.
      $(trackCssSelector + ' ~ .pup-track-remove').data('timestamp', track.timestamp).click(function() {
        self.removeTrack($(this).data('timestamp'));
        $(this).blur();
        return false;
      });
    }

    /**
     * Formats a track's markup.
     *
     * @param track
     *   The track to format.
     */
    Playlist.prototype.formatTrack = function(track) {
      if (!track.title) {
        track.title = Drupal.t('Unknown title');
      }
      return '<li>'
        + '<a href="#" id="' + this.makeTrackCssId(track.timestamp) +'" tabindex="1" title="' + Drupal.t('Play this track') + '" class="pup-track-title' + '">' + track.title + '</a>'
        + '<a class="pup-track-remove" href="#" tabindex="1" title="' + Drupal.t('Remove this track') + '">×</a>'
        + '</li>';
    }

    /**
     * Ensures that a track is defined as the current one.
     *
     * @param newTrack
     *   Timestamp of a newly added track that must become the current track if
     *   autoplay is enabled (it is ignored otherwise).
     */
    Playlist.prototype.ensureCurrentTrack = function(playlist, newTrack) {
      if (playlist.length && !this.isPlaying()) {
        if (newTrack && Drupal.settings.pup.playOnAdd) {
          // Force play of new track, regardless of any existing current track.
          // We also force the change, in case this is the first opening of
          // the player window.
          this.changeCurrentTrack(newTrack, true, true);
        }
        else {
          // Check if a current track was known.
          currentTrack = $.jStorage.get('pup-current-track', 0);
          if (!currentTrack) {
            // No current track found, use the playlist's first track.
            currentTrack = playlist[0].timestamp;
          }
          // Apply current track selection. It can be forced given that the
          // player is not currently playing.
          this.changeCurrentTrack(currentTrack, false, true);
        }
      }
    }

    /**
     * Switches current track to another one.
     *
     * @param timestamp
     *   Timetamp of the track to make current.
     */
    Playlist.prototype.changeCurrentTrack = function(timestamp, forcePlay, forceChange) {
      var self = this;
      // Check player status early.
      var isPlaying = self.isPlaying();
      var currentTrack = $.jStorage.get('pup-current-track', 0);
      if (currentTrack != timestamp || forceChange) {
        var playlist = $.jStorage.get('pup-playlist', new Array());
        // Find the track to set as current.
        $.each(playlist, function(index, track) {
          if (track.timestamp == timestamp) {
            // Save new current timestamp.
            $.jStorage.set('pup-current-track', timestamp);
            // Switch CSS classes.
            $(self.cssSelector.playlist + ' ul .jp-playlist-current').removeClass('jp-playlist-current');
            $(self.makeTrackCssSelector(timestamp)).addClass('jp-playlist-current').parent().addClass('jp-playlist-current');
            // Switch player track.
            $(self.cssSelector.player).jPlayer('setMedia', track);
            // Continue playing.
            if (isPlaying || forcePlay) {
              self.play();
            }
            return false; // Break loop.
          }
        });
      }
      else if (!isPlaying) {
        // User clicked on the currentTrack, and it was not playing. Play it now.
        this.play();
      }
    }

    /**
     * Plays the current track.
     */
    Playlist.prototype.play = function() {
      $(this.cssSelector.player).jPlayer('play');
    }

    /**
     * Checks if the player is currently playing a track.
     */
    Playlist.prototype.isPlaying = function() {
      return !$(this.cssSelector.player).data('jPlayer').status.paused;
    }

    /**
     * Stops playing the current track.
     */
    Playlist.prototype.stop = function() {
      $(this.cssSelector.player).jPlayer('stop');
    }

    /**
     * Set current track to the next one.
     */
    Playlist.prototype.next = function(forcePlay) {
      var playlist = $.jStorage.get('pup-playlist', new Array());
      var currentTrack = $.jStorage.get('pup-current-track', 0);
      for (var i = 0; i < playlist.length; i++) {
        if (playlist[i].timestamp == currentTrack) {
          if (i < playlist.length - 1) {
            this.changeCurrentTrack(playlist[i + 1].timestamp, forcePlay);
          }
          else if (i != 0) {
            this.changeCurrentTrack(playlist[0].timestamp);
          }
        }
      }
    }

    /**
     * Set current track to the previous one.
     */
    Playlist.prototype.previous = function() {
      var playlist = $.jStorage.get('pup-playlist', new Array());
      var currentTrack = $.jStorage.get('pup-current-track', 0);
      for (var i = 0; i < playlist.length; i++) {
        if (playlist[i].timestamp == currentTrack) {
          if (i > 0) {
            this.changeCurrentTrack(playlist[i - 1].timestamp);
          }
          else if (i != playlist.length - 1) {
            this.changeCurrentTrack(playlist[playlist.length - 1].timestamp);
          }
        }
      }
    }

    /**
     * Removes a track both from storage and the display.
     */
    Playlist.prototype.removeTrack = function(timestamp) {
      var self = this;
      var playlist = $.jStorage.get('pup-playlist', new Array());
      var currentTrack = $.jStorage.get('pup-current-track', 0);
      $.each(playlist, function(index, track) {
        if (track.timestamp == timestamp) {
          if (timestamp == currentTrack) {
            self.next();
          }
          // Remove from display.
          var trackCssSelector = self.makeTrackCssSelector(timestamp);
          $(trackCssSelector).parent().remove();
          // Remove from storage.
          playlist.splice(index, 1);
          $.jStorage.set('pup-playlist', playlist);
          // Set dirty flag.
          $.jStorage.set('pup-dirty-remove', true);
          return false; // Break loop.
        }
      });
      if (playlist.length == 0) {
        this.showEmpty(true);
        $.jStorage.deleteKey('pup-current-track');
        $(this.cssSelector.player).jPlayer('clearMedia');
      }
    }

    if (context == window.document) {
      // Instanciate playlist.
      window.document.pupAudioPlaylist = new Playlist({
        ready: function() {
          window.document.pupAudioPlaylist.listenTrackAdditions();
        },
        ended: function() {
          window.document.pupAudioPlaylist.next(/*forcePlay=*/true);
        },
        play: function() {
          $(this).jPlayer('pauseOthers');
        },
        swfPath: Drupal.settings.pup.swfPath,
        supplied: 'mp3',
        cssSelector: { videoPlay: '' } // Override default selector. No need for video playback area.
      });
    }

    window.document.pupAudioPlaylist.attach(context);
  }
};

})(jQuery);
