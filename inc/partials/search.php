<div id="primary" class="container">
	<main id="main" class="site-main">

		<?php 
		# Working but needs improving search function?
			if( have_posts() ):
				while( have_posts() ): the_post(); ?>
					<article class="blog-post">
						<?php the_title( '<h2>', '</h2>'); ?>
						<span><?php the_category( ' ' ); ?></span>
						<div class="post-content">
							<?php the_excerpt(); ?>
						</div>
					</article>
				<?php
				endwhile;
			endif;
		?>
	</main>
</div>