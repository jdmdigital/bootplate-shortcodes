<?php 
// [aside type="warning" html5='y'] [/aside]
if(!function_exists('aside_shortcode')) {
	function aside_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'type' => 'info',
			'html5' => 'y',
		), $atts ) );
		
		if(strtolower($html5) == 'y' || strtolower($html5) == 'yes') {
			return '<aside class="aside alert-'.$type.' role="alert">'.do_shortcode($content).'</aside>';
		} else {
			return '<div class="aside alert-'.$type.'" role="alert">'.do_shortcode($content).'</div>';
		}
	}
	add_shortcode( 'aside', 'aside_shortcode' );
}

?>
