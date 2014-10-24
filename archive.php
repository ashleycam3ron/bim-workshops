<?php get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<?php $the_query = new WP_Query( array(
				'post_type' => 'post'
			 )); ?>
		<?php if ( $the_query->have_posts() ) : ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="entry-content">
					<h2><?php if ( is_day() ) :
								printf( __( 'Daily Archives: %s', 'twentythirteen' ), get_the_date() );
							elseif ( is_month() ) :
								printf( __( 'Monthly Archives: %s', 'twentythirteen' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentythirteen' ) ) );
							elseif ( is_year() ) :
								printf( __( 'Yearly Archives: %s', 'twentythirteen' ), get_the_date( _x( 'Y', 'yearly archives date format', 'twentythirteen' ) ) );
							else :
								_e( 'Archives', 'twentythirteen' );
							endif; ?>
					</h2>
				
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<div class="entry">
						<h2><?php the_title(); ?></h2>
						<?php the_excerpt(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
					</div>
					<?php endwhile; endif; ?>

			<?php twentythirteen_paging_nav(); ?>
					<div class="clear"></div>
				</div><!-- .entry-content -->
			</article><!-- #post -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>