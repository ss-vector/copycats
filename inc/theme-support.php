<?php
/**
 *  Copycats Theme Support Functions
 * 
 * @package Copycats
 * @since 1.0.5
 * 
 * */

require_once COPYCATS_THEME_DIR . '/inc/classes/class-wp-bootstrap-navwalker.php';
require_once COPYCATS_THEME_DIR . '/inc/template/slider/slider-content.php';

/* Post Formats */
add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
add_theme_support( 'custom-logo' );

/* Nav Menus Options */
function copycats_register_nav_menu_setup() {
	
	add_theme_support( 'menus' );

	$nav_menus = array(
		'departments-menu'	=> esc_html( 'Menu de Categorías', 'copycats' ),
		'top-primary-menu'	=> esc_html( 'Menu principal de cabecera', 'copycats' ),
		'primary-home-menu'	=> esc_html( 'Menu principal', 'copycats' ),
		'pages-menu'		=> esc_html( 'Menu de varias páginas', 'copycats' ),
		'footer-nav-menu'	=> esc_html( 'Menu de navegación en Footer', 'copycats' ),
		'recent-posts-menu'	=> esc_html( 'Menu de publicaciones recientes' ,'copycats' ),
	);

	register_nav_menus( $nav_menus );

}
add_action( 'init', 'copycats_register_nav_menu_setup' );

/* Sidebar Functions */
function copycats_blog_sidebar_setup() {
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
add_action( 'widgets_init', 'copycats_blog_sidebar_setup' );

/** Custom Logo
 * 
 * @link https://developer.wordpress.org/themes/functionality/custom-logo/
 */
add_image_size( 'custom-size', 220, 180, true );
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

/* HTML5 */
add_theme_support( 'html5', array( 'search-form' ) );

add_action( 'after_setup_theme', 'copycats_woocommerce_support' );

function copycats_woocommerce_support() {
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