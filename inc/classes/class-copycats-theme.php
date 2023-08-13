<?php
 /**
  *
  * @package Copycats
  *
  */

namespace COPYCATS_THEME\Inc;

use COPYCATS_THEME\Inc\Traits\Singleton;

class COPYCATS_THEME {

	use Singleton;

	protected function __construct() {

    //Load classes
    Assets::get_instance();
		Menus::get_instance();

    $this->setup_hooks();

	}

	protected function setup_hooks() {
		/*
		* Actions
		*/

		add_action( 'after_setup_teme', [ $this, 'setup_theme' ] );

	}

	public function setup_theme() {

		add_theme_support( 'title-tag' );

		/* Post Formats */
		add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
		add_theme_support( 'custom-logo' );

		/* Structure */
		add_theme_support( 'align-wide' );

		# Register image sizes
		add_iamge_size( 'blog-feed-image', 200, 250 );

		add_theme_support( 'customize-selective-refresh-widgets' );

		/** Woocommerce */
		if ( class_exists( 'Woocommerce' ) ) {
			/* Woocommerce Support */
			# require_once $vega_inc_path . "/template/woo/woocommerce-config.php";
		}


	}
}
