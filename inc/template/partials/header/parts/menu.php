<?php
	 wp_nav_menu( 
	 	array(
				'depth'				=> 3,
				'items_wrap' 		=> '%3$s',
				'theme_location' 	=> 'header-menu',
				'container'			=> false,
				'walker'			=> New header_menu_walker(),
		));
?>