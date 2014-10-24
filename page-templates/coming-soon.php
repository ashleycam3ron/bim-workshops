<?php
/*
Template Name: Coming Soon
*/
?>
<?php add_action('wp_print_styles', 'stylesheet');
function stylesheet(){?>
	<style>
		body.page.page-id-964{background:url('http://bim-workshops.com/wp-content/uploads/2014/09/BIM-Workshops-Coming-Soon_v3-01.jpg') no-repeat center 50px !important;background-size: cover !important;}
	</style>
<?php } ?>
<?php get_header();?>
<h2 id="the_title"><?php the_title();?></h2>
<?php the_post();?>
<?php the_content();?>
<?php 
    /*
query_posts(array( 
        'post_type' => '',
        'showposts' => -1,
		'orderby' => 'date',
		'order' => 'ASC'
    ) );  
*/
?>
<?php while (have_posts()) : the_post(); ?>
<?php endwhile;?>
<?php get_footer();?>