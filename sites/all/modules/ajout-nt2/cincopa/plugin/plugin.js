(function($) {
  $(document).ready(function(){
    if(getCookie('cincopa_help_close')) {
      $(".cincopa_help_wrapper").hide();
    }

    $("#icon_close").on("click", function(){
      $(".cincopa_help_wrapper").slideUp();
      setCookie('cincopa_help_close','1');
    });
  })

  function setCookie(key, value) {
    var expires = new Date();
    expires.setTime(expires.getTime() + (60 * 1 * 24 * 60 * 60 * 1000));
    document.cookie = key + '=' + value + ';expires=' + expires.toUTCString() + '; path=/';
  }

  function getCookie(key) {
    var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');
    return keyValue ? keyValue[2] : null;
  }

  CKEDITOR.plugins.add('cincopa', {
    requires: ['richcombo', 'iframedialog'],
    init: function(editor) {
      var config = editor.config,
         lang = editor.lang.format;

      // Load iframe on button click
      var height = 500, width = 1000;
      CKEDITOR.dialog.addIframe(
        'cincopa_iframe_dialog', 
        'Insert Media from Cincopa', 
        'http://www.cincopa.com/wpplugin/start.aspx', 
        width, 
        height, 
        function() {}, { 
          onOk : function() {
            $('.cke_dialog_background_cover').hide();
          }, 
          onCancel : function() {
            $('.cke_dialog_background_cover').hide();
          },
          onLoad : function() {
            $('.cke_dialog_background_cover').show();
          }
        }
      );

      // Add command to load iframe on button click
      editor.addCommand( 'cincopa_iframe', new CKEDITOR.dialogCommand( 'cincopa_iframe_dialog' ) );

      // Add button to add new gallery
      editor.ui.addButton( 'cincopa_new_gallery',
      {
        label: 'Add new cincopa gallery',
        command: 'cincopa_iframe',
        className: 'cincopa_new_gallery',
        icon: this.path + 'images/media-cincopa.gif',
      });

      // Add a dropdown to list all galleries
      editor.ui.addRichCombo('cincopa_items', {
        label: "Cincopa",
        className: 'cincopa_items',
        multiSelect: false,

        // Add css inside dropdown
        panel: {
            css: [this.path + 'css/dropdown.css'],
        },

        init: function () {
          var buildGalleryList = this;
          // Reinitialize a CKEditor Combobox/Drop Down Menu on load
          var rebuildList = CKEDITOR.tools.bind(buildList, buildGalleryList);
          rebuildList();
          $(editor).bind('rebuildList', rebuildList);

          // Reinitialize a CKEditor Combobox/Drop Down Menu on click of dropdown
          $('.cke_toolbar').on('click','.cincopa_items a', function() {
            var rebuildList = CKEDITOR.tools.bind(buildList, buildGalleryList);
            rebuildList();
            $(editor).bind('rebuildList', rebuildList);
          });
        },

        // Action to perform on click of dropdown value
        onClick: function (value) {
          if (value == 'login') {
            // Redirect to login for cincopa
            window.open ('https://www.cincopa.com/login.aspx');
          }
          else {
            // Insert gallery in editor on click of gallery
            editor.focus();
            editor.insertHtml('[cincopa ' + value + ']');
          }
        }
      });
    }
  });

  // Function to build list in dropdown
  var buildList = function () {
    var cincopaGallery = this;
    // Reset list
    cincopaGallery._.items = {};
    cincopaGallery._.list._.items = {};

    // Get all galleries if user is loggedin, data.response.error means user is loggedout
    var url = "https://www.cincopa.com/media-platform/my-galleries-getlist?disable_editor=true";
    $.ajax({
      type: "GET",
      dataType: "jsonp",
      url: url,
      success: function(data) {
        $('.cke_dialog_background_cover').show();

        if( data.response.error ) {
          // Show login link in dropdown if user is not logged in
          cincopaGallery.add('login', 'Please Login or Register first', 'Please Login or Register first');
        }
        else {
          // Show Galleries created in dropdown if user is logged in
          cincopaItem = data.response.folders;
          if (cincopaItem.length) {
            cincopasize = cincopaItem.length;
            $.each(cincopaItem, function(i, obj) {
              cincopaGallery.add(obj.sysdata.did, '<strong>' + obj.sysdata.name + '</strong> (id:' + obj.sysdata.did + ')<br/>Modified: ' + obj.sysdata.modified, obj.sysdata.did);
            });

            // Display number of galleries at bottom of dropdown
            if (cincopasize != 0) {
              var cincopastring = 'found ' + cincopasize;
              if (cincopasize == 1) {
                cincopastring += ' gallery'
              }
              else {
                cincopastring += ' galleries'
              }
              cincopaGallery.startGroup( cincopastring );
            }
          }
          else {
            // Trigger click of "Cincopa new gallery" button if there is no galleries created
            $('.cincopa_new_gallery').trigger('click');
          }
        }
        // Remove the old unordered list from the dom.
        // This is just to cleanup the old list within the iframe
        $(cincopaGallery._.panel._.iframe.$).contents().find("ul").remove();
        $(cincopaGallery._.panel._.iframe.$).contents().find("li").remove();
        $(cincopaGallery._.panel._.iframe.$).contents().find("h1").remove();
        // Force CKEditor to commit the html it generates through this.add
        cincopaGallery._.committed = 0; // We have to set to false in order to trigger a complete commit()
        cincopaGallery.commit();

        // Remove title from dropdown list
        $(cincopaGallery._.panel._.iframe.$).contents().find("li").each(function() {
          $(this).find('a').attr('title', '');
        });
      }
    });
  };
})(jQuery);
