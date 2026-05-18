<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage espresso-shop
 * @since espresso-shop 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since espresso-shop 1.0
	 *
	 * @return void
	 */
	function espresso_shop_register_block_styles() {
		

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'espresso-shop-border',
				'label' => esc_html__( 'Borders', 'espresso-shop' ),
			)
		);

		
	}
	add_action( 'init', 'espresso_shop_register_block_styles' );
}