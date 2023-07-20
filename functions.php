<?php

/**
 * Main theme engine setup
 *
 * @package Copycats
**/
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Define constants
 */
if ( ! defined( 'COPYCATS_THEME_DIR' ) ) {
	define( 'COPYCATS_THEME_DIR', trailingslashit( get_template_directory() ) );
}

define( 'COPYCATS_THEME_VERSION', '1.1.9' );
define( 'COPYCATS_SETTING', 'copycats-settings' );

require_once COPYCATS_THEME_DIR . '/inc/helpers/autoloader.php';
require_once COPYCATS_THEME_DIR . '/inc/init.php';

require_once COPYCATS_THEME_DIR . '/inc/theme-support.php';
require_once COPYCATS_THEME_DIR . '/inc/template/admin/cc-admin-functions.php';

function copycats_primary_theme_setup() {

		wp_register_style( 'template_css', get_template_directory_uri() . '/assets/css/styles.css', false, '1.0.2', 'all' );
		wp_register_style( 'copycats_layout', get_template_directory_uri() . '/assets/css/layout.css', false, '1.0.1', 'all' );

		wp_enqueue_style( 'template_css' );
		wp_enqueue_style( 'copycats_layout' );
}
add_action( 'wp_enqueue_scripts', 'copycats_primary_theme_setup', 5 );

function copycats_vendor_scripts_setup() {

		// Aditional fonts
		wp_register_style( 'fontawesome', get_template_directory_uri() . '/assets/fontawesome/css/all.css', false, '6.1.2', 'all' );
		wp_register_style( 'font-electro', get_template_directory_uri() . '/assets/css/font-copycats.css', false, '1.0', 'all' );

		wp_enqueue_style( 'fontawesome' );
		wp_enqueue_style( 'font-electro' );

		// Scripts
		wp_enqueue_script( 'jquery' );
		# wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), '5.0.2', true );
		# wp_enqueue_script( 'responsive_slides_js', get_template_directory_uri() . '/vendor/responsive-slides/responsiveslides.min.js', array( 'jquery' ), '1.11.2', true );

		# wp_enqueue_script( 'custom_js', get_template_directory_uri() . '/assets/js/custom.js', array( 'jquery' ), '1.0.0', true );
		# wp_enqueue_script( 'owl_js', get_template_directory_uri() . '/assets/js/owl.js', array(), '2.3.4', true );
		# wp_enqueue_script( 'rslides_init_js', get_template_directory_uri() . '/assets/js/rslides.js', array(), '1.0.0', true );
		# wp_enqueue_script( 'accordions_js', get_template_directory_uri() . '/assets/js/accordions.js', array( 'jquery' ), '1.11.2', true );

}
add_action( 'wp_enqueue_scripts', 'copycats_vendor_scripts_setup', 20 );

function copycats_theme_setup() {

	# wp_register_style( 'swiper_bundle', get_template_directory_uri() . '/plugins/swiper/swiper-bundle.min.css', false, '6.7.5' ,'all' );
	# wp_register_style( 'iconmoon_font', get_template_directory_uri() . '/assets/fonts/fonts.css', false, '1.0.3' ,'all' );

	# wp_enqueue_script( 'swiper_bundle', get_template_directory_uri() . '/plugins/swiper/swiper-bundle.min.js',array(), '6.7.5', true );
	# wp_enqueue_script( 'swiper_init', get_template_directory_uri() . '/assets/js/swiper_init.js',array(), '1.0.0', true );
	wp_enqueue_script( 'coppycats_app', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), '1.0.0', true );

	# wp_enqueue_style( 'swiper_bundle' );
	# wp_enqueue_style( 'iconmoon_font' );
}
add_action( 'wp_enqueue_scripts', 'copycats_theme_setup', 10 );

/* Creating Custom Menu*/
function copycats_woo_custom_menu() {

	register_nav_menu( 'woocommerce-menu', __('Woocommerce Custom Menu', 'woocommercecustommenu' ));
}
add_action( 'init', 'copycats_woo_custom_menu' );

/** Woocommerce */
if (class_exists('Woocommerce')) {
	/* Woocommerce Support */
	# require_once $vega_inc_path . "/template/woo/woocommerce-config.php";
}

/*WP Mantainance Mode --
function wp_maintenance_mode() {
if (!current_user_can('edit_themes') || !is_user_logged_in()) {
wp_die('<h1>En mantenimiento</h1><br />Nos encontramos trabajando en el sitio. Te agradecemos visitarnos en otro momento...');
}
}
add_action('get_header', 'wp_maintenance_mode');
*/

function copycats_get_theme_instance() {
	\COPYCATS_THEME\Inc\COPYCATS_THEME::get_instance();
}

copycats_get_theme_instance();
