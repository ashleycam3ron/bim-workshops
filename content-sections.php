	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-content">
			<div class="entry">
				<h2><?php the_title(); ?></h2>
				<img class="speaker" src="<?php echo get_stylesheet_directory_uri(); ?>/image/speaker.png"/>
				<?php the_content(); ?>
				<?php if(get_field('sections')): ?>
					<?php while(has_sub_field('sections')): ?>
						<h3><?php the_sub_field('title'); ?><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/arrow.png"/></span></h3>
						<div class="copy"><?php the_sub_field('copy'); ?></div>
					<?php endwhile; ?> 
				  <?php endif; ?>
			  
				<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
				<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
			</div>
			<?php get_sidebar('call'); ?>
			<div class="clear"></div>
		</div><!-- .entry-content -->
	</article><!-- #post -->