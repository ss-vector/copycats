<?php 

	$args = array( 
		'post_type' 		=> 'product',
		'posts_per_page' 	=>	4,
	);
	$loop = new WP_Query( $args );
?>

<div class="container">
	<div class="row pt-5">

		<div class="section">
			<h1><?php _e( 'Productos Recientes', 'copycats' ); ?></h1>
			<hr>
		</div>
	
		<div class="wrapper pb-5">

			<?php

				while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
				
					<div class="cc-card">

					  <!-- class="card-img-top" > -->
					  	
					  	<?php 
					  	
					  		if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail( $loop->post->ID, 'shop_catalog' );
		              			else echo '<img src="' . woocommerce_placeholder_img_src() . '" alt="Placeholder" width="250px" height="250px" />';
		              	?>

		              	<div class="card-heading">
					    	<a href="<?php echo get_permalink( $loop->post->ID ); ?>"><?php the_title( '<h5 class="card-title">', '</h5>' ); ?></a>
						</div>
					  	
					  	<div class="card-description m-3">

					    	<p class="card-text"><?php echo $product->get_short_description( ); ?></p>
					    	
					    	<?php echo $product->get_price_html('<span class="samll">', '</span>'); ?>
					  		
					    
					  	</div>
				  		
				  		<a href="#" class="btn btn-primary"><?php _e( 'Añadir', 'copycats' )?></a>

					</div>
			
			<?php endwhile; wp_reset_query(); ?>

		</div>

	</div>

</div>

