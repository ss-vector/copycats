<?php
	/**
	 * 
	 * @package Copycats
	 * Copycats Template Functions
	 * **/
if ( !function_exists( 'copycats_site_branding' ) ) {

	function copycats_site_branding() {
		?>
		<div class="site-branding">
		 <?php copycats_brand_logo(); ?>
		</div>
		<?php
	}
}
add_action( 'copycats_header', 'copycats_site_branding', 10 );

function copycats_brand_logo( $echo = true ) {
	if( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
		$logo = get_custom_logo();
		$html = is_home() ? '<span class="logo">' . $logo . '</span>': $logo;
	} else {
		# Please edit this later!
		$html = 'No logo defined';
	}

	if ( ! $echo ) {
		return $html;
	}

	echo $html;
}

# Footer Link Functions
function copycats_social_media_links() {
	// Retrieve Link Options from: copycats-admin-functions
	$fblink = esc_attr(get_option( 'fb_link' ));
	# $instalink = esc_attr(get_option( 'instagram_link' ));
	$a_link = '<a href="' . $fblink . '" target="_blank"><i class="fa-brands fa-facebook fa-xl">' . '</i></a>';

	echo $a_link;

}
add_action('copycats_footer_social_block', 'copycats_social_media_links', 10 );