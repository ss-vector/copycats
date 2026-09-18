<?php 
/**
 * Copycats Main Page Template
 * 
 * @package Copycats
 * @since 1.0
 */

get_header(); 
?>


<div class="container page-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="single_post_layout">
                <article>
                    <?php if( have_posts() ):
                            while( have_posts() ): the_post(); ?>
                                <h1 class="blog-entry-title"><?php the_title(); ?></h1>
                                <?php the_content(); ?>
                            <?php endwhile; ?>
                <?php endif; ?>
                </article>    
            </div>
    </div>
</div>


<?php get_footer(); ?>

