  <div class="col">
    <div class="card shadow-sm">
      <div class="col-auto d-lg-block overflow-hidden">
        <div class="thumbnail-section">

        <?php if ( has_post_thumbnail() ): ?>

          <?php the_post_custom_thumbnail(
              get_the_ID(),
              'gallery_thumbnail',
              [
                'sizes' => '(max-width: 200px), 200px, 250px',
                'class' => 'gallery-thumbnail card-img-top z-3'
              ]
            );
          ?>

        <?php endif; ?>

        <span class="card-title fixed-title text-light">
          <h3 class="px-4 mb-0"><?php the_title(); ?></h3>
        </span>
      </div>

      <!--svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg-->
      <div class="card-body">
        <p class="card-text"><?php the_excerpt(); ?></p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary">
              <a href="<?php echo esc_url( get_permalink() ); ?>">Ver</a>
            </button>
            </div>
          <small class="text-body-secondary"><?php the_date(); ?></small>
        </div>
      </div>
    </div>
  </div>
</div>
