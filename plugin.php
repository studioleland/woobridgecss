<?php
/**
 * @wordpress-plugin
 * Plugin Name:       WooCreative Bridge CSS
 * Plugin URI:        http://woo-creative.com/
 * Description:       A plugin.
 * Version:           1.0.0
 * Author:            Leland Zaremba
 * Author URI:        http://woo-creative.com/
 * License:           MIT
**/
 
add_action( 'wp_enqueue_scripts', 'woo_add_stylesheet' );

function woo_add_stylesheet() {
  wp_enqueue_style( 'prefix-style', plugins_url('style.css', __FILE__) );
}
?>
