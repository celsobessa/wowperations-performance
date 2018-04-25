<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://www.wowperations.com.br
 * @since      0.1.0
 *
 * @package    Wowperations_Performance
 * @subpackage Wowperations_Performance/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Wowperations_Performance
 * @subpackage Wowperations_Performance/admin
 * @author     Celso Bessa <celso.bessa@wowperations.com.br>
 */
class Wowperations_Performance_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    0.1.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    0.1.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Holds common properties and methods
	 *
	 * @since    0.1.0
	 * @access   private
	 * @var      object   $common    An instance of Wowperations_Performance_Common class
	 */
	private $common;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    0.1.0
	 * @param string $plugin_name       The name of this plugin.
	 * @param string $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version, $common ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		$this->version = $common;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    0.1.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wowperations_Performance_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wowperations_Performance_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wowperations-performance-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    0.1.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wowperations_Performance_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wowperations_Performance_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wowperations-performance-admin.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Change "Pending Cancellation" status to "Cancelled Payments"
	 *
	 * Change the name of the "Pending Cancellation" status in WooCommerce Subscriptions to be "Cancelled Payments"
	 * by calling change_pending_cancellation_status from the Wowperations_Performance_Common class
	 *
	 * @since 0.1.0
	 * @param  array $subscription_statuses Subscription statuses array.
	 * @return array $subscription_statuses Filtered subscription statuses array.
	 */
	public function change_pending_cancellation_status( $subscription_statuses ) {

		return $this->common->change_pending_cancellation_status( $subscription_statuses );
	}

}
