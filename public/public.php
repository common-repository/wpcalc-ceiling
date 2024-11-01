<?php
if ( ! defined( 'ABSPATH' ) ) exit;
    function shortcode_ceiling_calc() { 
		wp_enqueue_script( 'wpcalc-ceiling-calc', plugins_url( 'js/calc.js', __FILE__ ));
		wp_localize_script( 'wpcalc-ceiling-calc', 'data_potolock', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );		
		wp_enqueue_style ( 'wpcalc-ceiling-style', plugins_url( 'css/style.css', __FILE__ ));
		ob_start();
		include_once( 'partials/page-calc.php' );				
		$output_string=ob_get_contents();
		ob_end_clean();  
		return $output_string;
		}
	add_shortcode( 'wpcalc-ceiling', 'shortcode_ceiling_calc' ); 
