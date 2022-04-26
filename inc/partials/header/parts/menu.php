<?php
	 wp_nav_menu( 
	 	array(
				'theme_location' 	=> 'primary-home-menu',
				'menu_class'		=> 'nav',
				'container'			=> false,
				'walker'			=> new copycats_Nav_Menu(),
		));
?>