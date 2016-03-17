<?php 
// [antispam xclass=""]client@clienturl.com[/antispam]
if(!function_exists('jdm_antispam_shortcode')) {
	function jdm_antispam_shortcode($atts, $content= null) {
		extract( shortcode_atts( array(
			'xclass' => '',
		), $atts ) );
		if ( ! is_email( $content ) ) {
			return;
		}
		if($xclass != '') {
			return '<a href="mailto:' . antispambot( $content ) . '" class="'.$xclass.'">' . antispambot( $content ) . '</a>';
		} else {
			return '<a href="mailto:' . antispambot( $content ) . '">' . antispambot( $content ) . '</a>';
		}
	}
	add_shortcode( 'antispam', 'jdm_antispam_shortcode' );
}

?>
