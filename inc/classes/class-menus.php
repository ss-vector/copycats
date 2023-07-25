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

  public function get_menu_id( $location ) {
    // Wordpress function: get_nav_menu_lcoations()
    $locations = get_nav_menu_locations();

    // Getting the object id by location
    $menu_id = $locations[ $location ];

    return ! empty( $menu_id ) ? $menu_id : '';
  }

  public function get_child_menu_items( $menu_array, $parent_id ) {
    $child_menus = [];
  
    if ( ! empty( $menu_array ) && is_array( $menu_array ) ) {
      foreach ( $menu_array as $menu ) {
        if ( intval( $menu->menu_item_parent ) === $parent_id ) {
          array_push( $child_menus, $menu );
        }
      }
    }
    return $child_menus;

  }
}
 ?>
