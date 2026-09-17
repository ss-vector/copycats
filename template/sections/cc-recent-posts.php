<?php
/**
 *  Copycats Last Blog Posts
 *
*/

	$slugs = [ 'anuncios', 'comunicados', 'politicas' ];
	# $featuredCat = get_category_by_slug('green');
	# $featuredCatId = $featuredCat->term_id;

	$category_ids = wp_list_pluck(
		get_terms([
			'taxonomy' 		=> 'category',
			'slug' 			=> $slugs,
			'hide_empty' 	=> false,
		]),
		'term_id'
	);

	$args = array(
		'type'				=> 'post',
		'posts_per_page'	=> 3,
		'category__not_in' => $category_ids,
	);

	?>

	<div class="cc-news-section py-5 bg-body-tertiary reveal-init">

			<div class="section-title text-center">
				<h2><?php esc_html_e( 'Publicaciones Recientes', 'copycats' ); ?></h2>
			</div>
		<div class="container">
			<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

			<?php

			$lastBlogPosts = new WP_Query( $args );

			if( $lastBlogPosts->have_posts() ):
				while( $lastBlogPosts->have_posts() ): $lastBlogPosts->the_post(); ?>

					<?php get_template_part( 'template/parts/content/content-album' ); ?>

				<?php endwhile;

			endif;


			?>

			</div>
		</div>
	</div>
<?php	wp_reset_postdata(); ?>
