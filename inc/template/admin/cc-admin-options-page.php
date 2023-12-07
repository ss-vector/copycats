<h1>Copycats Theme Options</h1>
<?php settings_errors(); ?>
<h3>Main Configuration</h3>
	<?php
	/* @see copycats-admin-functions.php
	*/
	$layoutName = esc_attr(get_option( 'fb_link' ));
	?>
<div class="cp-wrapper">
	<p>Asigned as Layout Name: <span><?php echo $layoutName; ?></span></p>
	<span><?php _e( 'Fix admin template', 'copycats' ); ?></span>
</div>

	<form method="post" action="options.php">
		<?php 
					settings_fields( 'cc-social-links-group' );
		 			do_settings_sections( 'copycats_admin' );
		 			submit_button( 'Guardar' );
		?>
	</form>

<!-- Social Media Links -->
