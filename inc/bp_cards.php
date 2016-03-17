<?php 

// [card col="col-md-4" xclass="bootplate-card" imgsrc="" title="" subtitle="" link="" linktext="" openrow='y/n' closerow='y/n'] [/card] 
if(!function_exists('card_shortcode')) {
	function card_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'col' => 'col-md-4',
			'xclass' => 'bootplate-card',
			'imgsrc' => '',
			'title' => '',
			'subtitle' => '',
			'link' => '',
			'linktext' => '',
			'openrow' => 'n',
			'closerow' => 'n',
		), $atts ) );
		$imgplaceholder = get_template_directory_uri().'/img/325x200.png';
		$html = '';
		
		if(strtolower($openrow) == 'y' || strtolower($openrow) == 'yes') {
		$html .= '<div class="row"><!--row cards-->'."\r\n";
		}
		$html .= '	<div class="'.$col.'">'."\r\n";
		$html .= '		<div class="card '.$xclass.'">'."\r\n";
		if($imgsrc != '') {
		$html .= '			<div class="imglazy"><img class="card-img-top lazy" alt="Card Image" data-original="'.$imgsrc.'" src="'.$imgplaceholder.'" style=""></div>'."\r\n";
		}
		$html .= '			<div class="card-block">';
		if($title != '' && $subtitle == '') {
		$html .= '				<h4 class="card-title">'.$title.'</h4>'."\r\n";
		} elseif($title != '' && $subtitle != '') {
		$html .= '				<h4 class="card-title">'.$title.' <small>'.$subtitle.'</small></h4>'."\r\n";
		}
		$html .= '				<p class="card-text">'.do_shortcode($content).'</p>'."\r\n";
		if($link != '' && $linktext != '') {
		$html .= '				<a class="card-link" href="'.$link.'">'.$linktext.'</a>'."\r\n";
		}
		$html .= '			</div> <!--/.card-block-->'."\r\n";
		$html .= '		</div><!--/card-->'."\r\n";
		$html .= '	</div><!--/col-->'."\r\n";
		
		if(strtolower($closerow) == 'y' || strtolower($closerow) == 'yes') {
		$html .= '</div><!--/row cards-->'."\r\n";
		}
		return $html;
	}
	add_shortcode( 'card', 'card_shortcode' );
}
?>
