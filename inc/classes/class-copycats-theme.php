<?php
 /**
  *
  * @package Copycats
  * @since 1.5
  */

namespace COPYCATS_THEME\Inc;

use COPYCATS_THEME\Inc\Traits\Singleton;

class COPYCATS_THEME {

	use Singleton;

	protected function __construct() {

    //Load classes
    Assets::get_instance();
		Menus::get_instance();
		Sidebars::get_instance();
		WooCommerce::get_instance();

    $this->setup_hooks();

	}

	protected function setup_hooks() {
		/*
		* Actions
		*/

		add_action( 'after_setup_theme', [ $this, 'setup_theme' ] );

	}

	public function setup_theme() {

		require_once COPYCATS_THEME_DIR . '/inc/classes/class-wp-bootstrap-navwalker.php';

		add_theme_support( 'title-tag' );

		/** Custom Logo
		 *
		 * @link https://developer.wordpress.org/themes/functionality/custom-logo/
		 */
		add_theme_support(
			'custom-logo',
			[
				'header-text' => [
					'site-title',
					'site-description',
				],
				'height'      => 100,
				'width'       => 220,
				'flex-height' => true,
				'flex-width'  => true,
			]
		);

		# add_action( 'after_setup_theme', 'copycats_custom_logo_setup' );

		add_theme_support( 'post-thumbnails' );

		/* Register image sizes */
		add_image_size( "blog_thumbnail", 250, 200 );
		add_image_size( 'gallery_thumbnail', 500, 300, true );
		add_image_size( 'homepage-thumb', 220, 180 );


		/* Post Formats */
		add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );

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

		/* Gutenberg Structure */
		add_editor_style();

		add_theme_support( 'wp-block-styles' );

		add_theme_support( 'align-wide' );

		/** Woocommerce */
		if ( class_exists( 'WooCommerce' ) ) {

			/* Woocommerce Support */
			add_theme_support( 'woocommerce', array(
				'thumbnail_image_width' => 270,
				'thumbnail_image_crop' 	=> false,
				'single_image_width' 	=> 300,
				'single_image_crop' 	=> false,
				'product_grid' => array(
					'default_rows' 		=> 4,
					'max_rows'			=> 4,
					'default_columns' 	=> 4,
				),
			) );

	  	}

	}

	function copycats_theme_wrapper_start() {
		$theme_html = '<div class="container">';
		$theme_html .= '<div class="row">';
	   	$theme_html .= '<div class="col-lg-12">';

	   	echo $theme_html;
	}

	function copycats_theme_wrapper_end() {
		$theme_html = '</div>';
		$theme_html .= '</div>';
		$theme_html .= '</div>';

		echo $theme_html;
	}
}
