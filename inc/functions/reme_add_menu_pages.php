<?php

// Block direct requests
if ( !defined('ABSPATH') ) {
	exit();
}

// Add menu page for admin menu
function reme_add_menu_pages() {
	add_menu_page( $title = __( 'Reach Me', 'reach-me' ), $title, 'edit_others_posts', 'reach-me-settings', 'reme_links_admin', 'dashicons-phone' );
	add_submenu_page( 'reach-me-settings', $title = __( 'How to use', 'reach-me' ), $title, 'edit_others_posts', 'reach-me-how-to-use', 'reme_how_to_use' );
}
add_action( 'admin_menu', 'reme_add_menu_pages' );