<?php
/**
 * Hardware Store Category Page
 *
 * @package Copycats
 * @since 7.80
 *
 */
get_header();
?>
    <?php
    $args = array(
      'post_type' => 'product',
      'product_cat' => 'hardware',
      'posts_per_page' => 12,
      'paged' => get_query_var('paged') ? get_query_var('paged') : 1
    );

    $loop = new WP_Query($args);
    ?>
  <div class="container page-content">
    <?php 
    if( $loop->have_posts() ){
      while($loop->have_posts()) : $loop->the_post();
    ?>
  <div class="row">
  <div class="product" style="width:360px;" aria-hidden="false">
    <h2><?php the_title(); ?></h2>
    <?php if(has_post_thumbnail($loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />'; ?>


  </div>
    <?php
      endwhile;
      }else{
        echo __("No products found");
      }
    ?>
  </div>

</div>

<?php
  wp_reset_postdata();
?>

<?php get_footer(); ?>
