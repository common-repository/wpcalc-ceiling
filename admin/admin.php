<?php
if ( ! defined( 'ABSPATH' ) ) exit;

		
	function add_global_wpcalc_potolock_options() {
		add_options_page('Wpc Ceiling', 'Wpc Ceiling', 'manage_options', 'wpcalcpotolock','global_wpcalc_potolock_options');
	}
	
	function global_wpcalc_potolock_options() {	
		include_once( 'partials/display.php' );
		
	}	
	
	add_action('admin_menu', 'add_global_wpcalc_potolock_options');


	
