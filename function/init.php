<?php
if(!function_exists('initialize')){
	function initialize() {
		add_theme_support('post-thumbnails');
		//add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));
	}
	add_action('init','initialize');
}

function custom_login_logo(){
	$logo = get_stylesheet_directory_uri().'/image/logo.svg';
	$images = get_stylesheet_directory_uri().'/image/';
	//$l = getimagesize($path);
	echo '<style type="text/css">
			h1 a { background-image:url("'. $logo .'") !important; background-size:100% !important;width:295px !important;height:75px !important;margin: 0 auto !important;}
			/* body.login {background:url("'. $images .'stripe1.png") !important;} */
			.login form {background: #fff !important;border: 1px solid #EEE !important;}
		</style>';
}
add_action('login_head','custom_login_logo');
function login_header_url() {
    return home_url();
}
add_filter('login_headerurl', 'login_header_url');

function login_header_title() {
    return get_bloginfo('name');
}
add_filter('login_headertitle', 'login_header_title');

?>