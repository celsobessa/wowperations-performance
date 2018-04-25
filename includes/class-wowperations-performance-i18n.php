<?php
/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.wowperations.com.br
 * @since      0.1.0
 *
 * @package    Wowperations_Performance
 * @subpackage Wowperations_Performance/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      0.1.0
 * @package    Wowperations_Performance
 * @subpackage Wowperations_Performance/includes
 * @author     Celso Bessa <celso.bessa@wowperations.com.br>
 */
class Wowperations_Performance_I18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    0.1.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wowperations-performance',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
