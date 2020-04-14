(function ($) {

Drupal.behaviors.tocLoader = {
  attach: function (context, settings) {
    $(Drupal.settings.toc_scope, context).once('toc-scope', function() {
      var toc = $('<ul id="toc"></ul>');

      toc = toc.tableOfContents(this, {
        startLevel: Drupal.settings.toc_start_level,
        depth: Drupal.settings.toc_depth,
        topLinks: Drupal.settings.toc_topLinks
      });

      if ($('li', toc).length > 0) {
        $(Drupal.settings.toc_dest).prepend(toc);
        $('#toc').localScroll();
        // For toplinks.
        $('.content').localScroll();
      }
    });
  }
};

})(jQuery);
