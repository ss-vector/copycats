<?php
/*
 *
 * @subpackage Main Menu
 */

  $menu_class = \Copycats_Theme\Inc\Menus::get_instance();
  $header_menu_id = $menu_class->get_menu_id( 'primary-home-menu' );

  $header_menus = wp_get_nav_menu_items( $header_menu_id );

?>
    <!-- TODO: change id name -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <?php if ( ! empty( $header_menus ) && is_array() ) {
      ?>
        
        <ul class="navbar-nav mr-auto">
          <?php
            foreach ( $header_menus as $menu_item ) {

              if ( ! $menu_item->menu_item_parent ) {
                $child_menu_items = $menu_class->get_child_menu_items( $header_menus, $menu_item->ID );
                $has_children     = ! empty( $child_menu_items ) && is_array( $child_menu_items );
                $link_target      = ! empty( $menu_item->target ) && '_blank' === $menu_item->target ? '_blank' : '_self';

                if ( ! $has_children ) {
                  ?>

                  <li class="nav-item">
                    <a class="nav-link"
                       href="<?php echo esc_url( $menu_item->url ); ?>">
   
                      <?php echo esc_html( $menu_item->title );  ?>

                    </a>
                  </li>

                <?php 
                } else {
                  ?>
                  
                  <li class="nav-item dropdown">
                    <a  class="nav-link dropdown-toggle" 
                        href="<?php esc_url( $child_menu_item->url ); ?>" 
                        role="button" 
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        target="<?php esc_html( $link_target ); ?>"
                        title="<?php esc_attr( $menu_item->title ); ?>" >

                      <?php esc_html( $menu_item->title ); ?>

                    </a>
                  </li>

                <?php
                }
              }
            }
            ?>
        </ul>
        <?php
        }
        ?>
      <!-- Form -->
    </div>
