jQuery(document).ready( function($) {

	var mediaUploader;

	$('#upload-button').click(function(e) {
		e.preventDefault();
		if ( mediaUploader ) {
			mediaUploader.open();
			return;
		}

		mediaUploader = wp.media.frames.file_frame = wp.media({
			title: 'Chose a Demo Picture',
			button: {
				text: 'Choose Picture'
			},
			multiple: false
		});
	});
});