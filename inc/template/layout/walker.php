<?php
/**
 * Nav Menu API: Walker_Nav_Menu class
 *
 * @package Copycats
 * @subpackage Nav_Menus
 * @since 
 */

/**
 * 
 *
 * @since 
 * 
 * @see Walker
 */
class copycats_Nav_Menu extends Walker {
    /**
     * What the class handles.
     *
     * @since 3.0.0
     * @var string
     *
     * @see
     */

    public function start_lvl( &$output, $depth = 0, $args = null ) {
       
    // ....
    }
    public function end_lvl( &$output, $depth = 0, $args = null ) {
        
    // ....
    }
    public function start_el( &$output, $data_object, $depth = 0, $args = [], $id = 0 ) {
       
    /**
     * @link https://www.php.net/manual/es/function.implode.php
     *
        $output .= "<li class='" . implode( " ", $item->classes ) . "'>";

        if ( $item->url && $item->url != '#' ) {
            $output .= '<a href="' . $item->url . '">';
        }else {
            $output .= '<span>';
        }

        $output .= $item->title;

        if ( $item->url &&  $item->url != '#' ) {
            $output .= '</a>';
        } else {
            $output .= '</span>';
        }
    */
    }
    
    public function end_el( &$output, $data_object, $depth = 0, $args = null ) {

    // ....
    }

}