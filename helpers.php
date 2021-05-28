<?php
/**
 * Plugin Helper functions.
 *
 * @package nine3migrate
 */

namespace #PLUGIN_NAMESPACE#;

/**
 * Data dumper.
 * Dumps data to either the screen or debug.log.
 *
 * @param mixed  $data The data to dump.
 * @param bool   $error_log Whether to dump the data to debug.log or the screen.
 * @param bool   $exit Whether to exit the script after output.
 * @param string $styles Any inline styles to add to the <pre></pre> element, needs to be valid CSS.
 *               Only required for var_dump().
 */
function dump( $data, $error_log = false, $exit = false, $styles = '' ) {
	if ( $error_log ) {
		// dump data to debug.log (only if WP_DEBUG and WP_DEBUG_LOG is true).
		error_log( print_r( $data, true ) );
	}

	if ( ! defined( 'LUNA_DEBUG' ) || ! LUNA_DEBUG ) {
		// Only dump data to the screen and/or exit if Luna debug is on.
		return;
	}

	if ( ! $error_log ) {
		// Dump data to the screen.
		echo '<pre style="' . esc_attr( $styles ) . '">';
		var_dump( $data ); // phpcs:ignore
		echo '</pre>';
	}

	if ( $exit ) {
		// RIP (press F to pay respects).
		die;
	}
}