<div id="comments" class="comments-section">

  <?php if ( have_comments() ) : ?>

    <h2 class="comment-title">
      <?php
        printf(
          _nx(
            single: 'Un comentario en "%2$s"',
            plural: '%1$s comentarios en "%2$s"',
            get_comments_number(),
            context: 'comments-title',
            domain: 'copycats'
          ),
          ...values:number_format_i18n( get_comments_number() ),
          '<span> . get_the_title() . </span>'
        );
      ?>

    </h2>

</div>
