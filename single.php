<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-xl-9 col-lg-9 col-md-12 col-12">
			<div class="single_post_layout">
				<?php 
				if( have_posts() ):
					while( have_posts() ): the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<?php the_title('<h1 class="sigle-post-title">', '</h1>'); ?>
							<small><?php the_category( ' ' ); ?></small>
							<?php the_content(); ?>
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