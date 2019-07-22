<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://phpsmashcode.com/
 * @since      1.0.0
 *
 * @package    Dynamic_Taxonomy_Menu
 * @subpackage Dynamic_Taxonomy_Menu/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Dynamic_Taxonomy_Menu
 * @subpackage Dynamic_Taxonomy_Menu/includes
 * @author     PHPSmashCode <phpsmashcode@gmail..com>
 */
class Dynamic_Taxonomy_Menu_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'dynamic-taxonomy-menu',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
