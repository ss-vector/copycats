<?php
/**
 *
 * Copycats wpse__form instance
 * @package Copycats
 */

class wpse__form {

    /**
     * Class constructor
     */
    public function __construct() {

        $this->define_hooks();
    }

    public function controller() {

        if( isset( $_POST['submit'] ) ) { // Submit button

            $full_name   = filter_input( INPUT_POST, 'full_name', FILTER_SANITIZE_STRING );
            $email       = filter_input( INPUT_POST, 'email', FILTER_SANITIZE_STRING | FILTER_SANITIZE_EMAIL );
            $comments    = filter_input( INPUT_POST, 'comments', FILTER_SANITIZE_STRING );

            // Send an email and redirect user to "Thank you" page.
        }
    }

    /**
     * Display form
     */
    public function display_form() {

        $full_name   = filter_input( INPUT_POST, 'full_name', FILTER_SANITIZE_STRING );
        $email       = filter_input( INPUT_POST, 'email', FILTER_SANITIZE_STRING | FILTER_SANITIZE_EMAIL );
        $comments    = filter_input( INPUT_POST, 'comments', FILTER_SANITIZE_STRING );

        // Default empty array
        // $accessories = ( $accessories === null ) ? array() : $accessories;

        $output = '';

        $output .= '<div class="form-control" method="post">';
        $output .= '    <div class="input-group mb-3">';
        $output .= '        ' . $this->display_text( 'full_name', 'Nombre', $full_name );
        $output .= '    </div>';
        $output .= '    <div class="input-group mb-3">';
        $output .= '        ' . $this->display_text( 'email', 'Correo', $email );
        $output .= '    </div>';
        $output .= '    <div class="input-group mb-3">';
        $output .= '        ' . $this->display_textarea( 'comments', 'comentarios', $comments );
        $output .= '    </div>';
        $output .= '    <div class="mb-3">';
        $output .= '        <input class="btn btn-primary" type="submit" name="submit" value="Submit" />';
        $output .= '    </div>';
        $output .= '</div>';

        return $output;
    }

    /**
     * Display text field
     */
    private function display_text( $name, $label, $value = '' ) {

        $output = '';

        $output .= '<span class="input-group-text">' . esc_html__( $label, 'copycats' ) . '</span>';
        $output .= '<input class="form-control" type="text" name="' . esc_attr( $name ) . '" value="' . esc_attr( $value ) . '">';

        return $output;
    }

    /**
     * Display textarea field
     */
    private function display_textarea( $name, $label, $value = '' ) {

        $output = '';

        $output .= '<span class="input-group-text"> ' . esc_html__( $label, 'copycats' ) . '</span>';
        $output .= '<textarea class="form-control" name="' . esc_attr( $name ) . '" >' . esc_html( $value ) . '</textarea>';

        return $output;
    }

    /**
     * Display radios field
     */

    /**
     * Display single checkbox field
     */


    /**
     * Display checkboxes field
     */


    /**
     * Display single checkbox field
     */


    /**
     * Get available colors
     */
    private function get_available_colors() {

        return array(
            'red' => 'Red',
            'blue' => 'Blue',
            'green' => 'Green',
        );
    }

    /**
     * Get available accessories
     */
    private function get_available_accessories() {

        return array(
            'case' => 'Case',
            'tempered_glass' => 'Tempered glass',
            'headphones' => 'Headphones',
        );
    }

    /**
     * Define hooks related to plugin
     */
    private function define_hooks() {

        /**
         * Add action to send email
         */
        add_action( 'wp', array( $this, 'controller' ) );

        /**
         * Add shortcode to display form
         */
        add_shortcode( 'contact', array( $this, 'display_form' ) );
    }
}

new wpse__form();
