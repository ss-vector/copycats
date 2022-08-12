<?php 
	/**
 	* Copycats Admin Page Functions
 	* @package Copycats 
 	* 
	**/

function copycats_admin_page() {

	add_menu_page( 'Copycats Options Page', 'Copycats', 'manage_options', 'copycats_admin', 'copycats_theme_create_page', 'dashicons-edit-large', 110 );

	// Copycats submanu pages
	add_submenu_page( 'copycats_admin', 'Copycats Theme Settings','Settings', 'manage_options', 'copycats_theme_settings', 'copycats_theme_create_page' );
	add_submenu_page( 'copycats_admin', 'Copycats Options', 'General', 'manage_options', 'copycats_main_config', 'copycats_theme_settings_page' );
	// ...

	// Activate custom settings
	add_action( 'admin_init', 'copycats_custom_settings' );

}
add_action( 'admin_menu', 'copycats_admin_page', $priority = 10, $accepted_args = 1 );

function copycats_custom_settings() {
	// Register setting
	register_setting( 'copycats-settings-group', 'fb-link' );

	// Add settings section
	add_settings_section( 'copycats-layout-options', 'Layout Options', 'copycats_layout_options', 'copycats_admin' );

	// Adding settings fields
	add_settings_field( 'fb-link', 'Facebook', 'copycats_fb_link', 'copycats_admin', 'copycats-layout-options' );
}

// Copycats layout Options
function copycats_layout_options() {
	echo 'edit layout options experimental';
}

	function copycats_fb_link() {
		$fblink = esc_attr(get_option( 'fb_link' ));
		echo '<input type="text" name="fb_link" value="' . $fblink . '" placeholder="Paste link here">';
	}

// Theme Settings Page
function copycats_theme_settings_page() {
	echo '<h3>' . _e( 'Layout', 'copycatstheme' ) . '</h3>';
}

function copycats_theme_create_page() {
	//page generation function
	require_once( get_template_directory() . '/inc/template/admin/cc-admin-options-page.php' );
}