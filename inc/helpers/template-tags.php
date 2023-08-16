<?php
/*
  * Copycats Template Tags
  *
  *
*/

	# wp_register_style( 'swiper_bundle', COPYCATS_THEME_URI . '/plugins/swiper/swiper-bundle.min.css', false, '6.7.5' ,'all' );

function get_post_custom_thumbnail( $post_id, $size = 'blog-thumbnail', $additional_attributes = [] ) {
  $custom_thumbnail = '';

  if ( null === $post_id ) {
    $post_id = get_the_ID();
  }

  if ( has_post_thumbnail( $post_id ) ) {
    $default_attributes = [
      'loading' => 'lazy'
    ];

    $attributes = array_merge( $additional_attributes, $default_attributes );

    $custom_thumbnail = wp_get_attachment_image(
      get_post_thumbnail_id( $post_id ),
      $size,
      false,
      $attributes
    );
  }

return $custom_thumbnail;

}

/**
* Renders Custom Thumbnail with Lazy Load.
*
* @param int    $post_id               Post ID.
* @param string $size                  The registered image size.
* @param array  $additional_attributes Additional attributes.
*/
function the_post_custom_thumbnail( $post_id, $size = 'blog-thumbnail', $additional_attributes = [] ) {
  echo get_post_custom_thumbnail( $post_id, $size, $additional_attributes );
}

function post_image_sizes($sizes){
    $custom_sizes = array(
        'gallery_thumbnail
        ' => 'Grey Article'
    );
    return array_merge( $sizes, $custom_sizes );
}
add_filter('image_size_names_choose', 'post_image_sizes');


 ?>
