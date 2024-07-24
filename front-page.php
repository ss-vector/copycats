<?php get_header();
/**
 *
 * @package Copycats
 */
?>

<!-- TODO: Add about-us section. who we are?, what we do? -->

<?php

	get_template_part( 'template/sections/cc-main-slides' );

	get_template_part( 'template/sections/cc-recent-posts' );

 	get_template_part( 'template/sections/cc-featured-section' );

 	get_template_part( 'template/sections/cc-map-section' );

 	# get_template_part( 'inc/template/sections/cc-newsletter' );

?>

<?php get_footer(); ?>
