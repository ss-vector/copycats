<?php

?>

<div class="fs-container"> <!-- front store container-->

	<div class="swiper-container">
		<div class="swiper-wrapper">
	
			<div class="swiper-slide">
				<div class="inner-slider-wrapper main-slide">
					<div class="container">
				 		<div class="featured-wrapper">
				 			
				 		</div>
				 	</div>

				</div>
			</div>
			<div class="swiper-slide">
				<div class="inner-slider-wrapper slide-2">
					<div class="container">
						<div class="row mt-5">
							<div class="col-lg-3 col-sm-12">
								<div class="card shadow-lg">
									<?php mini_cards_slide( 0 ); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="swiper-slide">
				<div class="inner-slider-wrapper slide-3">
					<div class="container">
						<div class="row mt-5">
							<div class="col-lg-3 col-sm-12">
								<div class="card shadow-lg">
									<?php mini_cards_slide( 1 ); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
			 <!-- If we need pagination -->
	  	<div class="swiper-pagination"></div>

	  	<!-- If we need navigation buttons 
	  	<div class="swiper-button-prev"></div>
	  	<div class="swiper-button-next"></div>
		-->
	  	<!-- If we need scrollbar -->
	  	<div class="swiper-scrollbar"></div>
	</div>

	</div>

