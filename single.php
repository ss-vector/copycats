<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-xl-9 col-lg-9 col-md-12 col-12">
			<div class="single_post_layout">
				<?php 
				if( have_posts() ):
					while( have_posts() ): the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<?php the_title('<h1 class="single-post-title">', '</h1>'); ?>


							<?php 
								$categories = get_the_category();

								if( ! empty( $categories ) ){
									foreach( $categories as $cat ){	
										echo '<a href="' . get_category_link($cat->term_id) . '" class="badge text-bg-primary me-2">';
										echo esc_html($cat->name);
										echo '</a>';	
									}	
								}	

							?>
							
							<?php the_content(); ?>
							<?php echo 'Fecha de Publicación: ' . '<strong class="fs-6">' . get_the_date('F j,Y') . '</strong>' ; ?>
							<hr>
							<?php if( comments_open()){ comments_template(); } ?>
						</article>
					<?php
					endwhile;
				endif;
				?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
