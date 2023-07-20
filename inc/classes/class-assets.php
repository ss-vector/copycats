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

    add_action( 'wp_enqueue_scripts', [ $this, 'register_styles' ] );
    add_action( 'wp_enqueue_scripts', [ $this, 'register_scripts' ] );

  }

  public function register_styles() {
    // Register styles
    wp_register_style( 'template_css', get_template_directory_uri() . '/assets/css/styles.css', false, '1.0.2', 'all' );
    wp_register_style( 'copycats_layout', get_template_directory_uri() . '/assets/css/layout.css', false, '1.0.1', 'all' );
    // Enqueue styles
    wp_enqueue_style( 'template_css' );
    wp_enqueue_style( 'copycats_layout' );

  }

  public function register_scripts() {

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
}
