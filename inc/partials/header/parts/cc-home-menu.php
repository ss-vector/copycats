<?php
/*
 *
 * @subpackage Main Menu
 */

  $menu_class = \Copycats_Theme\Inc\Menus::get_instance();

	 wp_nav_menu( 
	 	array(
				'theme_location' 	=> 'primary-home-menu',
				'menu_class'		=> 'nav',
				'container'			=> false,
				'walker'			=> new WP_Bootstrap_Navwalker()
		));
?>
