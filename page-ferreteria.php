<?php
/**
 * Hardware Store Category Page
 *
 * @package Copycats
 * @since 7.80
 *
 */
get_header();
?>

  <div class="container page-content">
    <div class="row">
      <h2 class=""><?php echo get_the_title(); ?></h2>
    </div>

    <div class="test-card">
      <div class="text-conainer">

        <?php

        // Example: Retrieve all published simple products
        $products = wc_get_products( array(
            'status' => 'publish',           // Only published products
            'type'   => 'simple',            // Product type (e.g., 'simple', 'variable', 'booking')
            'limit'  => 10,                  // Limit to 10 products
            'orderby' => 'date',
            'order'  => 'DESC',
        ) );


        foreach ( $products as $product ) {
            $imageId = $product->get_image_id();
            $image_url = wp_get_attachment_image_url( $image_id, 'full' );

            ?>
          
              <div class="row">
                <div class="col-sm-6">
                  <?php
                  echo 'ID: ' . $product->get_id() . '<br>';
                  echo 'Name: ' . $product->get_name() . '<br>';
                  echo 'Price: ' . $product->get_price() . '<br>';
                  echo 'ImageID: ' . $imageId . '<br>';
                  echo $product->get_image( 'woocommerce_thumbnail' );
                  ?>
                </div>
            </div>      
        <?php
        } 

        ?>
    </div>
  </div>
</div>


<?php get_footer(); ?>
