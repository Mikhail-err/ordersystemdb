<?php
/**
 * Customizer
 * 
 * @package WordPress
 * @subpackage espresso-shop
 * @since espresso-shop 1.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function espresso_shop_customize_register( $wp_customize ) {
	$wp_customize->add_section( new Espresso_Shop_Upsell_Section($wp_customize,'upsell_section',array(
		'title'            => __( 'Espresso Shop Pro', 'espresso-shop' ),
		'button_text'      => __( 'Upgrade Pro', 'espresso-shop' ),
		'url'              => 'https://www.wpradiant.net/products/coffee-shop-wordpress-theme',
		'priority'         => 0,
	)));
}
add_action( 'customize_register', 'espresso_shop_customize_register' );

/**
 * Enqueue script for custom customize control.
 */
function espresso_shop_custom_control_scripts() {
	wp_enqueue_script( 'espresso-shop-custom-controls-js', get_template_directory_uri() . '/assets/js/custom-controls.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-sortable' ), '1.0', true );
	wp_enqueue_style( 'espresso-shop-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
}
add_action( 'customize_controls_enqueue_scripts', 'espresso_shop_custom_control_scripts' );
