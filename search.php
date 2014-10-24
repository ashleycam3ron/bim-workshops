<?php get_header();?>
<section id="primary" class="site-content">
    <div id="content" role="main">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-content">
           <?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
			<div class="entry">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php the_content(); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
				<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
			</div>
			<div class="clear"></div>
		  <?php endwhile; ?>
		  <?php else : ?>
		    <div class="entry sorry">
				<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentytwelve' ); ?></p>
			</div>
		</div><!-- .entry-content -->
		<?php twentytwelve_content_nav( 'nav-below' ); ?>
	</article><!-- #post -->
	<?php endif; ?>
    </div><!-- #content -->
</section><!-- #primary -->
<?php get_footer(); ?>