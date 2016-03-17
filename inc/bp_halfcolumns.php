<?php 
// [one_half xclass="col-md-6" openrow='y'] [/one_half] - Includes opening row
if(!function_exists('one_half_shortcode')) {
	function one_half_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'xclass' => 'col-md-6',
			'openrow' => 'y',
		), $atts ) );
		$html = '';
		if(strtolower($openrow) == 'y' || strtolower($openrow) == 'yes') {
			$html .= '<div class="row">';
		}
		$html .= '	<div class="'.$xclass.'">'.do_shortcode($content).'</div>';
		return $html;
	}
	add_shortcode( 'one_half', 'one_half_shortcode' );
}

// [one_half_last xclass="col-md-6" openrow='y'] [/one_half_last] - closes opening row
if(!function_exists('one_half_last_shortcode')) {
	function one_half_last_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'xclass' => 'col-md-6',
			'openrow' => 'y',
		), $atts ) );
		$html = '';
		
		$html .= '	<div class="'.$xclass.'">'.do_shortcode($content).'</div>';
		if(strtolower($openrow) == 'y' || strtolower($openrow) == 'yes') {
			$html .= '</div><!--/row one_half_last-->';
		}
		return $html;
	}
	add_shortcode( 'one_half_last', 'one_half_last_shortcode' );
}

?>
