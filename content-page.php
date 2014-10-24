	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php /*
function wpb_list_child_pages() { 

	global $post; 
	
	if ( is_page() && $post->post_parent )
		$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
	else
		$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );
	if ( $childpages ) {
		$string = '<ul>' . $childpages . '</ul>';
	}
	return $string;
	}
	add_shortcode('wpb_childpages', 'wpb_list_child_pages');
	echo do_shortcode( '[wpb_childpages]' );
*/
 ?>
	
		<div class="entry-content">
			<div class="entry">
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
				<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
			</div>
			<div class="clear"></div>
		<?php if (is_page(6)){ ?>
			<?php get_template_part('content', 'sponsors'); ?>
		<?php } ?>
		</div><!-- .entry-content -->
	</article><!-- #post -->