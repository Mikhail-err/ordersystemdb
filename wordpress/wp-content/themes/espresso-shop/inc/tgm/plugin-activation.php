<?php
/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for parent theme Espresso Shop for publication on WordPress.org
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

/**
 * Include the TGM_Plugin_Activation class.
 *
 * Depending on your implementation, you may want to change the include call:
 *
 * Parent Theme:
 * require_once get_template_directory() . '/path/to/class-tgm-plugin-activation.php';
 *
 * Child Theme:
 * require_once get_stylesheet_directory() . '/path/to/class-tgm-plugin-activation.php';
 *
 * Plugin:
 * require_once dirname( __FILE__ ) . '/path/to/class-tgm-plugin-activation.php';
 */
require_once get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'espresso_shop_register_required_plugins' );

/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variables passed to the `tgmpa()` function should be:
 * - an array of plugin arrays;
 * - optionally a configuration array.
 * If you are not changing anything in the configuration array, you can remove the array and remove the
 * variable from the function call: `tgmpa( $plugins );`.
 * In that case, the TGMPA default settings will be used.
 *
 * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
 */
function espresso_shop_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

        array(
			'name'      => esc_html__( 'Woocommerce', 'espresso-shop' ),
			'slug'      => 'woocommerce',
			'required'  => false,
		),
        array(
            'name'      => esc_html__( 'WordClever – AI Content Writer', 'espresso-shop' ),
            'slug'      => 'wordclever-ai-content-writer',
            'required'  => false,
        )
	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array();
	tgmpa( $plugins, $config );
}

// WordClever – AI Content Writer plugin activation
add_action('wp_ajax_espresso_shop_check_plugin_activation', 'espresso_shop_check_plugin_activation');
add_action('wp_ajax_install_and_activate_wordclever_plugin', 'install_and_activate_wordclever_plugin');

function espresso_shop_check_plugin_activation() {
    if (!current_user_can('manage_options')) {
        wp_send_json_error(array('message' => 'Permission denied.'));
    }

    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'install_activate_nonce')) {
        wp_send_json_error(array('message' => 'Nonce verification failed.'));
    }

    include_once ABSPATH . 'wp-admin/includes/plugin.php';

    $espresso_shop_plugin = isset($_POST['plugin']) ? sanitize_text_field(wp_unslash($_POST['plugin'])) : '';

    // Backward compatibility for older JS values.
    if ('wordclever_ai_content_writer' === $espresso_shop_plugin || 'wordclever-ai-content-writer' === $espresso_shop_plugin) {
        $espresso_shop_plugin = 'wordclever-ai-content-writer/wordclever.php';
    }

    if (empty($espresso_shop_plugin)) {
        $espresso_shop_plugin = 'wordclever-ai-content-writer/wordclever.php';
    }

    wp_send_json_success(array('active' => is_plugin_active($espresso_shop_plugin)));
}

function install_and_activate_wordclever_plugin() {
    if (!current_user_can('manage_options')) {
        wp_send_json_error(array('message' => 'Permission denied.'));
    }

    // Verify nonce for security
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'install_activate_nonce')) {
        wp_send_json_error(['message' => 'Nonce verification failed.']);
    }

    // Define plugin slugs and file paths
    $espresso_shop_plugins = array(
        array(
            'name' => 'WooCommerce',
            'file' => 'woocommerce/woocommerce.php',
            'url'  => 'https://downloads.wordpress.org/plugin/woocommerce.latest-stable.zip',
        ),
        array(
            'name' => 'WordClever - AI Content Writer',
            'file' => 'wordclever-ai-content-writer/wordclever.php',
            'url'  => 'https://downloads.wordpress.org/plugin/wordclever-ai-content-writer.latest-stable.zip',
        ),
    );

    // Include necessary WordPress files
    include_once ABSPATH . 'wp-admin/includes/plugin.php';
    include_once ABSPATH . 'wp-admin/includes/file.php';
    include_once ABSPATH . 'wp-admin/includes/misc.php';
    include_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
    include_once ABSPATH . 'wp-admin/includes/plugin-install.php';

    $espresso_shop_upgrader = new Plugin_Upgrader(new Automatic_Upgrader_Skin());

    $espresso_shop_errors = array();

    foreach ($espresso_shop_plugins as $espresso_shop_plugin) {
        if (empty($espresso_shop_plugin['file']) || empty($espresso_shop_plugin['url']) || empty($espresso_shop_plugin['name'])) {
            continue;
        }

        if (!is_plugin_active($espresso_shop_plugin['file'])) {
            $espresso_shop_installed_plugins = get_plugins();

            if (!isset($espresso_shop_installed_plugins[$espresso_shop_plugin['file']])) {
                $espresso_shop_install_result = $espresso_shop_upgrader->install($espresso_shop_plugin['url']);
                if (is_wp_error($espresso_shop_install_result) || !$espresso_shop_install_result) {
                    $espresso_shop_errors[] = $espresso_shop_plugin['name'] . ' installation failed.';
                    continue;
                }
            }

            $espresso_shop_activate_result = activate_plugin($espresso_shop_plugin['file']);
            if (is_wp_error($espresso_shop_activate_result)) {
                $espresso_shop_errors[] = $espresso_shop_plugin['name'] . ' activation failed: ' . $espresso_shop_activate_result->get_error_message();
            }
        }
    }

    // Run demo import after plugin setup, if helper is available.
    if (function_exists('espresso_shop_import_demo_products_data')) {
        $espresso_shop_demo_result = espresso_shop_import_demo_products_data();
        if (is_wp_error($espresso_shop_demo_result)) {
            $espresso_shop_errors[] = $espresso_shop_demo_result->get_error_message();
        }
    }

    if (!empty($espresso_shop_errors)) {
        wp_send_json_error(array('message' => implode(' ', $espresso_shop_errors)));
    }

    // Success response
    wp_send_json_success(array('message' => 'Recommended plugins activated and demo data imported successfully.'));
}