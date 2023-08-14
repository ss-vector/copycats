<article id="post-<?php the_ID(); ?>" <?php post_class( $class = 'col-sm-3 p-3' ); ?>>
	<?php if( has_post_thumbnail() ): ?>
		<div class="thumbnail">

			<?php the_post_custom_thumbnail(
					get_the_ID(),
					'woocommerce_thumbnail',
					[
						'sizes' => '(max-width: 200px), 200px, 250px',
						'class' => 'demo-thumbnail'
					]
				);
			?>

		</div>
	<?php endif; ?>
	<?php
		$categories = get_the_category( $post->ID );
		$post_link = esc_html( get_permalink() );


		the_title(sprintf( '<h5 class="entry-title"><a href="%s">',$post_link ), '</a></h5>' );

		if ( ! empty( $categories ) ){
			echo '<span class="newsletter-categories"><strong class="d-inline-block mb-2 text-primary-emphasis">' . esc_html( $categories[0]->cat_name ) . '</strong>' . '</span>';
		}



		the_excerpt();
	?>
</article>
