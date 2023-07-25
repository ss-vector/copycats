<?php
	/**
	 * Copycats header template
	 *
	 * @package Copycats
	 */
?>
<header id="master" class="site-header">
	<!-- top-bar -->
	<div class="top-bar">
		<div class="container">
			<div class="row align-items-center-justify-content-between">
				<div class="col">
					<div class="hot-title float-start">
					 	<span>Conectando negocios en el <strong>Perú</strong></span>
					</div>
				</div>
				<div class="col">
					<div class="float-end navbar-search">
						<?php
						/**
						 * @subpackage Header Top-Navbar
						 * IT DOES NOT WORK when you are referring to an inexisting location.
						 * e.g. when you copied the code from somewhere else,
						 * or you haven't created your menu or location yet in the dasboard.
						 */
							wp_nav_menu( array(
								'menu' 				=> '',
								'menu_class'		=>	'nav',
								'theme_location' 	=> 'top-primary-menu',
								'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'container'			=> false,
								'fallback_cb'		=> 'wp_page_menu',
							) );
						?>
					</div>
				</div>
			</div>
		</div>
	</div><!-- /top-bar -->

	<!-- Main Header -->
	<div class="main-header">
		<div class="container">
			<div class="row align-items-center justify-content-between copycats-navbar">
				<!-- logo -->
				<div class="col-xl-2 col-6">
					<?php if( function_exists( 'the_custom_logo' ) ) {
						do_action( 'copycats_header' );
					}
					?>
				</div>
				<!-- Search bar -->
				<div id="search-bar" class="col">
					<div class="search-form-container main-header-right">
						<div class="woo_search woo_search_with_cats">
							<?php get_search_form(); ?>
						</div>
					</div>
				</div>
				<!-- TODO:	-->
				<div class="col-xl-2 col-6">

				</div>
			</div>
		</div>
		<!-- Bottom bar header -->
		<div class="bottom-bar bottom-bar-woocommerce">
			<div class="container">
				<div class="row copycats-nav-row align-items-center">
					<div class="col-sm-3 col-md-4 col-lg-3 col-9 woo_categories_menu">
						<?php
							do_action( 'copycats_homepage' );
						?>
					</div>
					<div class="col-lg col-md col-sm-6 col-3">
						<div class="copycats__mobile wp_is_mobile">
							<div class="copycats__mobile_toggler" data-toggle-selector=".copycats__mobile_content, .copycats__mobile_overlay, body">
	                            <span></span>
	                            <span></span>
	                            <span></span>
							</div>

							<div class="copycats__mobile_overlay" data-toggle-selector=".copycats__mobile_toggler, .copycats__mobile_content, body"></div>
		                    <div class="copycats__mobile_content">
		                        <div class="copycats__mobile_content__inner">
		                        	<h5>Menu de Navegación</h5>
		        					<ul class="copycats-pages-menu">
										<?php get_template_part( 'inc/partials/header/parts/cc-home-menu' ); ?>
									</ul>
		                        </div>
		                    </div>
		                </div>

						<div class="header_main_menu wp_is_not_mobile">
						<?php
						/**
						*
						*	@subpackage Main navigation Menu
						*	If its not mobile version of website/browser
						*
						**/
						?>
							<ul class="copycats-pages-menu">
								<?php get_template_part( 'inc/partials/header/parts/cc-home-menu' ); ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Main Header -->
</header>
