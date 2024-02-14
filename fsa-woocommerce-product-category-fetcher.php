<?php

/**
 * Plugin Name:       Primary Plugin Boiler Plate
 * Plugin URI:        https://themuzammil.com/
 * Description:       Connects with the SolarEdge scrape
 * Version:           1.0.0
 * Requires at least: 5.5
 * Requires PHP:      7.2
 * Author:            Muzammil Ahmed
 * Author URI:        https://themuzammil.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

/**
 * Direct access protection
 */
defined('ABSPATH') or die('This path is not accessable');
/**
 * Include js and css files
 */
function FWPCF_includes_resources(){
    $plugin_url = plugin_dir_url( __FILE__ );
    //plugin styles
    wp_enqueue_style( 'FWPCF-styles', plugins_url( 'assets/css/styles.css', __FILE__ ));
    
    //plugin scripts
    wp_enqueue_script( 'FWPCF-script', plugins_url( 'assets/js/script.js', __FILE__ ), array(),'1.1.0',true);
    

 }
 add_action( 'wp_enqueue_scripts', 'FWPCF_includes_resources' );

function FWPCF_includes_admin_resources(){
    //plugin admin script
    wp_enqueue_script( 'FWPCF-admin-js', plugins_url( 'assets/js/admin.js', __FILE__ ), array(),'1.0.0',true);
}

 add_action( 'admin_enqueue_scripts', 'FWPCF_includes_admin_resources' );

/**
 * Functionality Goes Here
 */


?>