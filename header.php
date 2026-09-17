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
		<link rel="preload" as="font" src="https://srv470-files.hstgr.io/b89c85571420c9af/files/public_html/assets/jost-bold.woff2" >
	</head>

	<body <?php body_class('copycats'); ?>>
		<?php 
			wp_body_open();
			do_action( 'cc_tags_html' );
		?>
		<div id="page" class="site">
			<div class="main-wrapper">
			
				<?php get_template_part('inc/partials/header/header_layout'); ?>

				<!-- TODO: Main Slider -->

				<!-- Main container -->
				<div class="site-content">
