<?php
/**
 * Demo import for Espresso Shop.
 *
 * @package Espresso Shop
 */

add_action( 'wp_ajax_espresso_shop_run_demo_import', 'espresso_shop_run_demo_import' );

/**
 * Import demo products and categories.
 *
 * @return true|WP_Error
 */
function espresso_shop_import_demo_products_data() {
	if ( ! class_exists( 'WooCommerce' ) ) {
		return new WP_Error( 'woocommerce_not_active', 'WooCommerce not active' );
	}

	$espresso_shop_category_ids = espresso_shop_create_demo_categories();
	$espresso_shop_products     = espresso_shop_get_demo_products();

	if ( get_option( 'espresso_shop_demo_import_completed' ) ) {
		espresso_shop_assign_categories_to_demo_products( $espresso_shop_products, $espresso_shop_category_ids );
		return true;
	}

	foreach ( $espresso_shop_products as $espresso_shop_product ) {
		$espresso_shop_product_id = wp_insert_post(
			array(
				'post_title'   => $espresso_shop_product['title'],
				'post_content' => $espresso_shop_product['description'],
				'post_excerpt' => $espresso_shop_product['short_description'],
				'post_status'  => 'publish',
				'post_type'    => 'product',
			)
		);

		if ( is_wp_error( $espresso_shop_product_id ) ) {
			continue;
		}

		update_post_meta( $espresso_shop_product_id, '_regular_price', $espresso_shop_product['price'] );
		update_post_meta( $espresso_shop_product_id, '_price', $espresso_shop_product['price'] );

		if ( ! empty( $espresso_shop_category_ids ) ) {
			wp_set_object_terms(
				$espresso_shop_product_id,
				$espresso_shop_category_ids,
				'product_cat'
			);
		}

		if ( ! empty( $espresso_shop_product['image'] ) && file_exists( $espresso_shop_product['image'] ) ) {
			if ( ! function_exists( 'media_handle_sideload' ) ) {
				require_once ABSPATH . 'wp-admin/includes/media.php';
				require_once ABSPATH . 'wp-admin/includes/file.php';
				require_once ABSPATH . 'wp-admin/includes/image.php';
			}

			$espresso_shop_tmp_file = wp_tempnam( $espresso_shop_product['image'] );
			if ( $espresso_shop_tmp_file ) {
				copy( $espresso_shop_product['image'], $espresso_shop_tmp_file );
				$espresso_shop_file_array = array(
					'name'     => basename( $espresso_shop_product['image'] ),
					'tmp_name' => $espresso_shop_tmp_file,
				);

				$espresso_shop_attachment_id = media_handle_sideload( $espresso_shop_file_array, $espresso_shop_product_id );

				if ( is_wp_error( $espresso_shop_attachment_id ) ) {
					@unlink( $espresso_shop_tmp_file );
				} else {
					set_post_thumbnail( $espresso_shop_product_id, $espresso_shop_attachment_id );
				}
			}
		}
	}

	espresso_shop_assign_categories_to_demo_products( $espresso_shop_products, $espresso_shop_category_ids );

	update_option( 'espresso_shop_demo_import_completed', true );

	return true;
}

/**
 * Create demo product categories and return their IDs.
 *
 * @return array<int>
 */
function espresso_shop_create_demo_categories() {
	$espresso_shop_categories = array(
		array(
			'name' => 'Coffee Beans',
			'slug' => 'coffee-beans',
		),
		array(
			'name' => 'Ground Coffee',
			'slug' => 'ground-coffee',
		),
		array(
			'name' => 'Accessories',
			'slug' => 'accessories',
		),
		array(
			'name' => 'Brewing Gear',
			'slug' => 'brewing-gear',
		),
	);

	$espresso_shop_category_ids = array();

	foreach ( $espresso_shop_categories as $espresso_shop_cat ) {
		$espresso_shop_term = term_exists( $espresso_shop_cat['slug'], 'product_cat' );

		if ( ! $espresso_shop_term ) {
			$espresso_shop_term = wp_insert_term(
				$espresso_shop_cat['name'],
				'product_cat',
				array(
					'slug' => $espresso_shop_cat['slug'],
				)
			);
		}

		if ( is_wp_error( $espresso_shop_term ) ) {
			continue;
		}

		if ( is_array( $espresso_shop_term ) && isset( $espresso_shop_term['term_id'] ) ) {
			$espresso_shop_category_ids[] = (int) $espresso_shop_term['term_id'];
		} else {
			$espresso_shop_category_ids[] = (int) $espresso_shop_term;
		}
	}

	return $espresso_shop_category_ids;
}

