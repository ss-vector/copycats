<ul class="copycats-pages-menu">
	<?php
		wp_nav_menu( array(
			'theme_location' 	=> 'pages-menu',
			'depth'				=> 3,
			'container'			=> false,
			'items_wrap' 		=> '%3$s',
			'echo' 				=> true,
			'stm_megamenu' 		=> 1,
			'fallback_cb'  		=> '__return_false'
		) );
	?>
</ul>
