<div id="tmj-post-notice-preview">
</div>

<textarea name="tmj-post-notice-editor">
  <?php echo get_post_meta( get_the_ID(), 'tmj-post-notice', true ); ?>
</textarea>
<?php wp_nonce_field( 'tmj-post-notice-save', 'tmj-post-notice-nonce' ); ?>

