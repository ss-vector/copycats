<?php
/**
 *
 * Copycats WooCommerce Hooks
 * @package Copycats
 */

namespace COPYCATS_THEME\Inc;

use COPYCATS_THEME\Inc\Traits\Singleton;

class WooCommerce {

  use Singleton;

  protected function __construct() {

    $this->setup_hooks();
  }

  protected function setup_hooks() {

    add_action( 'after_setup_theme', [ $this, 'woocommerce_setup' ] );
    # Creating a custom action and registering with woocommerce.
    add_action( 'after_setup_theme', [ $this, 'copycats_woocommerce_custom_content' ] );

  }

  public function woocommerce_setup() {

    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );

    add_action( 'woocommerce_before_main_content', [ $this, 'copycats_theme_wrapper_start' ], 10 );
    add_action( 'woocommerce_after_main_content', [ $this, 'copycats_theme_wrapper_end' ], 10 );

    remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
    remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
    remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

  	add_filter( 'woocommerce_enqueue_styles', '__return_false' );
	
  }

  function copycats_woocommerce_custom_content() {

    # My account
    add_action( 'woocommerce_account_content', [ $this, 'copycats_woocommerce_account_content' ] );

    add_filter( 'woocommerce_account_menu_items', [ $this, 'copycats_remove_tab_items'], 9999 );

    remove_action( 'woocommerce_account_content', 'woocommerce_account_content' );
    remove_action( 'woocommerce_account_menu_items', 'woocommerce_account_menu_items' );

    # Shop page

    # Single Product page
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
    add_action( 'woocommerce_single_product_summary', [ $this, 'copycats_woocommerce_single_product_layout' ] );

    add_filter( 'woocommerce_breadcrumb_defaults', [ $this, 'copycats_woocommerce_breadcrumb_delimiter' ], 9999 );
  }
# Action Functions
  function copycats_woocommerce_account_content() {
    global $current_user;
    echo '<p>' . 'Correo Electrónico: ' . $current_user->user_email .  '</p>';
  }

  function copycats_woocommerce_single_product_layout() {
    # TODO:
    # Edit, customize the following:
    # Title, rating, price, excerpt, add_to_cart, meta, sharing, WC_Structured_Data()


    get_template_part( 'inc/partials/woocommerce/single-product/title' );
  }

  function copycats_theme_wrapper_start() {
    $theme_html = '<div class="container">';
    $theme_html .= '<div class="row">';
    $theme_html .= '<div class="col-lg-12">';

    echo $theme_html;
  }

  function copycats_theme_wrapper_end() {
    $theme_html = '</div>';
    $theme_html .= '</div>';
    $theme_html .= '</div>';

    echo $theme_html;
  }

  # Filter Functions

  function copycats_remove_tab_items( $items ) {
    unset( $items[ 'dashboard' ] );
    unset( $items[ 'downloads' ] );
    unset( $items[ 'dashboard' ] );
    return $items;
  }

  function copycats_woocommerce_breadcrumb_delimiter( $defaults ) {
    $defaults['home'] = 'Inicio';
    	return $defaults;
  }

}

?>
