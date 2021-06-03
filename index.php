<?php
/**
 * Plugin Name: #PLUGIN_NAME#
 * Plugin URI: https://93digital.co.uk/
 * Description: #PLUGIN_DESCRIPTION#
 * Version: 0.1
 * Requires at least: #WP_VERSION#
 * Requires PHP: #PHP_VERSION#
 * Author: 93digital
 * Author URI: https://93digital.co.uk/
 * License: GPLv2 or later
 * Text Domain: #PLUGIN_NAMESPACE#
 * 
 * Main plugin configuration file.
 * It contains configuration bits such as error reporting levels, an autoloader and some helper funcitons.
 * But most importantly acts as a bootstrapper for the plugins core functionality.
 *
 * @package #PLUGIN_NAMESPACE#
 */

namespace #PLUGIN_NAMESPACE#;

if ( ! defined( 'ABSPATH' ) ) {
	// Who are you? Who who. Who who.
	exit;
}

// Base filepath and URL constants, without a trailing slash.
define( '#PLUGIN_CONSTANT#_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );
define( '#PLUGIN_CONSTANT#_URI', plugins_url( plugin_basename( __DIR__ ) ) );

/**
 * INCLUDE ANY UTILITY OR HELPER FILES HERE.
 */
include_once #PLUGIN_CONSTANT#_PATH . '/helpers.php';

/**
 * 'spl_autoload_register' callback function.
 * Autoloads all the required plugin classes, found in the /classes directory (relative to the plugin's root).
 *
 * @param string $class The name of the class being instantiated inculding its namespaces.
 */
function autoloader( $class ) {
	// $class returns the classname including any namespaces - this removes the namespace so we can locate the class's file.
	$raw_class = explode( '\\', $class );
	$filename  = str_replace( '_', '-', strtolower( end( $raw_class ) ) );

	$filepath = __DIR__ . '/class/class-' . $filename . '.php';

	if ( file_exists( $filepath ) ) {
		include_once $filepath;
	}
}
spl_autoload_register( __NAMESPACE__ . '\autoloader' );

/**
 * Init class.
 */
$#PLUGIN_UNDERSCORED# = new #PLUGIN_CLASS#();