<?php
/**
 *
 * Copycats Theme Menus
 * @package Copycats
 */

namespace COPYCATS_THEME\Inc;

use COPYCATS_THEME\Inc\Traits\Singleton;

class Menus {

  use Singleton;

  protected function __construct()
  {
    // load class
    $this->setup_hooks();
  }

  protected function setup_hooks() {

    add_action( 'init', [ $this, 'register_menus' ] );
  }

  public function register_menus() {
    register_nav_menus([
      'departments-menu'	=> esc_html( 'Menu de Categorías', 'copycats' ),
      'top-primary-menu'	=> esc_html( 'Menu principal de cabecera', 'copycats' ),
      'primary-home-menu'	=> esc_html( 'Menu principal', 'copycats' ),
      'pages-menu'		    => esc_html( 'Menu de varias páginas', 'copycats' ),
      'footer-nav-menu'	  => esc_html( 'Menu de navegación en Footer', 'copycats' ),
      'recent-posts-menu'	=> esc_html( 'Menu de publicaciones recientes' ,'copycats' ),
      /* Creating a Woocommerce Custom Menu*/
      'woocommerce-menu' => esc_html( 'Woocommerce Custom Menu', 'copycats' ),
    ]);
  }
}
 ?>
