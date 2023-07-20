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

class Assets {
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
    wp_register_style( 'template_css', COPYCATS_THEME_URI . '/assets/css/styles.css', false, '1.0.2', 'all' );
    wp_register_style( 'copycats_layout', COPYCATS_THEME_URI . '/assets/css/layout.css', false, '1.0.1', 'all' );

    // Aditional fonts
    wp_register_style( 'fontawesome', COPYCATS_THEME_URI . '/assets/fontawesome/css/all.css', false, '6.1.2', 'all' );
    wp_register_style( 'font-electro', COPYCATS_THEME_URI . '/assets/css/font-copycats.css', false, '1.0', 'all' );

    // Enqueue styles
    wp_enqueue_style( 'template_css' );
    wp_enqueue_style( 'copycats_layout' );
    wp_enqueue_style( 'fontawesome' );
    wp_enqueue_style( 'font-electro' );
  	# wp_enqueue_style( 'swiper_bundle' );

  }

  public function register_scripts() {

		// Scripts
    wp_enqueue_script( 'coppycats_app', COPYCATS_THEME_URI . '/assets/js/app.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'jquery' );
		# wp_enqueue_script( 'bootstrap_js', COPYCATS_THEME_URI . '/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), '5.0.2', true );
		# wp_enqueue_script( 'responsive_slides_js', COPYCATS_THEME_URI . '/vendor/responsive-slides/responsiveslides.min.js', array( 'jquery' ), '1.11.2', true );

		# wp_enqueue_script( 'custom_js', COPYCATS_THEME_URI . '/assets/js/custom.js', array( 'jquery' ), '1.0.0', true );
		# wp_enqueue_script( 'owl_js', COPYCATS_THEME_URI . '/assets/js/owl.js', array(), '2.3.4', true );
		# wp_enqueue_script( 'rslides_init_js', COPYCATS_THEME_URI . '/assets/js/rslides.js', array(), '1.0.0', true );
		# wp_enqueue_script( 'accordions_js', COPYCATS_THEME_URI . '/assets/js/accordions.js', array( 'jquery' ), '1.11.2', true );
    # wp_enqueue_script( 'swiper_bundle', COPYCATS_THEME_URI . '/plugins/swiper/swiper-bundle.min.js',array(), '6.7.5', true );
  	# wp_enqueue_script( 'swiper_init', COPYCATS_THEME_URI . '/assets/js/swiper_init.js',array(), '1.0.0', true );

  }
}
