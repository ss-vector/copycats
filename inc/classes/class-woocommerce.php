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
    add_action( 'woocommerce_account_content', [ $this, 'copycats_woocommerce_account_content' ] );

  }

  public function woocommerce_setup() {

  }

  function copycats_woocommerce_account_content() {
  	global $current_user;

  	echo '<p>' . __( "Tested and working", "woocommerce") . '</p>';

    echo '<p>' . 'Correo Elctrónico: ' . $current_user->user_email .  '</p>';
  }

}

?>
