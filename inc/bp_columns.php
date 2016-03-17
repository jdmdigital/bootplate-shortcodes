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

// [one_third_first xclass="col-md-4" openrow='y'] [/one_half] - Includes opening row
if(!function_exists('one_third_first_shortcode')) {
	function one_third_first_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'xclass' => 'col-md-4',
			'openrow' => 'y',
		), $atts ) );
		$html = '';
		if(strtolower($openrow) == 'y' || strtolower($openrow) == 'yes') {
			$html .= '<div class="row">';
		}
		$html .= '	<div class="'.$xclass.'">'.do_shortcode($content).'</div>';
		return $html;
	}
	add_shortcode( 'one_third_first', 'one_third_first_shortcode' );
}

// [one_third xclass="col-md-4"] [/one_half] - Includes opening row
if(!function_exists('one_third_shortcode')) {
	function one_third_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'xclass' => 'col-md-4',
		), $atts ) );
		$html = '';
		if(strtolower($openrow) == 'y' || strtolower($openrow) == 'yes') {
			$html .= '<div class="row">';
		}
		$html .= '	<div class="'.$xclass.'">'.do_shortcode($content).'</div>';
		return $html;
	}
	add_shortcode( 'one_third', 'one_third_shortcode' );
}

// [one_third_last xclass="col-md-4" openrow='y'] [/one_half_last] - closes opening row
if(!function_exists('one_third_last_shortcode')) {
	function one_third_last_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'xclass' => 'col-md-4',
			'openrow' => 'y',
		), $atts ) );
		$html = '';
		
		$html .= '	<div class="'.$xclass.'">'.do_shortcode($content).'</div>';
		if(strtolower($openrow) == 'y' || strtolower($openrow) == 'yes') {
			$html .= '</div><!--/row one_third_last-->';
		}
		return $html;
	}
	add_shortcode( 'one_third_last', 'one_third_last_shortcode' );
}

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

// [section class="bg-default" reopen="n/y"] [/section]
if(!function_exists('section_shortcode')) {
	function section_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'class' => 'bg-default',
			'reopen' => 'n',
		), $atts ) );
		$html = '</div></section>';
		
		$html .= '<section class="'.$class.'"><div class="container">'.do_shortcode($content).'</div></section>';
		if(strtolower($reopen) == 'y' || strtolower($reopen) == 'yes') {
			$html .= '<section><div class="container">';
		}
		return $html;
	}
	add_shortcode( 'section', 'section_shortcode' );
}

// [clearfix]
if(!function_exists('clearfix_shortcode')) {
	function clearfix_shortcode($atts) {
		return '<div class="clearfix"></div>';
	}
	add_shortcode( 'clearfix', 'clearfix_shortcode' );
}

//  [hr xclass="sep"]
if(!function_exists('hr_func')) {
	function hr_func( $atts ) {
		extract( shortcode_atts( array(
			'xclass' => '',
		), $atts ) );
	
		if($xclass != '') {
			return '<hr class="'.$xclass.'" />';
		} else {
			return '<hr />';
		}
	}
	add_shortcode( 'hr', 'hr_func' );
}
