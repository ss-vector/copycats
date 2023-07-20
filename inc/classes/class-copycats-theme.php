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
		/*
		* Actions
		*/

		add_action( 'after_setup_teme', [ $this, 'setup_theme' ] );

	}

	public function setup_theme() {

		add_theme_support( 'title-tag' );


	}
}
