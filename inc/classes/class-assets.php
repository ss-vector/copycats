<?php
/*
 *
 * Enqueue Theme assets
 *
 * @package Copycats Theme
 *
 */

namespace COPYCATS_THEME\Inc;

use COPYCATS_THEME\Inc\Traits\Singleton;

class Assets () {
  use Singleton;

  protected function __construct() {
    $this->setup_hooks();
  }

  protected function setup_hooks() {

  }
}
