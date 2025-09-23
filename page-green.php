<?php
/**
 * Copycats Green Section Template
 *  
 * @package Copycats
 * @since 1.3.7
 */

get_header();

global $post;

$post_slug = $post->post_name;
if ( $post_slug = 'green' ) {
  $page_posts_categories = 'jardineria';
  $post_category_ID = get_cat_ID( $page_posts_categories );
}

$featured = array(
    'type' => 'post',
    'cat' => $post_category_ID,
    'posts_per_page' => 1,
    );

$page_query_featured = new WP_Query( $featured );

?>

<div class="content-grid container">

    <?php if( $page_query_featured->have_posts() ):
            while( $page_query_featured->have_posts() ): $page_query_featured->the_post(); ?>

    <div class="featured-card large-block p-4 p-md-5 mb-4 mt-3 rounded" style="background: url(<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' );?>);">
      <div class="featured-content col-lg-6 px-0">
          <!--href="<?php echo esc_url( get_permalink() ); ?>"-->
            <div <?php post_class(); ?>>
              <a href="<?php echo esc_url( get_permalink() ); ?>">
                <h1 class="display-4 fst-italic"><?php the_title(); ?></h1>
                <p class="lead my-3"><?php the_excerpt(); ?></p>
              </a>
              <hr>

              <?php
                $categories = get_the_category( $post->ID );
                if ( ! empty( $categories ) ){
                    echo '<span class="tag d-inline-block text-white">' . esc_html( $categories[0]->cat_name ) . '</span>';
                }
              ?>

            </div>
      </div>
    </div>

    <?php 
      endwhile;
      endif;
      wp_reset_postdata();
    ?>

    <div class="row mb-2">

      <?php
        $feed = array(
          'type'          => 'post',
          'cat'           => $post_category_ID,
          'post_per_page' => 2,
          'offset'        => 1,
        );

        $page_posts_feed = new WP_Query( $feed );
      ?>

      <?php if( $page_posts_feed->have_posts() ):
              while( $page_posts_feed->have_posts() ): $page_posts_feed->the_post(); ?>

        <div class="mini-card col-md-6 mt-3">

            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col d-flex flex-column position-static">

                <span class="newsletter-categories">

                  <?php
                    $categories = get_the_category( $post->ID );
                    if ( ! empty( $categories ) ){
                      echo '<strong class="tag d-inline-block text-white">' . esc_html( $categories[0]->cat_name ) . '</strong>';
                    }
                  ?>

                </span>

                <?php if ( has_post_thumbnail() ): ?>

                  <div class="col-auto d-none d-lg-block">
                    <div class="card-thumbnail">

                      <?php the_post_custom_thumbnail(
                          get_the_ID(),
                          'woocommerce_thumbnail',
                          [
                            'sizes' => '(max-width: 200px), 200px, 250px',
                            'class' => 'mini-card__thumbnail'
                          ]
                        );
                      ?>

                    </div>
                  </div>

                  <div class="container">
                    <h3 class="card-title"><?php the_title(); ?></h3>
                    <span class="mb-1 text-body-secondary"><?php the_date(); ?></span>
                    <p class="card-text mb-auto"><?php echo the_excerpt(); ?></p>
                    <a href="<?php echo esc_url( get_permalink() ); ?>" class="icon-link gap-1 icon-link-hover stretched-link">
                    </a>
                  </div>

                <?php endif; ?>
                
                <?php if ( !has_post_thumbnail() ): ?>
                  <div class="text-card container">  
                      <div class="p-4">
                        <h3 class="mb-0"><?php the_title(); ?></h3>
                        <span class="mb-1 text-body-secondary"><?php the_date(); ?></span>
                        <p><?php echo esc_html( the_excerpt() ); ?></p>
                      </div>
                  </div>
                <?php endif; ?>

              </div>
            </div>
          
          </div>

          <?php endwhile; ?>
          <?php endif;
            wp_reset_postdata();
          ?>


    </div>

</div>

<?php get_footer(); ?>
