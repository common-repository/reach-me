<?php

/*
 * Plugin Name: Reach Me
 * Plugin URI: https://github.com/IversenCarpeNoctem/reach-me
 * Description: Reach Me is a simple, yet powerful plugin that allows you to display your contact information anywhere on your website.
 * Author: Iversen - Carpe Noctem
 * Version: 1.0.8
 * Author URI: https://github.com/IversenCarpeNoctem
 * GitHub Plugin URI: IversenCarpeNoctem/reach-me
 * Domain Path: /languages
 * Text Domain: reach-me
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */	

// Block direct requests
if ( !defined('ABSPATH') ) {
	exit();
}

// Define plugin version
define( 'REME_VERSION', '1.0.8' );
// Pathinfo
$pathinfo = pathinfo( dirname( plugin_basename( __FILE__ ) ) );
// Define plugin name
if ( !defined( 'REME_PATH' ) ) { define( 'REME_PATH', plugin_dir_path( __FILE__ ) ); }
// Define plugin name
if ( !defined( 'REME_NAME' ) ) { define( 'REME_NAME', $pathinfo['filename'] ); }
// Define plugin URL
if ( !defined( 'REME_URL' ) ) { define( 'REME_URL', plugins_url(REME_NAME) . '/' ); }

// Load plugin textdomain
function reme_load_textdomain() {
  load_plugin_textdomain( 'reach-me', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' ); 
}
add_action( 'init', 'reme_load_textdomain' );

// Require the includes
function reme_require_pages() {
  require_once( REME_PATH . 'inc/pages/settings.php' );
  require_once( REME_PATH . 'inc/pages/how-to-use.php' );
}
add_action( 'plugins_loaded', 'reme_require_pages' );

// Require the includes
function reme_require_functions() {
	require_once( REME_PATH . 'inc/functions/reme_admin_enqueue_scripts.php' );
	require_once( REME_PATH . 'inc/functions/reme_add_menu_pages.php' );
  require_once( REME_PATH . 'inc/functions/reme_plugin_uninstall.php' );
}
add_action( 'plugins_loaded', 'reme_require_functions' );


// ------------- Functions ------------- 

function reme_updated_notice( $msg, $error = false ) { ?>
	<?php if ( $error ) { ?>
		<div class="error">
			<p><?php _e( $msg ); ?></p>
		</div>	
	<?php } else { ?>
		<div class="updated">
			<p><?php _e( $msg ); ?></p>
		</div>
	<?php } ?>
<?php }