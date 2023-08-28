<?php 
/**
 * Lists of Products in Slider
 * 
 * @package Copycats
*/



if ( empty( $product ) || !$product->is_visible() ) {
    return;
}

# remake this in Js
function mini_cards_slide( $card ) {

    $args = array(
        'featured'    => true,
    );
    // Add function on template-tags
    $product_demo = wc_get_products( $args );

    $product_img = wp_get_attachment_url( $product_demo[ $card ]->get_image_id() );
    $product_title = '<h5>' . $product_demo[ $card ]->get_name() . '</h5>';
    $product_price = 0;

    $product_link = get_permalink( $product_demo[ $card ]->get_id() );

    $product_rt = '<section class="featured-img"><img src="' . $product_img . '" class="card-img-top" /></section>';
    $product_rt .= '<div class="featured p-3">';
    $product_rt .= $product_title;
    $product_rt .= '<a href="' . $product_link . '"class="btn cc-btn-primary">' . esc_html( 'Ver', 'copycats' ) . '</a>';
    $product_rt .= '<span class="featured price">S/ ' . $product_demo[ $card ]->get_price() . '</span>';
    $product_rt .= '</div>'; 

    echo $product_rt;

}
