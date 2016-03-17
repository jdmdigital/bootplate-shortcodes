<?php 

// [one_fourth_first xclass="col-md-3" openrow='y'] [/one_half] - Includes opening row
if(!function_exists('one_fourth_first_shortcode')) {
	function one_fourth_first_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'xclass' => 'col-md-3',
			'openrow' => 'y',
		), $atts ) );
		$html = '';
		if(strtolower($openrow) == 'y' || strtolower($openrow) == 'yes') {
			$html .= '<div class="row">';
		}
		$html .= '	<div class="'.$xclass.'">'.do_shortcode($content).'</div>';
		return $html;
	}
	add_shortcode( 'one_fourth_first', 'one_fourth_first_shortcode' );
}

// [one_fourth xclass="col-md-3"] [/one_half] - Includes opening row
if(!function_exists('one_fourth_shortcode')) {
	function one_fourth_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'xclass' => 'col-md-3',
		), $atts ) );
		$html = '';
		if(strtolower($openrow) == 'y' || strtolower($openrow) == 'yes') {
			$html .= '<div class="row">';
		}
		$html .= '	<div class="'.$xclass.'">'.do_shortcode($content).'</div>';
		return $html;
	}
	add_shortcode( 'one_fourth', 'one_fourth_shortcode' );
}

// [one_fourth_last xclass="col-md-3" openrow='y'] [/one_half_last] - closes opening row
if(!function_exists('one_fourth_last_shortcode')) {
	function one_fourth_last_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'xclass' => 'col-md-3',
			'openrow' => 'y',
		), $atts ) );
		$html = '';
		
		$html .= '	<div class="'.$xclass.'">'.do_shortcode($content).'</div>';
		if(strtolower($openrow) == 'y' || strtolower($openrow) == 'yes') {
			$html .= '</div><!--/row one_third_last-->';
		}
		return $html;
	}
	add_shortcode( 'one_fourth_last', 'one_fourth_last_shortcode' );
}

?>
