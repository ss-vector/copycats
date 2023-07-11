<?php
/**
 * 
 * @package Copycats
 * 
 * Copycats Template Functions
 */
require_once get_template_directory() . '/inc/functions/header.php';
require_once get_template_directory() . '/inc/template-tags/home.php';


# Footer Link Functions
function copycats_social_media_links() {
	// Retrieve Link Options from: copycats-admin-functions
	$fblink = esc_attr(get_option( 'fb_link' ));
	# $instalink = esc_attr(get_option( 'instagram_link' ));
	$a_link = '<a href="' . $fblink . '" target="_blank"><i class="fa-brands fa-facebook fa-xl">' . '</i></a>';

	echo $a_link;

}
add_action('copycats_footer_social_block', 'copycats_social_media_links', 10 );