<?php

// Block direct requests
if ( !defined('ABSPATH') ) {
	exit();
}

// Add css and js for plugin
function reme_admin_enqueue_scripts() {
	$currentScreen = get_current_screen();
  if( $currentScreen->id === "toplevel_page_reach-me-settings" ) {
    wp_enqueue_style( 'reach-me-font-awesome', REME_URL . 'fonts/font-awesome-4.7.0/css/font-awesome.min.css', false, '4.7.0' );
  }
}
add_action( 'admin_enqueue_scripts', 'reme_admin_enqueue_scripts' );