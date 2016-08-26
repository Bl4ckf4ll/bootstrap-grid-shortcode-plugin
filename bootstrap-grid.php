<?php
/* 
* Plugin name: Bootstrap Grid Shortcodes
* Version: 0.0.1
* Author: David Maravilla
*/

define('BGSDIR', plugin_dir_path(__FILE__));

function bgs_add_scripts () {
	wp_enqueue_style('bootstrap-grid', plugin_dir_url(__FILE__) . 'css/vendor/bootstrap.grid.min.css');
}

add_action('wp_enqueue_scripts', 'bgs_add_scripts');

include(BGSDIR . 'inc/shortcodes/grid.php');

remove_filter( 'the_content', 'wpautop' );
add_filter( 'the_content', 'wpautop' , 99 );
add_filter( 'the_content', 'shortcode_unautop', 100 );
?>