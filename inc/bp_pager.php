<?php 
// [pager next="" prev=""]
if(!function_exists('pager_shortcode')) {
	function pager_shortcode( $atts ) {
		extract( shortcode_atts( array(
			'next' => '#',
			'prev' => '#',
		), $atts ) );
		
		if($prev == '#' || $prev == ''){
			$disableprev = ' disabled';
		} else {
			$disableprev = '';
		}
		
		if($next == '#' || $next == ''){
			$disablenext = ' disabled';
		} else {
			$disablenext = '';
		}
		
		return '
			<ul class="pager margin-bottom">
				<li class="previous'.$disableprev.'"><a href="'.$prev.'"><span class="bp-left-open" aria-hidden="true"></span> Previous</a></li>
				<li class="next'.$disablenext.'"><a href="'.$next.'">Next <span class="bp-right-open" aria-hidden="true"></span></a></li>
			</ul>
		';

	}
	add_shortcode( 'pager', 'pager_shortcode' );
}

?>
