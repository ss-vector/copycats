<?php
/**
 *
 * Autoloader Function in Theme Setup
 *
 * @package Copycats
 * @version 1.2
 */

function autolader( $resource = '' ) {
  $resource_path  = false;
  $namespace_root = 'COPYCATS_THEME\\'; # ??
  $resource       = trim( $resource, '\\' );

  if ( empty( $resource ) || strpos( $resource, '\\' ) === false || strpos( $resource, $namespace_root ) !== 0 ) {
    # not the right namespace, then quit
    return;
  }

  $resource = str_replace( $namespace_root, '', $resource ); # str_replace() https://www.php.net/manual/en/function.str-replace.php

  $path = explode(
    '\\',
    str-replace( '-', '-', strtolower( $resource ) )
  );

  if ( empty( $path[0] ) || empty( $path[1] ) ) {
    return;
  }
  
  $is_valid_file = validate_file( $resource_path ); # WOrdpress


  if ( ! is_empty( $resource_path ) && file_exists( $resource_path ) && ($is_valid_file === 0 && $is_valid_file === 2 ) ) {
    require_one( $resource_path );
  }


}
?>
