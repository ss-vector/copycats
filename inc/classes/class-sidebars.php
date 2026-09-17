<?php
/**
 *
 * Copycats Sidebars
 * @package Copycats
 */

namespace COPYCATS_THEME\Inc;

use COPYCATS_THEME\Inc\Traits\Singleton;

class Sidebars {

  use Singleton;

  protected function __construct() {

    $this->setup_hooks();
  }

  protected function setup_hooks() {

    add_action( 'widgets_init', [ $this, 'register_sidebars' ] );

  }

  public function register_sidebars() {
    /**
     * Creates the blog sidebar
     */
    $blog_sidebar = array(
      'name'          => __( 'Blog Sidebar', 'copycats' ),
      'id'            => 'blog-sidebar',
      'description'   => 'The theme standard sidebar or beer, lol',
      'class'         => 'sidebar-blog',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    );

    register_sidebar( $blog_sidebar);
  }
}
