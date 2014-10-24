<?php
/*
Template Name: Event
*/
?>

<?php get_header();?>
<section id="primary" class="site-content">
    <div id="content" role="main">
    	<?php get_template_part('banner'); ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php //get_template_part( 'content', 'single' ); ?>
        <?php endwhile; // end of the loop. ?>
        
        <div id="sponsors">
<?php $affiliated = new WP_Query( array(
				'post_type' => 'sponsors',
				'level' => 'affiliated',
				'event' => $post->post_name,
				'orderby' => 'title',
				'order' => 'ASC')); ?>
		
			<?php if ($affiliated->have_posts()): ?>
			<h2>Affiliated Sponsors</h2>
			<ul>
				<?php while ( $affiliated->have_posts()) : $affiliated->the_post(); ?>
					<li>
						<?php if (get_field('link')){ ?><a target="_blank" href="<?php the_field('link'); ?>"><?php } ?>
							<img src="<?php the_field('image'); ?>" />
						<?php if (get_field('link')){ ?></a><?php } ?>
					</li>
				<?php endwhile; ?> 
			</ul>
			<?php endif; wp_reset_postdata(); ?>

<?php $corporate = new WP_Query( array(
				'post_type' => 'sponsors',
				'level' => 'corporate',
				'event' => $post->post_name,
				'orderby' => 'title',
				'order' => 'ASC')); ?>
		
			<?php if ($corporate->have_posts()): ?>
			<h2>National Sponsors</h2>
			<ul>
				<?php while ( $corporate->have_posts()) : $corporate->the_post(); ?>
					<li>
						<?php if (get_field('link')){ ?><a target="_blank" href="<?php the_field('link'); ?>"><?php } ?>
							<img src="<?php the_field('image'); ?>" />
						<?php if (get_field('link')){ ?></a><?php } ?>
					</li>
				<?php endwhile; ?> 
			</ul>
			<?php endif; wp_reset_postdata(); ?>

			
			<?php $regional = new WP_Query( array(
				'post_type' => 'sponsors',
				'level' => 'regional',
				'event' => $post->post_name,
				'orderby' => 'title',
				'order' => 'ASC')); ?>
		
			<?php if ($regional->have_posts()): ?>
			<h2>Regional Sponsors</h2>
			<ul>
				<?php while ( $regional->have_posts()) : $regional->the_post(); ?>
					<li>
						<?php if (get_field('link')){ ?><a target="_blank" href="<?php the_field('link'); ?>"><?php } ?>
							<img src="<?php the_field('image'); ?>" />
						<?php if (get_field('link')){ ?></a><?php } ?>
					</li>
				<?php endwhile; ?> 
			</ul>
			<?php endif; wp_reset_postdata(); ?>
			
			
			<?php $local = new WP_Query( array(
				'post_type' => 'sponsors',
				'level' => 'local',
				'event' => $post->post_name,
				'orderby' => 'title',
				'order' => 'ASC'
				)); ?>
		
			<?php if ($local->have_posts()): ?>
			<h2>Local Sponsors</h2>
			<ul>
				<?php while ( $local->have_posts()) : $local->the_post(); ?>
					<li>
						<?php if (get_field('link')){ ?><a target="_blank" href="<?php the_field('link'); ?>"><?php } ?>
							<img src="<?php the_field('image'); ?>" />
						<?php if (get_field('link')){ ?></a><?php } ?>
					</li>
				<?php endwhile; ?> 
			</ul>
			<?php endif; wp_reset_postdata(); ?>

			<?php $usergroups = new WP_Query( array(
				'post_type' => 'sponsors',
				'level' => 'usergroups',
				'event' => $post->post_name,
				'orderby' => 'title',
				'order' => 'ASC'
				)); ?>
		
			<?php if ($local->have_posts()): ?>
			<h2>User Group Partners</h2>
			<ul>
				<?php while ( $usergroups->have_posts()) : $usergroups->the_post(); ?>
					<li>
						<?php if (get_field('link')){ ?><a target="_blank" href="<?php the_field('link'); ?>"><?php } ?>
							<img src="<?php the_field('image'); ?>" />
						<?php if (get_field('link')){ ?></a><?php } ?>
					</li>
				<?php endwhile; ?> 
			</ul>
			<?php endif; wp_reset_postdata(); ?>

			
    </div>
    </div><!-- #content -->
</section><!-- #primary -->
<?php get_footer(); ?>