<?php
	/**
	 * 
	 * Copycats Template Header
	 * 
	 * @package Copycats 
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

	<body <?php body_class('copydemo'); ?>>
		<?php wp_body_open(); ?>
		<div id="page" class="site">
			<div class="main-wrapper">
				<?php get_template_part('inc/partials/header/header_layout'); ?>
				<!-- Main Slider -->
				<?php if(is_front_page() ) : ?>
					<?php get_template_part( 'inc/template/partials/header/featured' ); ?>
					<!-- Insert container to display featured boxes -->
				<?php endif; ?>
				<!-- Main containers -->
				<div class="container-fluid site-content">
