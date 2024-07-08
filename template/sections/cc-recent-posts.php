<?php
/**
 *  Copycats Last Blog Posts
 *
*/
	$args = array(
		'type'						=> 'post',
		'posts_per_page'	=> 3,
		'cat'							=> -85,
	);
	?>

	<div class="cc-news-section py-5 bg-body-tertiary">

			<div class="section-title text-center">
				<h2><?php esc_html_e( 'Noticias', 'copycats' ); ?></h2>
			</div>
		<div class="container">
			<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

			<?php

			$lastBlogPosts = new WP_Query( $args );

			if( $lastBlogPosts->have_posts() ):
				while( $lastBlogPosts->have_posts() ): $lastBlogPosts->the_post(); ?>

					<?php get_template_part( 'template/parts/content/content-album' ); # content-featured ?>

				<?php endwhile;

			endif;

			wp_reset_postdata();

			?>

			</div>
		</div>
	</div>
