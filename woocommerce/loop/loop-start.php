<?php
/**
 * Product Loop Start
 *
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     Copycats/woocommerce
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div class="row products columns-<?php echo esc_attr( wc_get_loop_prop( 'columns' ) ); ?>">
