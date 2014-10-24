<?php
/*
Template Name: Future Events
*/
?>

<?php get_header();?>
<section id="primary" class="site-content future">
    <div id="content" role="main">
    	<?php get_template_part('banner','future'); ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'content', 'single' ); ?>
        <?php endwhile; // end of the loop. ?>
    </div><!-- #content -->
</section><!-- #primary -->
<?php get_footer(); ?>