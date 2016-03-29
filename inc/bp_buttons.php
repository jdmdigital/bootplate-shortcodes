<?php 
// [btn classes="btn-default" type="submit, reset, button, link (default)"] [/btn]
if(!function_exists('btn_shortcode')) {
	function btn_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'type' => 'link',
			'classes' => 'btn btn-default',
			'id' => '',
			'btnurl' => ''
		), $atts ) );
		$classes = 'btn '.$classes;
		
		if($id != '') {$btnid = true;} else {$btnid = false;}
		if(strtolower($type) == 'button' || strtolower($type) == 'submit' || strtolower($type) == 'reset') { $btntype = true; } else {$btntype = false;}
		if(!$btntype && $btnurl == '') {$btnurl = get_home_url(); }
		
		if($btntype) {
			if($btnid) {
				return '<button id="'.$id.'" type="'.strtolower($type).'" class="'.$classes.'">'.do_shortcode($content).'</button>';
			} else {
				return '<button type="'.strtolower($type).'" class="'.$classes.'">'.do_shortcode($content).'</button>';
			}
		} else {
			// Default to button type == link
			if($btnid) {
				return '<a href="'.$btnurl.'" id="'.$id.'" class="'.$classes.'" role="button">'.do_shortcode($content).'</a>';
			} else {
				return '<a href="'.$btnurl.'" class="'.$classes.'" role="button">'.do_shortcode($content).'</a>';
			}
		}
	}
	add_shortcode( 'btn', 'btn_shortcode' );
}

?>
