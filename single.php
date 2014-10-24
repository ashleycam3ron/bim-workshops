<?php get_header();?>
<section id="primary" class="site-content">
    <div id="content" role="main">
    	<div id="banner">
    		<div id="info">
	    		<h2><?php the_title(); ?></h2>
				<div id="location"><?php the_field('location', $post_id); ?></div>
				<span class="date"><?php the_field('event_dates', $post_id); ?></span>
				<a href="#" class="register">Register<span>&raquo;</span></a>
    		</div>
	    	<img src="<?php the_field('banner', $post_id); ?>" />
    	</div>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'content', 'single' ); ?>
        <?php endwhile; // end of the loop. ?>
    </div><!-- #content -->
</section><!-- #primary -->
<?php get_footer(); ?>