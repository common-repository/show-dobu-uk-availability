<?php
/**
 * Plugin Name:       Dobu.uk Availability
 * Plugin URI:        https://dobu.uk
 * Description:       Embed DoBu.uk availability calendars and enquiry forms
 * Requires at least: 6.0
 * Requires PHP:      7.0
 * Version:           1.1.1
 * Author:            Richard Palethorpe
 * Author URI:        https://richiejp.com
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       dobuuk-availability
 *
 * @package           DoBuukAvailablity
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function dobuuk_availability_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'dobuuk_availability_block_init' );
