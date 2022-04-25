	<?php
		wp_nav_menu( array(
			'theme_location' 	=> 'pages-menu',
			'walker'			=> new copycats_Nav_Menu(),
		) );
	?>