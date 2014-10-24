<?php get_header();?>

<section id="primary" class="site-content">
    <div id="content" role="main">
  		<?php if (in_array(132, $post->ancestors)){ ?>
  			<?php get_template_part('banner'); ?>
  		<?php } ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'content', 'page' ); ?>
        <?php endwhile; // end of the loop. ?>
    </div><!-- #content -->
</section><!-- #primary -->

<?php get_footer(); ?>