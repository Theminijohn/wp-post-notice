(function( $ ) {
  'use strict';

  $(function() {
    var $preview, $editor;

    $preview = $('#tmj-post-notice-preview');
    $editor  = $('textarea[name="tmj-post-notice-editor"]');

    $preview.html ( $editor.text() );
    $editor.on( 'keyup', function(evt) {
      $preview.html($(this).val());
    });
  })
})( jQuery );
