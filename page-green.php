<?php
/**
 * Copycats Main Page Template
 *
 * @package Copycats
 * @since 1.3.7
 */

get_header();

$featured = array(
    'type' => 'post',
    'cat' => 45,
    'posts_per_page' => 1,
    );

$page_query_featured = new WP_Query( $featured );

?>

<div class="container">

    <?php if( $page_query_featured->have_posts() ):
            while( $page_query_featured->have_posts() ): $page_query_featured->the_post(); ?>

    <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
      <div class="col-lg-6 px-0">
        <!-- sprintf( '<a href="%s"><h2 class="blog-entry-title">', esc_url( get_permalink() ) ), '</h2></a>'  -->
        <div <?php post_class(); ?>>
          <h1 class="display-4 fst-italic"><?php the_title(); ?></h1>
          <p class="lead my-3"><?php the_excerpt(); ?></p>
          <p class="lead mb-0"><a href="#" class="text-body-emphasis fw-bold"><?php _e( 'Continuar leyendo...', 'copycats' ); ?></a></p>
        </div>
      </div>
    </div>

      <?php endwhile; ?>
    <?php endif;
      wp_reset_postdata();
    ?>

  <div class="row mb-2">

    <?php
      $feed = array(
        'type'          => 'post',
        'cat'           => 45,
        'post_per_page' => 2,
        'offset'        => 1,
      );

      $page_posts_feed = new WP_Query( $feed );
    ?>

    <?php if( $page_posts_feed->have_posts() ):
            while( $page_posts_feed->have_posts() ): $page_posts_feed->the_post(); ?>

    <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <span class="newsletter-categories">

              <?php
                $categories = get_the_category( $post->ID );

                if ( ! empty( $categories ) ){
                  echo '<strong class="d-inline-block mb-2 text-primary-emphasis">' . esc_html( $categories[0]->cat_name ) . '</strong>';
                }
              ?>

            </span>
            <h3 class="mb-0"><?php the_title(); ?></h3>
            <div class="mb-1 text-body-secondary"><?php the_date(); ?></div>
            <p class="card-text mb-auto"><?php echo the_excerpt(); ?></p>
            <a href="<?php echo esc_url( get_permalink() ); ?>" class="icon-link gap-1 icon-link-hover stretched-link">

              <?php _e( 'Continuar leyendo ...', 'copycats' ); ?>

              <!--svg class="bi"><use xlink:href="#chevron-right"/></svg-->
            </a>
          </div>

          <?php
            if ( has_post_thumbnail() ): ?>
          <div class="col-auto d-none d-lg-block">
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

          </div>
        <?php endif; ?>
        </div>
      </div>
          <?php endwhile; ?>
        <?php endif;
          wp_reset_postdata();
        ?>

  </div>
</div>

<?php get_footer(); ?>
