<?php
$inc = scandir(dirname(__FILE__).'/function');
foreach($inc as $k=>$v){
	if($k>1) include(dirname(__FILE__).'/function/'.$v);
}

function get_page_id_by_slug($slug){
    global $wpdb;
    $id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '".$slug."'AND post_type = 'page'");
    return $id;
}

// remove ie css from twentytwelve theme
function mytheme_dequeue_styles() {
   wp_dequeue_style( 'twentytwelve-ie' );
 }
 add_action( 'wp_enqueue_scripts', 'mytheme_dequeue_styles', 11 );
//add new from child theme
wp_enqueue_style( 'mytheme-ie', get_stylesheet_directory_uri() . '/css/ie.css', array( 'twentytwelve-style' ), '1.0' );
$wp_styles->add_data( 'mytheme-ie', 'conditional', 'lt IE 9' );

?>