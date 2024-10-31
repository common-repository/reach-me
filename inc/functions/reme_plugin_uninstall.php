<?php

// Block direct requests
if ( !defined('ABSPATH') ) {
	exit();
}

// Uninstall the plugin
function reme_plugin_uninstall() {
	// Remove all options
	global $wpdb;
	$customOptions = $wpdb->get_results( "SELECT `option_name` FROM $wpdb->options WHERE `option_name` LIKE 'reme_%'" );

	if ( !empty( $customOptions ) ) {
		foreach ( $customOptions as $key => $value ) {
			delete_option( $value->option_name );
		}
	}
}
register_uninstall_hook( __FILE__, 'reme_plugin_uninstall' );