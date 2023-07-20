<<?php
/**
 * Singleton concept
 *
 * @package Copycats
 *
 */

namespace COPYCATS_THEME\Inc\Traits;

trait Singleton {

    protected function __construct() {
    }

    final protected function __clone() {
    }

    final public static function get_instance() {

      static $instance = [];

      $called_class = get_called_class();

      if ( ! isset( $instance[ $called_class ] ) ) {
        
        $instance[  $called_class ] = new $called_class();

        do_action( sprintf( 'copycats_theme_init_%s', $called_class ) );
      }

      return $instance[ $called_class ];
    }
}
