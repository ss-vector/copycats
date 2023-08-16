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

		add_action( 'after_setup_theme', [ $this, 'setup_theme' ] );

	}

	public function setup_theme() {

		add_theme_support( 'title-tag' );

		// Revisit this section on the logo
		function copycats_custom_logo_setup() {
			$defaults = array(
				'height' 		=> 100,
				'width' 		=> 220,
				'flex-height'	=> false,
				'flex-width' 	=> true,
			);

			add_theme_support( 'custom-logo', $defaults );
		}

		add_action( 'after_setup_theme', 'copycats_custom_logo_setup' );

		add_theme_support( 'post-thumbnails' );

		/* Register image sizes */
		add_image_size( "blog_thumbnail", 250, 200 );
		add_image_size( 'gallery_thumbnail', 500, 300, true );
		add_image_size( 'homepage-thumb', 220, 180 );


		/* Post Formats */
		add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );

		/* Structure */
		add_theme_support( 'align-wide' );

		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support( 'automatic-feed-links' );

		/* HTML5 */
		add_theme_support(
			'html5',
			[
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
			]
		);

		add_editor_style();

		add_theme_support( 'wp-block-styles' );

		/** Woocommerce */
		if ( class_exists( 'Woocommerce' ) ) {
			/* Woocommerce Support */
			# require_once $vega_inc_path . "/template/woo/woocommerce-config.php";
		}


	}
}
