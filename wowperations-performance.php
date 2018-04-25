<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.wowperations.com.br
 * @since             0.1.0
 * @package           Wowperations_Performance
 *
 * @wordpress-plugin
 * Plugin Name:       WoWPerations Performance
 * Plugin URI:        https://bitbucket.org/wowluzvermelha/wowperations-performance/
 * Description:       Performance tweaks and customizations for WordPress websites
 * version:           0.1.0
 * Author:            Celso Bessa, wOWPerations
 * Author URI:        https://www.xplastic.com.br
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wowperations-performance
 * Domain Path:       /languages
 * Requires at least: 4.7
 * Tested up to:      4.9.3
 * Requires PHP:      7.0
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wowperations-performance-activator.php
 */
function activate_Wowperations_Performance() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wowperations-performance-activator.php';
	Wowperations_Performance_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wowperations-performance-deactivator.php
 */
function deactivate_Wowperations_Performance() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wowperations-performance-deactivator.php';
	Wowperations_Performance_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_Wowperations_Performance' );
register_deactivation_hook( __FILE__, 'deactivate_Wowperations_Performance' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wowperations-performance.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    0.1.0
 */
function run_Wowperations_Performance() {

	$plugin = new wowperations_performance();
	$plugin->run();

}
run_wowperations_werformance();
