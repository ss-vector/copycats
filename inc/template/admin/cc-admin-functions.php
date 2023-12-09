<?php
	/**
 	* Copycats Admin Page Functions
 	* @package Copycats
 	*
	**/

function copycats_admin_page() {

	add_menu_page(
		__( 'Copycats Options Page', 'copycats' ),
		'Copycats',
		'manage_options',
		'copycats_admin',
		'copycats_theme_create_page',
		'dashicons-edit-large',
		110 );

	// Copycats submenu pages
	add_submenu_page( 'copycats_admin', 'Copycats Theme Settings','Settings', 'manage_options', 'copycats_theme_settings', 'copycats_theme_create_page' );
	add_submenu_page( 'copycats_admin', 'Copycats Options', 'General', 'manage_options', 'copycats_main_config', 'copycats_theme_settings_page' );
	// ...

}
add_action( 'admin_menu', 'copycats_admin_page', $priority = 10, $accepted_args = 1 );

// Activate custom settings
add_action( 'admin_init', 'copycats_custom_settings' );

function copycats_custom_settings() {
	// TODO: Find a better name for this option
	$option_name = 'copycats_various_options';

	$option_values = get_option( $option_name );

	$default_values = array(
		'slides_quantity' => 3,
		'social_sites'	=> array(
			'facebook',
			'Twitter',
			'Pinterest'
		)
	);

	$data = shortcode_atts( $default_values, $option_values );

	// Add settings section
	add_settings_section(
		'copycats-layout-options',
		'Layout Options',
		'copycats_layout_options',
		'copycats_admin' );

	add_settings_section(
		'copycats-slides-section',
		'Main Slider Section',
		'copycats_slides_section',
		'copycats_admin' );

	// Adding settings fields
	add_settings_field(
		'site_link',
		'Facebook',
		'copycats_textbox_callback',
		'copycats_admin',
		'copycats-layout-options',
		array(
			'social_site_link'
		)
	 );

	 add_settings_field(
		 'cc_slider_title',
		 'Main Slider Title',
		 'copycats_textbox_callback',
		 'copycats_admin',
		 'copycats-layout-options',
		 array(
			 'cc_slider_title'
		 )
		);

	add_settings_field(
		'cc_slider_link',
		'Main Slider Link',
		'copycats_textbox_callback',
		'copycats_admin',
		'copycats-layout-options',
		array(
			'cc_slider_link'
		)
	);

	add_settings_field(
		'cc_slider_image',
		'Main Slider Image',
		'copycats_textbox_callback',
		'copycats_admin',
		'copycats-layout-options',
		array(
			'cc_slider_image'
		)
	);
	// Experimental
	add_settings_field(
		'cc_section_field',
		'Number of slides',
		'copycats_slides_options_callback',
		'copycats_admin',
		'copycats-slides-section',
		array(
			'label_for' 	=> 'cc_slides_quantity',
			'name'				=> 'slides_quantity',
			'value'				=> esc_attr( $data['slides_quantity'] ),
			'option_name'	=> $option_name
		)
	);

	// Register setting
	register_setting( 'cc-social-links-group', 'social_site_link', 'esc_attr' );
	register_setting( 'cc-social-links-group', 'cc_slider_title', 'esc_attr' );
	register_setting( 'cc-social-links-group', 'cc_slider_link', 'esc_attr' );
	register_setting( 'cc-social-links-group', 'cc_slider_image', 'esc_attr' );

	register_setting( 'cc-options-group', $option_name );

}

// Copycats layout Options
function copycats_layout_options() {
	echo '	<h3>Social Link Options</h3>';
		echo '<p>Edit layout options experimental</p>';
}

function copycats_slides_section() {
	print '<p>Nice text area</p>';
}

function copycats_textbox_callback( $args ) {
	$option = get_option($args[0]);
	echo '<input type="text" id="'. $args[0] .'" name="'. $args[0] .'" value="' . $option . '" />';
}
// Experimental example for slides
function copycats_slides_options_callback( $args ) {

    printf(
        '<input name="%1$s[%2$s]" id="%3$s" value="%4$s" class="regular-text">',
        $args['option_name'],
        $args['name'],
        $args['label_for'],
        $args['value']
    );
}

// Creating the Copycats Theme Settings Page
function copycats_theme_settings_page() {
	echo '<h3>' . _e( 'Layout', 'copycats' ) . '</h3>';
}

function copycats_theme_create_page() {
	//page generation function
	require_once( get_template_directory() . '/inc/template/admin/cc-admin-options-page.php' );
}
