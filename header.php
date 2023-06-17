<?php
	/**
	 * 
	 * Copycats Template Header
	 * 
	 * @package Copycats 
	 * @since 1.0
	*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php bloginfo( 'title' ); ?></title>

		<?php wp_head(); ?>

	</head>

	<body <?php body_class('copycats'); ?>>
		<?php wp_body_open(); ?>
		<div id="page" class="site">
			<div class="main-wrapper">
			
				<?php get_template_part('inc/partials/header/header_layout'); ?>

				<!-- TODO: Main Slider -->

				<!-- Main container -->
				<div class="page-content site-content">
