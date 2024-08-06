<?php wp_footer(); ?>
			</div> <!-- /container-fluid -->
			</div><!-- /main-warpper -->

			<footer class="container-fluid site-footer footer bg-dark">

				<div class="footer-box text-light">

					<div class="container py-5">
						<div class="row g-5">
							<div class="box-footer col-lg-2 col-md-4 mb-3">
								<h1 class="box footer-logo">
									<img src="<?php echo esc_html( get_template_directory_uri() . '/assets/img/logo-final-cc.svg' );?>" alt="<?php esc_attr_e( 'IS ElTRIUNFO', 'copycats' );?>"/>
								</h1>
								<div class="d-flex pt-2">
									<!-- Social Icons classes: footer-social-icons-->
										<a class="btn btn-square btn-outline-light rounded-circle me-1" href="https://wa.me/51978861145"><i class="fa-brands fa-whatsapp"></i></a>
										<a class="btn btn-square btn-outline-light rounded-circle me-1" href="#"><i class="fa-brands fa-facebook"></i></a>
										<a class="btn btn-square btn-outline-light rounded-circle me-1" href="https://pin.it/5Pujyi8OK"><i class="fa-brands fa-pinterest"></i></a>
										<!--
												<a class="btn btn-square btn-outline-light rounded-circle me-1" href="#"><i class="fa-brands fa-youtube"></i></a>
												<a class="btn btn-square btn-outline-light rounded-circle me-1" href="#"><i class="fa-brands fa-twitter"></i></a>
										-->
								</div>
							</div>
							<div class="box-footer col-lg-2 col-md-4 mb-3">
								<div class="box">
                  <h3><?php _e( 'Información','copycats' ); ?></h3>
									<?php
										wp_nav_menu( array(
											'menu_class'		=> 'menu',
											'menu-id' 			=> 'block-footer-1',
											'theme_location' 	=> 'footer-nav-menu',
											'container'			=> false
										) );
									?>
								</div>
							</div>
							<div class="box-footer col-lg-3 col-md-8 mb-3">
								<div class="box ">
                <h3><?php _e( 'Mapa del Sitio', 'copycats' ); ?></h3>
									<?php
										wp_nav_menu( array(
											'menu_class' 		=> 'menu',
											'menu-id' 			=> 'block-footer-2',
											'theme_location'	=> 'recent-posts-menu',
											'container'			=> false
										) );
									?>
								</div>
							</div>
						</div>

					</div>

					<div class="container-fluid copyright">
						<div class="container">

							<div class="row">
								<span>Copyright © 2021 Negocios El Triunfo <br> Designed by <strong><a rel="nofollow" href="https://github.com/ss-vector">ss-Vector</a></strong></span>
							</div>

						</div>
					</div>

				</div><!-- </container-fluid> -->
			</footer>
			<?php # do_action( 'copycats_footer_social_block' ); ?>
		<!-- visita interiora terrae rectificando invenies occultum lapidem -->
	</body>
</html>
