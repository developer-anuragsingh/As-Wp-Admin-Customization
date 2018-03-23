<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://anuragsingh.me
 * @since             1.0.0
 * @package           As_Wp_Admin_Customization
 *
 * @wordpress-plugin
 * Plugin Name:       As Wp Admin Customization
 * Plugin URI:        http://anuragsingh.me/as-wp-admin-customization-uri/
 * Description:       Extended Version of plugin which includes functionality to create post type, taxonomy, shortcode.
 * Version:           1.0.0
 * Author:            Anurag Singh
 * Author URI:        http://anuragsingh.me/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       as-wp-admin-customization
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
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-as-wp-admin-customization-activator.php
 */
function activate_as_wp_admin_customization() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-as-wp-admin-customization-activator.php';
	As_Wp_Admin_Customization_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-as-wp-admin-customization-deactivator.php
 */
function deactivate_as_wp_admin_customization() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-as-wp-admin-customization-deactivator.php';
	As_Wp_Admin_Customization_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_as_wp_admin_customization' );
register_deactivation_hook( __FILE__, 'deactivate_as_wp_admin_customization' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-as-wp-admin-customization.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_as_wp_admin_customization() {

	$plugin = new As_Wp_Admin_Customization();
	$plugin->run();

}
run_as_wp_admin_customization();