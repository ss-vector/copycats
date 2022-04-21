<?php
/**
 *  Copycats Theme Support Functions
 * 
 * @package Copycats
 * */

	require_once COPYCATS_THEME_DIR . '/inc/template/layout/walker.php';
	# require $vega_inc_path . '/inc/template/layout/slider-content.php';

/* Nav Menus Options */
function copycats_register_nav_menu_setup() {

	add_theme_support( 'menus' );

	register_nav_menu( 'primary-top', 'Top bar Navigation Menu' );

	register_nav_menu( 'header-menu', 'Main Header Menu' );
	register_nav_menu( 'pages-menu', 'Pages Menu' );
	// Footer Manus: Blocks
	register_nav_menu( 'footer-block-menu', '1st Footer Navigation Block Menu' );
	register_nav_menu( 'recent-posts-menu', '2nd Footer Navigation Block Menu' );

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

/* Post Formats */
add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );

# Custom Logo

function copycats_custom_logo_setup() {
	$defaults = array(
		'height' 		=> 100,
		'width' 		=> 400,
		'flex-height'	=> true,
		'flex-width' 	=> true,
	);

	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'copycats_custom_logo_setup' );

/* HTML5 */
add_theme_support( 'html5', array( 'search-form' ) );