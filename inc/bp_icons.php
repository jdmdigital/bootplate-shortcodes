<?php 
// [bpicon class="" type="span"]
// See Icon Reference: http://bootplate.jdmdigital.co/features/font-icons/
if(!function_exists('bpicon_shortcode')) {
	function icon_shortcode( $atts ) {
		extract( shortcode_atts( array(
			'type' => 'span',
			'class' => 'btn btn-default'
		), $atts ) );
		
		if($type == '' || strtolower($type) == 'span') {$type = 'span';}
		elseif(strtolower($type) == 'i') {$type = 'i';}
		else{$type = 'span';}
		
		return '<'.$type.' class="'.$class.'"></'.$type.'>';
		
	}
	add_shortcode( 'bpicon', 'bpicon_shortcode' );
}

?>
