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
require get_template_directory() . '/inc/copycats-template-functions.php';
