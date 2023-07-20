<?php
/**
 *
 * Autoloader Function in Theme Setup
 *
 * @package Copycats
 * @version 1.2
 */

namespace COPYCATS_THEME\Inc\Helpers;

function autoloader( $resource = '' ) {
  $resource_path  = false;
  $namespace_root = 'COPYCATS_THEME\\'; # str|
  $resource       = trim( $resource, '\\' );

  if ( empty( $resource ) || strpos( $resource, '\\' ) === false || strpos( $resource, $namespace_root ) !== 0 ) {
    # not the right namespace, then quit
    return;
  }

  $resource = str_replace( $namespace_root, '', $resource ); # str_replace() https://www.php.net/manual/en/function.str-replace.php

  $path = explode(
    '\\',
    str_replace( '_', '-', strtolower( $resource ) )
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

    $resource_path = sprintf( '%s/inc/%s/%s.php', untrailingslashit( COPYCATS_THEME_DIR ), $directory, $file_name );

  }

  $is_valid_file = validate_file( $resource_path ); # Wordpress function

  if ( ! empty( $resource_path ) && file_exists( $resource_path ) && ( 0 === $is_valid_file || 2 === $is_valid_file ) ) {
    require_once( $resource_path );
  }

}

spl_autoload_register( 'COPYCATS_THEME\Inc\Helpers\autoloader' );
