<?php

function bgs_row ($atts, $content = null) {
	$atts = shortcode_atts(array(
		'styles' => '',
		'el' => 'div'
	), $atts, 'bgs_row');

	return '<' . $atts['el'] . ' class="row" style="'. $atts['styles'] .'">' . do_shortcode( $content ) . '</' . $atts['el'] . '>';
}

add_shortcode('bgs_row', 'bgs_row');

function bgs_column ($atts, $content = null) {
	$atts = shortcode_atts(array(
		'size' => 'xs-12',
		'el' => 'div',
		'styles' => ''
	), $atts, 'bgs_grid');

	return '<' . $atts['el'] . ' class="col-' . $atts['size'] . '" style="'. $atts['styles'] .'">' . do_shortcode( $content ) . '</' . $atts['el'] . '>';
}

add_shortcode('bgs_column', 'bgs_column');

for ($i=0; $i < 10; $i++) { 
	add_shortcode('bgs_column_'.$i, 'bgs_column');
}

function bgs_container ($atts, $content = null) {
		$atts = shortcode_atts(array(
		'type' =>  'container',
		'styles' => '',
		'el' => 'div'
	), $atts, 'bgs_container');

	return '<' . $atts['el'] . ' class="'. $atts['type'] .' style="'. $atts['styles'] .'">' . do_shortcode( $content ) . '</' . $atts['el'] . '>';
}

add_shortcode('bgs_container', 'bgs_container');