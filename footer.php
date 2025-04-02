<?php wp_footer(); ?>
			</div> <!-- /container-fluid -->
			</div><!-- /main-warpper -->
			<?php 

				$email_adress = $_POST['email_address']
				
			?>

			<footer class="container-fluid site-footer footer bg-dark text-light" data-bs-theme="dark">

				<div class="box-footer">

					<div class="container py-5">
						<div class="row g-5">
							<div class="box-footer col-lg-2 col-md-4 mb-3">
								<div class="box footer-logo">
									<img src="https://res.cloudinary.com/negocios-el-triunfo/image/upload/v1742420065/logo-final-cc_pkl4uz.svg">
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
              <div class="box-footer col-lg-3 col-md-8 mb-3">
              	<div class="box">
              		<h3><?php _e( 'Subscribete', 'copycats' ); ?></h3>
									<?php echo do_shortcode('[contact]'); ?>
								</div>
              </div>
						</div>

					</div>

					<div class="container socials pt-2">
						<div class="justify-content-center d-flex gap-3">
							<!-- Social Icons classes: footer-social-icons-->
							<a class="btn btn-outline-light me-1" href="https://wa.me/51978861145"><i class="fa-brands fa-whatsapp fs-3"></i></a>
							<a class="btn btn-outline-light me-1" href="#"><i class="fa-brands fa-facebook fs-3"></i></a>
							<a class="btn btn-outline-light" href="https://pin.it/5Pujyi8OK"><i class="fa-brands fa-pinterest fs-3"></i></a>
						</div>
					</div>

					<div class="container-fluid copyright">
						<div class="container">

							<div class="row">
								<span>Copyright © 2021 Negocios El Triunfo <br> Designed by <strong><a rel="nofollow" href="https://ss-vector.github.io">ss-Vector</a></strong></span>
							</div>

						</div>
					</div>
				</div><!-- </container-fluid> -->
			</footer>
			<?php # do_action( 'copycats_footer_social_block' ); ?>
		<!-- visita interiora terrae rectificando invenies occultum lapidem -->
	</body>
</html>
