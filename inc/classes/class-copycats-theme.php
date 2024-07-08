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
		CopycatsCustomizer::get_instance();

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

		add_action('copycats_footer_social_block', [ $this, 'copycats_social_media_links' ], 10 );
		add_action('copycats_slider_init', [ $this, 'copycats_main_slider' ], 10 );

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

		// Gutenberg Theme Support

		add_editor_style();

		// Add link to you editor styles css file.

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
	/*
	 * Other theme functions
	*/

	# Template Tags: Footer Link Functions
	function copycats_social_media_links() {
		// Retrieve Link Options from: copycats-admin-functions
		$fblink = esc_attr( get_option( 'social_site_link' ) );
		# $instalink = esc_attr(get_option( 'instagram_link' ));
		$a_link = '<a href="' . $fblink . '" target="_blank"><i class="fa-brands fa-facebook fa-xl">' . '</i></a>';

		echo $a_link;

	}

	function copycats_main_slider() {

		$slides = array(
			'slide_1' => array(
										'slide_title'		=> 	esc_attr( get_option( 'cc_slider_title' ) ),
										'slide_excerpt'	=>	esc_attr( get_option( 'cc_slider_excerpt' ) ),
										'slide_link'		=> 	esc_attr( get_option( 'cc_slider_link' ) ),
										'slide_image'		=>	esc_attr( get_option( 'cc_slider_image' ) )
									),
			'slide_2'	=> array(
										'slide_title'		=> 	'Construye con Nosotros',
										'slide_excerpt'	=>	'Trabaja con nuestros socios de <strong>confianza</strong>',
										'slide_link'		=> 	'#',
										'slide_image'		=>	'/wordpress/assets/construction-in-progress.jpg'
									),
			'slide_3'	=> array(
										'slide_title'		=> 	'Proyectos Sostenibles',
										'slide_excerpt'	=>	'Vivir mejor en un mundo verde',
										'slide_link'		=> 	'#',
										'slide_image'		=>	'/wordpress/assets/spondias-purpurea.jpg'
									),
		);

		$html_content = '';

		foreach ( $slides as $slide ) {
				$html_content	.= 	'<div class="carousel-item active">';
				$html_content .= 	'<div class="cover-display" style="background-image: url('  . $slide[ 'slide_image' ] . ')">';
				$html_content .= 	'<div class="primary-container"><div class="container-fluid"><div class="article-wrapper">';
				$html_content .= 	'<div class="home fs-slider-content"><div class="container"><div class="row"><section class="float-end">';
				$html_content .= 	'<h1 class="display-5 text-white fw-bold">' . $slide[ 'slide_title' ] . '</h1>';
				$html_content .=	'<h2 class="display-6 text-light">' . $slide[ 'slide_excerpt' ] .'</h2>';
				$html_content .=	'<button type="submit"><a href="' . $slide[ 'slide_link' ] . '">Visitar</a></button>';
				$html_content .= 	'</section></div></div></div></div></div></div></div></div>';

		}

		unset( $slide );

		echo $html_content;

	}
}
