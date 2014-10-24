<?php
	/*
function excerpt_read_more_link($output) {
	 global $post;
	 return $output . '<a href="'. get_permalink($post->ID) . '"> </a>';
	}
	add_filter('the_excerpt', 'excerpt_read_more_link');
*/


function custom_excerpt_length( $length ) {
	return 18;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


function new_excerpt_more($more) {
       global $post;
	return '... <a class="more" href="'. get_permalink($post->ID) . '">...See More</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');
?>