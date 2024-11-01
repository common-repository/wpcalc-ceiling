<?php
/**
 * @link              http://wpcalc.com/
 * @since             1.0
 * @package           Wpcalc_Ceiling
 *
 * @wordpress-plugin
 * Plugin Name:       Wpcalc Ceiling
 * Plugin URI:        http://wpcalc.com/en/stretch-ceiling-2/
 * Description:       Cost Calculator stretch ceiling.
 * Version:           1.0
 * Author:            Dimy4 Wpcalc
 * Author URI:        http://wpcalc.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wpcalc-ceiling
  */

if ( ! defined( 'ABSPATH' ) ) exit;


load_plugin_textdomain('wpcalc-ceiling', false, dirname(plugin_basename(__FILE__)) . '/languages/');

	
function activate_wpcalc_potolock() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/activator.php';
	
	}

function deactivate_wpcalc_potolock() {	
	require_once plugin_dir_path( __FILE__ ) . 'includes/deactivator.php';
	
}

register_activation_hook( __FILE__, 'activate_wpcalc_potolock' );

register_deactivation_hook( __FILE__, 'deactivate_wpcalc_potolock' );

require_once plugin_dir_path( __FILE__ ) . 'includes/data.php';

require_once plugin_dir_path( __FILE__ ) . 'admin/admin.php';

require_once plugin_dir_path( __FILE__ ) . 'public/public.php';





 







