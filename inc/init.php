<?php
/**
* Copycats main init file
* 
* @package Copycats
* 
*/
$theme_name = wp_get_theme( 'copycats' );

/**
 * Setup
 * 
 */
require get_template_directory() . '/inc/copycats-template-hooks.php';

require_once get_template_directory() . '/inc/functions/header-functions.php';
require_once get_template_directory() . '/template/template-tags/home.php';