/**
 * Get demo product definitions.
 *
 * @return array<int, array<string, string>>
 */
function espresso_shop_get_demo_products() {
	return array(
		array(
			'title'             => 'Sunrise Blend - Whole Beans',
			'price'             => '17.99',
			'image'             => get_template_directory() . '/assets/images/product01.png',
			'short_description' => 'Smooth, balanced coffee with sweet undertones.',
			'description'       => 'A medium roast crafted for espresso and drip. Notes of caramel and cocoa with a clean finish.',
		),
		array(
			'title'             => 'Mountain Mist - Single Origin',
			'price'             => '19.99',
			'image'             => get_template_directory() . '/assets/images/product02.png',
			'short_description' => 'Single-origin coffee with bright citrus notes.',
			'description'       => 'Sourced from high-altitude farms, this roast brings floral aroma and lively acidity for pour-over lovers.',
		),
		array(
			'title'             => 'Ember Reserve - Dark Roast',
			'price'             => '18.99',
			'image'             => get_template_directory() . '/assets/images/product03.png',
			'short_description' => 'Deep, bold roast for rich espresso shots.',
			'description'       => 'A full-bodied dark roast with dark chocolate notes and low acidity, ideal for milk-based drinks.',
		),
		array(
			'title'             => 'Velvet Crema - Ground Coffee',
			'price'             => '16.99',
			'image'             => get_template_directory() . '/assets/images/product04.png',
			'short_description' => 'Ready-to-brew ground coffee for daily cups.',
			'description'       => 'Ground to a versatile medium grind that works well across drip machines, French press, and moka pots.',
		),
		array(
			'title'             => 'Barista Filter Pack',
			'price'             => '12.99',
			'image'             => get_template_directory() . '/assets/images/product05.png',
			'short_description' => 'Premium filters for cleaner extraction.',
			'description'       => 'Durable paper filters designed to reduce sediment while preserving flavor clarity in every brew.',
		),
		array(
			'title'             => 'Pour-Over Starter Kit',
			'price'             => '29.99',
			'image'             => get_template_directory() . '/assets/images/product06.png',
			'short_description' => 'Essential gear for manual brewing.',
			'description'       => 'Includes dripper, server, and measuring spoon to start your home brewing routine with consistency.',
		),
	);
}

/**
 * Ensure all demo products are assigned to demo categories.
 *
 * @param array<int, array<string, string>> $espresso_shop_products Demo products.
 * @param array<int>                        $espresso_shop_category_ids Demo category IDs.
 */
function espresso_shop_assign_categories_to_demo_products( $espresso_shop_products, $espresso_shop_category_ids ) {
	if ( empty( $espresso_shop_category_ids ) ) {
		return;
	}

	foreach ( $espresso_shop_products as $espresso_shop_product ) {
		if ( empty( $espresso_shop_product['title'] ) ) {
			continue;
		}

		$espresso_shop_product_slug = sanitize_title( $espresso_shop_product['title'] );
		$espresso_shop_existing_product = get_page_by_path( $espresso_shop_product_slug, OBJECT, 'product' );

		if ( $espresso_shop_existing_product && ! empty( $espresso_shop_existing_product->ID ) ) {
			wp_set_object_terms(
				(int) $espresso_shop_existing_product->ID,
				$espresso_shop_category_ids,
				'product_cat'
			);
		}
	}
}

/**
 * Import demo products for Espresso Shop.
 */
function espresso_shop_run_demo_import() {
	check_ajax_referer( 'espresso_shop_demo_nonce', 'nonce' );

	if ( ! current_user_can( 'manage_options' ) ) {
		wp_send_json_error( 'Permission denied' );
	}

	$result = espresso_shop_import_demo_products_data();

	if ( is_wp_error( $result ) ) {
		wp_send_json_error( $result->get_error_message() );
	}

	if ( get_option( 'espresso_shop_demo_import_completed' ) ) {
		wp_send_json_success( 'Demo imported successfully' );
	}

	wp_send_json_success( 'Demo data processed successfully' );
}
