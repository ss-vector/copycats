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
            <strong class="d-inline-block mb-2 text-primary-emphasis">World</strong>
            <h3 class="mb-0"><?php the_title(); ?></h3>
            <div class="mb-1 text-body-secondary">Nov 12</div>
            <p class="card-text mb-auto"><?php the_excerpt(); ?></p>
            <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">

              <?php _e( 'Continuar leyendo...', 'copycats' ); ?>

              <svg class="bi"><use xlink:href="#chevron-right"/></svg>
            </a>
          </div>

          <?php
            if ( has_post_thumbnail() ): ?>
          <div class="col-auto d-none d-lg-block">
            <div class="thumbnail">

              <?php the_post_thumbnail( 'blog-feed-image' ); ?>

            </div>
            <!--svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg-->
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
