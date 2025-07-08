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
<div class="product">
<?php the_title(); ?>

</div>
<?php
  endwhile;
}else{
  echo __("No products found");
}
?>

</div>

<?php
  wp_reset_postdata();
?>

<?php get_footer(); ?>
