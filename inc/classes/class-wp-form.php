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

        $output .= '<form method="post">';
        $output .= '    <p>';
        $output .= '        ' . $this->display_text( 'full_name', 'Nombre', $full_name );
        $output .= '    </p>';
        $output .= '    <p>';
        $output .= '        ' . $this->display_text( 'email', 'Correo', $email );
        $output .= '    </p>';
        $output .= '    <p>';
        $output .= '        ' . $this->display_textarea( 'comments', 'comentarios', $comments );
        $output .= '    </p>';
        $output .= '    <p>';
        $output .= '        <input class="btn btn-primary" type="submit" name="submit" value="Submit" />';
        $output .= '    </p>';
        $output .= '</form>';

        return $output;
    }

    /**
     * Display text field
     */
    private function display_text( $name, $label, $value = '' ) {

        $output = '';

        $output .= '<label>' . esc_html__( $label, 'copycats' ) . '</label>';
        $output .= '<input type="text" name="' . esc_attr( $name ) . '" value="' . esc_attr( $value ) . '">';

        return $output;
    }

    /**
     * Display textarea field
     */
    private function display_textarea( $name, $label, $value = '' ) {

        $output = '';

        $output .= '<label> ' . esc_html__( $label, 'wpse_299521' ) . '</label>';
        $output .= '<textarea name="' . esc_attr( $name ) . '" >' . esc_html( $value ) . '</textarea>';

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
