<?php

namespace AutocompleteOrdersForWooCommerce\Admin;

defined( 'ABSPATH' ) || exit; // Exit if accessed directly.

/**
 * Admin class.
 *
 * @since 1.0.0
 * @package AutocompleteOrdersForWooCommerce
 */
class Admin {
	/**
	 * Admin constructor.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
	}

	/**
	 * Enqueue scripts.
	 *
	 * @param string $hook The current admin page.
	 *
	 * @since 1.0.0
	 */
	public function enqueue_scripts( $hook ) { // phpcs:ignore Generic.CodeAnalysis.UnusedFunctionParameter.Found
		autocomplete_orders_for_woocommerce()->scripts->enqueue_style( 'aofw-admin', 'css/admin.css', array( 'bytekit-components' ) );
	}
}
