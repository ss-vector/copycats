<article id="post-<?php the_ID(); ?>" <?php post_class( $class = 'col-sm-3 p-3' ); ?>>
	<?php if( has_post_thumbnail() ): ?>
		<div class="thumbnail"><?php the_post_thumbnail( 'thumbnail' ); ?></div>
	<?php endif; ?>
	<?php $post_link = esc_html(get_permalink()); ?>
	<?php the_title(sprintf('<h5 class="entry-title"><a href="%s">',$post_link), '</a></h5>'); ?>
	<?php the_excerpt(); ?>
</article>