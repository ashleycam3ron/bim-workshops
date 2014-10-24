<?php
/*
Template Name: Archive Page
*/
?>

<?php get_header();?>
<section id="primary" class="site-content">
    <div id="content" role="main">
    	<?php //get_template_part('banner'); ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php //get_template_part( 'content', 'single' ); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="entry-content">
					<div class="entry">
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentythirteen' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
					</div>
					<div class="clear"></div>
						</div><!-- .entry-content -->
			</article><!-- #post -->
			
			<article id="gallery">
			<!-- gallery -->	
			<?php $images = get_field('gallery',142);
				  if( $images ): ?>
				  <div class="slideshow" 
				    data-cycle-fx=carousel
				    data-cycle-timeout=2000
				    data-cycle-carousel-visible=6
				    data-cycle-carousel-fluid=true
				    data-cycle-next="#next"
					data-cycle-prev="#prev"
				    >
		            <?php foreach( $images as $image ): ?>
		               <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
		            <?php endforeach; ?>
				  </div>
				  <div class=center>
				    <a href=# id=prev>&lt;&lt; Prev </a>
				    <a href=# id=next> Next &gt;&gt; </a>
				  </div>
			<?php endif; ?>
				
			</article>
        <?php endwhile; // end of the loop. ?>
    </div><!-- #content -->
</section><!-- #primary -->

<script>
	jQuery('.slideshow').cycle();
</script>
<?php get_footer(); ?>