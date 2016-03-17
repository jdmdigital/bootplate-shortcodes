<?php 
// [tweetable via="jdmdigital"] [/tweetable]
if(!function_exists('tweetable_shortcode')) {
	function tweetable_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'via' => 'jdmdigital',
		), $atts ) );
		$postid = get_the_ID();
		$permalink = get_permalink($postid);
		$title = get_the_title($postid);
		if(function_exists('wpbitly_get_shortlink')) {
			$shortlink = wpbitly_get_shortlink($permalink, $postid);
		} else {
			$shortlink = wp_get_shortlink($postid);
		}
		
		return '<a class="tweetable mini" href="https://twitter.com/share?text='. htmlentities($title).':&amp;url='. urlencode($shortlink).'&amp;via='.$via.'" title="Tweet This" rel="nofollow">'.do_shortcode($content).'</a>';
	}
	add_shortcode( 'tweetable', 'tweetable_shortcode' );
}
