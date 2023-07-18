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


}
?>
