<?php
 /**
  *
  * @package Copycats
  *
  */

namespace COPYCATS_THEME\Inc;

use COPYCATS_THEME\Inc\Traits\Singleton;

class COPYCATS_THEME {
	use Singleton;

	protected function __construct() {

    //Load classes
    Assets::get_instance();

    $this->setup_hooks();

	}

	protected function setup_hooks() {

	}

	public function setup_theme() {

	}
}
