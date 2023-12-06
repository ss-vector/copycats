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
    # add_action( 'woocommerce_account_content', [ $this, 'copycats_woocommerce_account_content' ] );
    # add_action( 'woocommerce_account_navigation', [ $this, 'copycats_woocommerce_account_navigation' ] );

  }

  public function woocommerce_setup() {

    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );

    add_action( 'woocommerce_before_main_content', 'copycats_theme_wrapper_start', 10 );
    add_action( 'woocommerce_after_main_content', 'copycats_theme_wrapper_end', 10 );

    remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
    remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
    remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
  }

  function copycats_woocommerce_account_content() {
  	global $current_user;

    echo '<p>' . 'Correo Electrónico: ' . $current_user->user_email .  '</p>';
  }

  function copycats_woocommerce_account_navigation() {

    echo '<p>testing edition</p>';
  }

}

?>
