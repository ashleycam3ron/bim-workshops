<?php
/*
Template Name: Speakers
*/
?>

<?php get_header();?>
<section id="primary" class="site-content">
    <div id="content" role="main">
    	<?php get_template_part('banner'); ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php //get_template_part( 'content', 'single' ); ?>
            
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="entry-content">
					<?php global $post;
						 $post_data = get_post($post->post_parent);
						 $parent = $post_data->post_name; ?>
						 
					<div class="entry board <?php echo $parent; ?>">
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
						
						<?php $the_query = new WP_Query( array(
								'post_type' => 'speakers',
								//'year' => '2014',
								'tax_query' => array(
									'relation' => 'AND',
									array(
										'taxonomy' => 'year',
										'field' => 'slug',
										'terms' => '2014'
									),
									array(
										'taxonomy' => 'event',
										'field' => 'slug',
										'terms' => $parent
									)
								),
								'orderby' => 'menu_order',
								'order' => 'ASC'
							));
							if ( $the_query->have_posts() ) : while ( $the_query->have_posts()) : $the_query->the_post(); ?>
							
							<a href="#post-<?php the_ID(); ?>" class="fancybox">
							  <?php $attachment_id = get_field('headshot');
									$size = "thumbnail"; // (thumbnail, medium, large, full or custom size) 
									$image = wp_get_attachment_image_src( $attachment_id, $size );
									// url = $image[0]; width = $image[1]; height = $image[2];
									?>
								<img src="<?php echo $image[0]; ?>" />
								<div class="overlay">
									<h2><?php the_title(); ?></h2>
									<h3><?php the_field('title'); ?></h3>
									<h4><?php the_field('company'); ?></h4>
								</div>
							</a>
							<div id="post-<?php the_ID(); ?>" class="member">
								<div class="left">
								<?php $attachment_id = get_field('headshot');
									$size = "medium"; // (thumbnail, medium, large, full or custom size) 
									$image = wp_get_attachment_image_src( $attachment_id, $size ); ?>
									<img src="<?php echo $image[0]; ?>" />
									<h2><?php the_title(); ?></h2>
									<h3><?php the_field('title'); ?></h3>
									<h4><?php the_field('company'); ?></h4>
									<img class="logo" src="<?php the_field('logo'); ?>"/>
								</div>
								<div class="bio"><?php the_field('bio'); ?></div>
								<div class="clear"></div>
							</div>
							
						<?php endwhile; endif;
						wp_reset_postdata(); ?>
						<?php //wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentythirteen' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
					</div>
					<?php if ( is_page_template('page-templates/call-for-speakers.php')) { get_sidebar('call'); } ?>
					<div class="clear"></div>
				</div><!-- .entry-content -->
			</article><!-- #post -->

        <?php endwhile; // end of the loop. ?>
    </div><!-- #content -->
</section><!-- #primary -->
<?php get_footer(); ?>