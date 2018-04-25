<?php
/**
 * Methods and properties used by both frontend and admin
 *
 * @link       https://www.wowperations.com.br
 * @since      0.1.0
 *
 * @package    Wowperations_Performance
 * @subpackage Wowperations_Performance/includes
 */

/**
 * Methods and properties used by both frontend and admin
 *
 * Holds all nethods and properties used by both frontend (public) and backend (admin) parts of the plugins
 *
 * @package    Wowperations_Performance
 * @subpackage Wowperations_Performance/includes
 * @author     Celso Bessa <celso.bessa@wowperations.com.br>
 */
class Wowperations_Performance_Common {

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
	 * Initialize the class and set its properties.
	 *
	 * @since    0.1.0
	 * @param string $plugin_name       The name of the plugin.
	 * @param string $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Change "Pending Cancellation" status to "Cancelled Payments"
	 *
	 * Change the name of the "Pending Cancellation" status in WooCommerce Subscriptions to be "Cancelled Payments".
	 *
	 * @since 0.1.0
	 * @param  array $subscription_statuses Subscription statuses array.
	 * @return array $subscription_statuses Filtered subscription statuses array.
	 */
	public function change_pending_cancellation_status( $subscription_statuses ) {

		$subscription_statuses['wc-pending-cancel'] = _x( 'Finalizada', 'Subscription status', 'woocommerce-subscriptions' );

		return $subscription_statuses;
	}

}
