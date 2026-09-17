<?php get_header();
/**
 *
 * @package Copycats
 */
?>

<!-- TODO: Add about-us section. who we are?, what we do? -->

<?php

	get_template_part( 'template/sections/cc-main-slides' );

	get_template_part( 'template/sections/cc-featured-section' );

	# get_template_part( 'template/sections/cc-recent-posts' );

	# Trust strip (UI upgrade): quick reassurance row under the posts.
	get_template_part( 'template/sections/contact-section' );

	get_template_part( 'template/sections/about-section' );

	get_template_part( 'template/sections/cc-map-section' );

?>

<?php get_footer(); ?>
