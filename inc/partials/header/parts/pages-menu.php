	<?php
		wp_nav_menu( array(
			'theme_location' 	=> 'pages-menu',
			'menu_class'		=> 'nav navbar-nav',
			'walker'			=> new copycats_Nav_Menu(),
		) );
	?>