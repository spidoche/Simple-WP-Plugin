<?php
/*
 * Plugin Name: Spidoche simple boilerplate
 * Plugin URI: http://spidoche.com
 * Description: A starter point to create a simple option page plugin with textfield, checkbox, image upload, etc.
 * Version: 0.1
 * Author: SPIDOCHE
 * Author URI: http://spidoche.com

 * USAGE : replace prefix_ and PREFIX_ to your unique plugin id
 
 */

// SECURITY
defined( 'ABSPATH' ) or die( 'Nothing to see here.' );


// DEFINE CONSTANTS
define( 'PREFIX_VERSION', '0.1');
define( 'PREFIX_PATH', plugin_dir_path(__FILE__) );
define( 'PREFIX_URL', plugins_url( '', __FILE__) ); // use plugin_dir_url(__FILE__) to include the last slash
define( 'PREFIX_BASENAME', dirname( plugin_basename( __FILE__ ) ) );


// INCLUDE OPTIONS PAGE
require_once(PREFIX_PATH.'/admin/options.php');
?>