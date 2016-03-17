<?php 
// [lead xclass="Optional Class(es)"] [/lead]
if(!function_exists('lead_shortcode')) {
	function lead_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'xclass' => '',
		), $atts ) );
		
		if($xclass != '') $xclass = ' '.$xclass;
		
		return '<span class="lead'.$xclass.'">'.do_shortcode($content).'</span>';
	}
	add_shortcode( 'lead', 'lead_shortcode' );
}

?>
