<?php
/*
 *
 * Enqueue Theme assets
 *
 * @package Copycats Theme
 *
 */

namespace COPYCATS_THEME\Inc;

use COPYCATS_THEME\Inc\Traits\Singleton;

class Assets () {
  use Singleton;

  protected function __construct() {
    $this->setup_hooks();
  }

  protected function setup_hooks() {

    add_action( 'wp_enqueue_scripts', [ $this, 'register_styles'] );

  }

  public function register_styles() {
    // Register styles
    wp_register_style( 'template_css', get_template_directory_uri() . '/assets/css/styles.css', false, '1.0.2', 'all' );
    wp_register_style( 'copycats_layout', get_template_directory_uri() . '/assets/css/layout.css', false, '1.0.1', 'all' );
    // Enqueue styles
    wp_enqueue_style( 'template_css' );
    wp_enqueue_style( 'copycats_layout' );

  }
}
