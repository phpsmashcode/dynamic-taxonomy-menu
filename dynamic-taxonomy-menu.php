<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://phpsmashcode.com/
 * @since             1.0.0
 * @package           Dynamic_Taxonomy_Menu
 *
 * @wordpress-plugin
 * Plugin Name:       Dynamic Taxonomy Menu
 * Plugin URI:        https://phpsmashcode.com/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            PHPSmashCode
 * Author URI:        https://phpsmashcode.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       dynamic-taxonomy-menu
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'DYNAMIC_TAXONOMY_MENU_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-dynamic-taxonomy-menu-activator.php
 */
function activate_dynamic_taxonomy_menu() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-dynamic-taxonomy-menu-activator.php';
	Dynamic_Taxonomy_Menu_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-dynamic-taxonomy-menu-deactivator.php
 */
function deactivate_dynamic_taxonomy_menu() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-dynamic-taxonomy-menu-deactivator.php';
	Dynamic_Taxonomy_Menu_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_dynamic_taxonomy_menu' );
register_deactivation_hook( __FILE__, 'deactivate_dynamic_taxonomy_menu' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-dynamic-taxonomy-menu.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_dynamic_taxonomy_menu() {

	$plugin = new Dynamic_Taxonomy_Menu();
	$plugin->run();

}
run_dynamic_taxonomy_menu();
