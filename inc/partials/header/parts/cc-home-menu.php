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

              if ( ! $menu_item->menu_item_prent ) {
                ?>

                <li class="nav-item">
                  <a class="nav-link" href="#">New link</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle"

                </li>

            <?php
              }
            }
            ?>
        </ul>
        <?php
        }
        ?>
      <!-- Form -->
    </div>
