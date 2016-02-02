<?php

/**
 * * Plugin Name:       TMJ Post Notice
 * * Plugin URI:        http://www.minijohn.me.
 * * Description:       Show stuff above content 
 * * Version:           1.0.0
 * * Author:            The Mini John
 * * Author URI:        http://minijohn.me
 * * License:           GPL-2.0+
 * * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

require_once( dirname( __FILE__ ) . '/class-tmj-post-notice-display.php' );
require_once( dirname( __FILE__ ) . '/class-tmj-post-editor.php' );
require_once( dirname( __FILE__ ) . '/class-tmj-post-notice.php' );

function tmj_post_notice_start() {
  if ( is_admin() ) {
    $post_editor = new Tmj_Post_Notice_Editor();
    $post_notice = new Tmj_Post_Notice( $post_editor );
  } else {
    $post_notice = new Tmj_Post_Notice_Display();
  }

  $post_notice->initialize();
}

tmj_post_notice_start();

