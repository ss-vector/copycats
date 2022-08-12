<h1>Copycats Theme Options</h1>
<?php settings_errors(); ?>
<h3>Main Configuration</h3>
	<?php 
	# -from: copycats-admin-functions.php
	$layoutName = esc_attr(get_option( 'layout_name' ));
	?>
<div class="cp-wrapper">
	<p>Asigned as Layout Name: <span><?php print $layoutName; ?></span></p>
	<span><?php _e( 'Fix admin template', 'copycats' ); ?></span>
</div>
<h3>Home slider Test Options</h3>
<div class="cp-wrapper">
	<form method="post" action="options.php">
		<?php settings_fields( 'copycats-settings-group' ); ?>
		<?php do_settings_sections( 'copycats_admin' ); ?>
		<?php submit_button(  ); ?>
	</form>
</div>
<!-- Social Media Links -->