<?php
/**
 * Template functions hooked in 'home'
 */

if (! function_exists( 'copycats_departments_menu' ) ) {

	function copycats_departments_menu() {
		?>
		<div class="categories-list-menu">
			<div class="departments-menu">
				<div class="dropdown show-dropdown">
					<div>
						<a class="departments-menu-title" href="#" data-bs-toggle="dropdown" id="departments-menu-toggle">
							<!-- <i class="fa fa-list fa-1x">-->
							<?php _e( 'Categorias', 'copycats' ); ?>
						</a>
					</div>
					<?php
						wp_nav_menu( array(
							'theme_location'	=> 	'departments-menu',
							'container'			=>	false,
							'menu_class'		=>	'dropdown-menu yamm',
							'fallback_cb'		=>	'WP_Bootstrap_Navwalker::fallback',
							'walker'			=>	new WP_Bootstrap_Navwalker(),
						) );
					?>
				</div>
			</div>

		</div>
		<?php
	}
}
?>