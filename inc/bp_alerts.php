<?php 
// [alert type="warning" dismiss="n"] [/alert]
if(!function_exists('alert_shortcode')) {
	function alert_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'type' => 'warning',
			'dismiss' => 'n',
		), $atts ) );
		
		if($dismiss == 'y') {
			return '<div class="alert alert-'.$type.' alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'.do_shortcode($content).'</div>';
		} else {
			return '<div class="alert alert-'.$type.'" role="alert">'.do_shortcode($content).'</div>';
		}
	}
	add_shortcode( 'alert', 'alert_shortcode' );
}

?>
