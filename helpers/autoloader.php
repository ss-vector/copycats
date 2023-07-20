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

  $directory = '';
  $file_name = '';

  if ( 'inc' === $path[0] ) {

    switch ( $path[1] ) {
      case 'traits':
            $directory = 'traits';
            $file_name = sprintf( 'trait-%s', trim( strtolower( $path[2] ) ) );
            break;
      case 'widgets':
      case 'blocks':
            if ( ! empty( $path[2] ) ) {
                  $directory = sprintf( 'classes/%s', $path[1] );
                  $file_name = sprintf( 'class-%s', trim( strtolower( $path[2] ) ) );
                  break;
            }
      default:
            $directory = 'classes';
            $file_name = sprintf( 'class-%s', trim( strtolower( $path[1] ) ) );
            break;
    }

    $resource_path = sprintf( '%s/inc/%s/%s.php', untrailingslashit( COPYCATS_THEME_DIR ) );
  }

}
?>
