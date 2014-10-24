<?php
/*
Template Name: Call for Speakers
*/
?>

<?php get_header();?>
<section id="primary" class="site-content">
    <div id="content" role="main" class="call">
    	<?php get_template_part('banner'); ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'content', 'sections' ); ?>
        <?php endwhile; // end of the loop. ?>
    </div><!-- #content -->
</section><!-- #primary -->
<script type="text/javascript">
    $(document).ready(function() {
        $("h3").click(function() {
        	$(this).nextUntil('h3').slideToggle('slow');
        	$(this).toggleClass('active');
        });
    });
</script>
<?php get_footer(); ?>