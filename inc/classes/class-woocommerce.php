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
