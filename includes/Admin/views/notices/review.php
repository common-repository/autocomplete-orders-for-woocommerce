<?php
/**
 * Admin notice for review.
 *
 * @package AutocompleteOrdersForWooCommerce
 * @since 1.0.0
 * @return void
 */

defined( 'ABSPATH' ) || exit;

?>
<div class="notice-body">
	<div class="notice-icon">
		<img src="<?php echo esc_attr( autocomplete_orders_for_woocommerce()->get_assets_url( 'images/plugin-icon.png' ) ); ?>" alt="Key Manager">
	</div>
	<div class="notice-content">
		<h3>
			<?php esc_html_e( 'Enjoying Auto Complete Orders for WooCommerce?', 'autocomplete-orders-for-woocommerce' ); ?>
		</h3>
		<p>
			<?php
			echo wp_kses_post(
				sprintf(
				// translators: %1$s: WC Key Manager Pro link, %2$s: Coupon code.
					__( 'We hope you had a wonderful experience using %1$s. Please take a moment to show us your support by leaving a 5-star review on <a href="%2$s" target="_blank"><strong>WordPress.org</strong></a>. Thank you! 😊', 'autocomplete-orders-for-woocommerce' ),
					'<a href="ttps://wordpress.org/plugins/autocomplete-orders-for-woocommerce/" target="_blank"><strong>WC Key Manager</strong></a>',
					'https://wordpress.org/support/plugin/autocomplete-orders-for-woocommerce/reviews/?filter=5#new-post'
				)
			);
			?>
		</p>
	</div>
</div>
<div class="notice-footer">
	<a class="primary" href="https://wordpress.org/support/plugin/autocomplete-orders-for-woocommerce/reviews/?filter=5#new-post" target="_blank">
		<span class="dashicons dashicons-heart"></span>
		<?php esc_html_e( 'Sure, I\'d love to help!', 'autocomplete-orders-for-woocommerce' ); ?>
	</a>
	<a href="#" data-snooze>
		<span class="dashicons dashicons-clock"></span>
		<?php esc_html_e( 'Maybe later', 'autocomplete-orders-for-woocommerce' ); ?>
	</a>
	<a href="#" data-dismiss>
		<span class="dashicons dashicons-smiley"></span>
		<?php esc_html_e( 'I\'ve already left a review', 'autocomplete-orders-for-woocommerce' ); ?>
	</a>
</div>
