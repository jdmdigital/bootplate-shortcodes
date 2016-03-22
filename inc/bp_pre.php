<?php 
// [pre] [/pre]
if(!function_exists('pre_shortcode')) {
	function pre_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'xclass' => '',
		), $atts ) );
		
		return '<pre>'.do_shortcode($content).'</pre>';
	}
	add_shortcode( 'pre', 'pre_shortcode' );
}
