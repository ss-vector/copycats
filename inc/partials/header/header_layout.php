<?php
	/**
	 * Copycats header template
	 * 
	 * @package Copycats  
	 */
?>
<div id="master" class="site-header">
	<!-- top-bar-->
	<div class="top-bar">
		<div class="container">
			<div class="row align-items-center-justify-content-between">
				<div class="col-sm">
					<div class="hot-title">
					 	<h5>Envios a todo <strong>Perú</strong></h5>
					</div>
				</div>
				<div class="col-sm">
					<nav class="top-bar-menu">
						<?php 
							wp_nav_menu( array(
								'menu_class'		=> 'nav navbar-nav',
								'menu-id' 			=> 'primary-top-menu',
								'theme_location' 	=> 'primary-top',
								'container'			=> false
							) );
						?>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- /top-bar -->
	<!-- Main Header -->
	<div class="main-header">
		<div class="container">
			<div class="row align-items-center justify-content-between">
				<!-- logo -->
				<div class="col-xl-2 col-6">
					<!-- TODO:
						--Logo automation demo.
					 -->
				</div>
				<div id="search-bar" class="col">
					<div class="search-form-container main-header-right">
						<div class="woo_search woo_search_with_cats">
							<?php get_search_form(); ?>
						</div>
					</div>
				</div>
				<div class="col-xl-2 col-6">
					<!-- TODO: 
						--woocommerce categoris nav menu
					-->
				</div>
			</div>
		</div>
	</div>
	<!-- /main-header -->
	<!--Bottom Nav Bar -->
	<div class="bottom-bar bottom-bar-woocommerce">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-sm-3 col-md-4 col-lg-3 col-9 woo_categories_menu">
					<?php # get_template_part('vega/partials/navbar/woo_nav'); ?>
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
								<?php # get_template_part( 'vega/partials/header/parts/pages-menu' ); ?>
	                        </div>
	                    </div>
	                </div>

					<div class="header_main_menu wp_is_not_mobile">
						<ul class="copycats-pages-menu">
							<?php # get_template_part( 'vega/partials/header/parts/menu' ); ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>