<?php

/**
 * Main theme engine setup
 *
 * @package Copycats
**/
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/* Define constants*/
if ( ! defined( 'COPYCATS_THEME_DIR' ) ) {
	define( 'COPYCATS_THEME_DIR', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'COPYCATS_THEME_URI' ) ) {
	define( 'COPYCATS_THEME_URI', untrailingslashit( get_template_directory_uri() ) );
}

define( 'COPYCATS_THEME_VERSION', '1.1.9' );
define( 'COPYCATS_SETTING', 'copycats-settings' );

require_once COPYCATS_THEME_DIR . '/inc/helpers/autoloader.php';
require_once COPYCATS_THEME_DIR . '/inc/helpers/template-tags.php';

require_once COPYCATS_THEME_DIR . '/inc/init.php';
require_once COPYCATS_THEME_DIR . '/inc/theme-support.php';
require_once COPYCATS_THEME_DIR . '/inc/template/admin/cc-admin-functions.php';

function copycats_get_theme_instance() {
	\COPYCATS_THEME\Inc\COPYCATS_THEME::get_instance();
}

copycats_get_theme_instance();

function copycats_woocommerce_account_content() {
	global $current_user;

	echo '<p>' . __( "Tested and working", "woocommerce") . '</p>';
}
