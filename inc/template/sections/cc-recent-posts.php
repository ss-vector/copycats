<?php
/**
 *  Copycats Last Blog Posts
 *
*/
	$args = array(
		'type'				=> 'post',
		'posts_per_page'	=> 3,
	);
	?>

	<div class="cc-news-section p-5">

			<div class="section-title">
				<h2>Últimas Publicaciones del Blog</h2>
			</div>
		<div class="container">
			<div class="row justify-content-center">

			<?php

			$lastBlogPosts = new WP_Query( $args );

			if( $lastBlogPosts->have_posts() ):
				while( $lastBlogPosts->have_posts() ): $lastBlogPosts->the_post(); ?>

					<?php get_template_part( 'inc/template/layout/content-featured' ); ?>

				<?php endwhile;

			endif;

			wp_reset_postdata();

			?>

			</div>
		</div>
	</div>
