<?php

class Tmj_Post_Notice {

  public function __construct ( $editor ) {
    $editor->initialize();
  }

  public function initialize() {
    add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_styles' ) );
    add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
  }

  public function enqueue_styles() {
    $screen = get_current_screen();
    if ( 'post' != $screen->id ) {
      return;
    }

    wp_enqueue_style(
      'tmj-post-notice-admin',
      plugins_url('tmj-post-notice/assets/css/admin.css'),
      array(),
      '1.0.0'
    );
  }

  public function enqueue_scripts() {
    $screen = get_current_screen();
    if ( 'post' != $screen->id ) {
      return;
    }

    wp_enqueue_script(
      'tmj-post-notice-admin',
      plugins_url( 'tmj-post-notice/assets/js/admin.js' ),
      array( 'jquery' ),
      '1.0.0'
    );
  }
}

