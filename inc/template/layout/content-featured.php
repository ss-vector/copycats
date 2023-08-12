<article id="post-<?php the_ID(); ?>" <?php post_class( $class = 'col-sm-3 p-3' ); ?>>
	<?php if( has_post_thumbnail() ): ?>
		<div class="thumbnail"><?php the_post_thumbnail( 'thumbnail' ); ?></div>
	<?php endif; ?>
	<?php
		$categories = get_the_category( $post->ID );
		$post_link = esc_html( get_permalink() );


		the_title(sprintf( '<h5 class="entry-title"><a href="%s">',$post_link ), '</a></h5>' );

		if ( ! empty( $categories ) ){
			echo '<span class="newsletter-categories">' . esc_html( $categories[0]->name ) . '</span>';
		}

		the_excerpt();
	?>
</article>
