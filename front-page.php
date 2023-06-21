<?php get_header();
/**
 * 
 * @package Copycats
 */ 
?>
<div class="cover-display">
	<div class="primary-container">
	
		<div class="container-fluid">
		
			<div class="article-wrapper">
				<div class="home-featured-content">

					<div class="container">
						<div class="row">
							<div class="col featuted-bg">
								<article class="float-end">
									<h1 class="display-5 text-white fw-bold">Negocios El Triunfo - Lambayeque</h1>
									<h2 class="display-6 text-light">Una comunidad local de negocios.</h2>
									<span></span>
								</article>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<?php get_template_part( 'inc/template/sections/cc-recent-posts' ); ?>

<!-- TODO: Add local business links -->

<?php get_template_part( 'inc/template/sections/cc-featured-section' ); ?>

<?php get_template_part( 'inc/template/sections/cc-map-section' ); ?>

<?php # get_template_part( 'inc/template/sections/cc-newsletter' ); ?>

<?php get_footer(); ?>