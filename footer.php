<?php wp_footer(); ?>
			</div> <!-- /container-fluid -->
			</div><!-- /main-warpper -->
			<footer class="site-footer bg-footer">
				<div class="footer-box">
					<div class="container py-3">
						<div class="row">
							<div class="box-footer col-lg-2 col-md-4 mb-3">
								<div class="box">
									<img src="<?php echo esc_html( get_template_directory_uri() . '/assets/img/logo_eltriunfo.svg' );?>" alt="<?php esc_attr_e( 'ElTriunfo', 'copycats' );?>"/>
								</div>
							</div>
							<div class="box-footer col-lg-2 col-md-4 mb-3">
								<div class="box">
									<h3>Productos</h3>
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
							<div class="box-footer col-lg-4 col-md-8 mb-3">
								<div class="box ">
									<h3>Publicaciones Recientes</h3>
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
							<div class="box-footer col-lg-3 col-md-4 mb-3">
								<div class="socials">
									<div class="">
										<strong>Información de Contacto</strong>
										<address>Ca. López Vidaurre 1043<br>Lambayeque, Perú</address>
									</div>
									<div class="footer-social-icons">
										<ul class="social-icons nav p-3 align-items-center">
											<li>
												<?php do_action('copycats_footer_social_block'); ?>
											</li>
											<li>
												<a href="https://wa.me/51978861145"><i class="fa-brands fa-whatsapp fa-xl"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa-brands fa-instagram fa-xl"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa-brands fa-pinterest fa-xl"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa-brands fa-youtube fa-xl"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa-brands fa-twitter fa-xl"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>




						</div>
					</div>
					<div class="sub-footer">
						<span>Copyright © 2021 Negocios El Triunfo <br> Designed by <strong><a rel="nofollow" href="https://github.com/ss-vector">ss-Vector</a><strong></span>
					</div>
				</div>
	
			</footer>
		</div><!-- </container-fluid> -->
	</body>
</html>