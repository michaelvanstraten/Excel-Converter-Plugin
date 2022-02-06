<?php
/**
 * Plugin Name:       Excel Convert
 * Description:       Convers Excel to html, plugin for Herrn Riedel
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Michael van Straten
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       excel
 */

function create_block_excel_converter_plugin_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'create_block_excel_converter_plugin_block_init' );
