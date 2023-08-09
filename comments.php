<div id="comments" class="comments-section">

  <?php if ( have_comments() ) : ?>

    <h2 class="comment-title">
      <?php
        printf(
          _nx(
            'Un comentario en "%2$s"',
            '%1$s comentarios en "%2$s"',
            get_comments_number(),
            'comments-title',
            'copycats'
          ),
          number_format_i18n( get_comments_number() ),
          '<span>' . get_the_title() . '</span>'
        );
      ?>
    </h2>

    <ol class="comment-list">
      <?php
  			wp_list_comments( array(
  				'style'       => 'ol',
  				'short_ping'  => true,
  				'avatar_size' => 74,
  			) );
			?>
    </ol>

      <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>

    <nav class="navigation comment-navigation" role="navigation">

      <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'copycats' ); ?></h1>
      <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'copycats' ) ); ?></div>
      <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'copycats' ) ); ?></div>
    </nav>
      <?php endif; // Check for comment navigation ?>

      <?php if ( ! comments_open() && get_comments_number() ) : ?>
        <p class="no-comments"><?php _e( 'Comments are closed.', 'aquila' ); ?></p>
      <?php endif; ?>

    <?php endif; // have_comments() ?>

    <?php comment_form(); ?>

</div>
