<?php
/**
 *
 * Copycats Customizer Options
 * @package Copycats
 */

namespace COPYCATS_THEME\Inc;

use COPYCATS_THEME\Inc\Traits\Singleton;

if ( ! class_exists( 'CopycatsCustomizer' ) ) {

  class CopycatsCustomizer {

    use Singleton;

    protected function __construct() {

      $this->setup_hooks();
    }

    protected function setup_hooks() {

      add_action( 'customize_register', [ $this, 'copycats_customize_section' ] );

    }

    public function copycats_customize_section( \WP_Customize_Manager $wp_customize ) {

      $main_section_id = 'copycats_custom_section';

      // First add a Section Panel
      $wp_customize->add_section(
        $main_section_id,
        [
          'title'       => esc_html__( 'Copycats Section', 'copycats' ),
          'description' => esc_html__( 'Edit slider images', 'copycats' )
        ]
      );

      // Add array for slide captions
      $slide_captions = [
        'Slide One'   => 'slide_one',
        'Slide Two'   => 'slide_two',
        'Slide Three' => 'slide_three'
      ];

      foreach ( $slide_captions as $slide_label => $slide_name ) {
        $setting_id = sprintf( 'copycats_%s', $slide_name );

        // Inside the foreach lets add settings for each slide.
        $wp_customize->add_setting( $setting_id );

        // Also lets add a control.
        $wp_customize->add_control(
          new \WP_Customize_Image_Control(
              $wp_customize,
              $setting_id,
              [
                'label'     => esc_html__( $slide_label, 'copycats' ),
                'section'   => $main_section_id,
                'settings'  => $setting_id
              ]
            )
          );
      }

    }
  }
}
