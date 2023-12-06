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

<div class="cp-wrapper">
	<form method="post" action="options.php">
		<?php settings_fields( 'copycats-settings-group' ); ?>
		<?php do_settings_sections( 'copycats_admin' ); ?>
		<?php submit_button(); ?>
	</form>
</div>
<!-- Social Media Links -->
