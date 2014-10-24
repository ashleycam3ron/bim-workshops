<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <!-->
<html class="no-js">
<!--<![endif]-->
<head>
    <meta charset="<?php echo get_bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
    <meta http-equiv="content-language" content="<?php bloginfo('language'); ?>">
    <meta name="author" content="<?php bloginfo('name'); ?>">
    <meta name="copyright" content="Copyright <?php bloginfo('name');?> <?php echo date('Y');?>. All Rights Reserved.">
    <meta name="google-site-verification" content="87XIA0sC7LwK809e-Gz_NQgCBsvgquQroQ8GvnhPcok" />
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri() ?>/image/favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Quicksand:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:100,400' rel='stylesheet' type='text/css'>
    <!--[if gte IE 9]><style type="text/css">.gradient {filter: none;}</style><![endif]-->
    <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>
    <!--[if lt IE 9]>
        <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
    <![endif]-->
    
<header id="header" role="banner">
	<div id="inner-header" class="clearfix">
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container-fluid nav-container">
					<nav id="main" role="navigation">
						<h2>Primary Nav</h2>
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
						</a>
						<div class="nav-collapse">
							<?php wp_nav_menu( array( 
						    		'menu' => 'Coming Soon', /* menu name */
						    		'menu_class' => 'nav',
						    		'theme_location' => 'main', /* where in the theme it's assigned */
						    		'container' => 'false', /* container class */
						    		'depth' => '3', /* suppress lower levels for now */
						    		'walker' => new Bootstrap_Walker()
						    	)); ?>
						</div>
					</nav>
					<nav id="social" role="navigation">
						<h2>Social Nav</h2>
						<?php wp_nav_menu( array('menu' => 'social' )); ?>
					</nav>
					<?php get_search_form(); ?>
				</div> <!-- end .nav-container -->
			</div> <!-- end .navbar-inner -->
		</div> <!-- end .navbar -->
	</div> <!-- end #inner-header -->
</header> <!-- end header -->   

<hgroup>
    <h1 class="site-title">
    	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
    		<img src="<?php the_field('logo','options'); ?>"/><?php bloginfo( 'name' ); ?>
    	</a>
    </h1>
    <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
	<?php if ( is_page_template('page-templates/event.php') || $post->post_parent) { get_template_part('countdown'); } ?>
</hgroup>

<div id="page" class="hfeed site">    
    <div id="main" class="wrapper <?php if (is_front_page() || is_home()){ echo 'home';} ?>">
    	<h2>Main Content</h2>  	