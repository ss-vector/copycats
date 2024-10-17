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
    add_action( 'copycats_account_content', [ $this, 'copycats_woocommerce_content' ] );

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
  }

  function copycats_woocommerce_content() {
    global $current_user;

    # TODO: 
    # - Woocommerce user mail
    # - Woocommerce account navigation

    echo '<p>' . 'Correo Electrónico: ' . $current_user->user_email .  '</p>';
  }

  function copycats_woocommerce_account_navigation() {

    echo '<p>testing edition</p>';
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

}

?>
