<?php
if ( ! defined( 'ABSPATH' ) ) exit;

if( defined('DOING_AJAX') && DOING_AJAX ){
	add_action( 'wp_ajax_data_wpcalc_potolock', 'data_wpcalc_potolock' );
	add_action( 'wp_ajax_nopriv_data_wpcalc_potolock', 'data_wpcalc_potolock' );
}
function data_wpcalc_potolock() {
	$options_name = get_option('ceiling');
	wp_send_json( $options_name );
}	
	
?>