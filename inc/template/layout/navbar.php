<?php
/**
 * @see Theme functions for navbars
 */

if (! function_exists( 'copycats_departments_menu' ) ) {

	function copycats_departments_menu() {
		?>
		<div class="categories-list-menu">
			<div class="departments-menu">
				<div class="dropdown show-dropdown">
					<div class="departments-menu-title">
						<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" id="departments-menu-toggle">
							<?php _e( 'Categorias', 'copycats' ); ?>
						</a>
					</div>
					<?php
						wp_nav_menu( array(
							'theme_location'	=> 	'departments-menu',
							'container'			=>	false,
							'menu_class'		=>	'dropdown-menu yamm'
							'fallback_cb'		=>	'wp_bootstrap_navwalker::fallback',
							'walker'			=>	new WP_Bootstrap_Navwalker()
						) );
					?>
				</div>
			</div>

		</div>
		<?php
	}
}
?>