<?php get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="entry-content">
				<?php get_template_part( 'sidebar', 'blog' ); ?>

				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'blog' ); ?>
				<?php endwhile; ?>
	
				<?php twentythirteen_paging_nav(); ?>
				<div class="clear"></div>				
				</div><!-- .entry-content -->
			</article><!-- #post -->
		</div><!-- #content -->
	</div><!-- #primary -->
	
<?php get_footer(); ?>