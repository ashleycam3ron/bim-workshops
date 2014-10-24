<div id="sponsors">
	<h2>National Sponsors</h2>
	<?php $national = new WP_Query( array('post_type' => 'sponsors','level' => 'corporate','orderby' => 'title','order' => 'ASC')); ?>
	
	<?php if ($national->have_posts()): ?>
	<ul>
		<?php while ( $national->have_posts()) : $national->the_post(); ?>
			<li>
				<?php if (get_field('link')){ ?><a target="_blank" href="<?php the_field('link'); ?>"><?php } ?>
					<img src="<?php the_field('image'); ?>" />
				<?php if (get_field('link')){ ?></a><?php } ?>
			</li>
		<?php endwhile; ?> 
	</ul>
	<?php endif; wp_reset_postdata(); ?>
	
	<h2>Regional Sponsors</h2>
	<?php $regional = new WP_Query( array('post_type' => 'sponsors','level' => 'regional','orderby' => 'title','order' => 'ASC')); ?>

	<?php if ($regional->have_posts()): ?>
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
	
  
	<h2>Local Sponsors</h2>
	<?php $local = new WP_Query( array('post_type' => 'sponsors','level' => 'local','orderby' => 'title','order' => 'ASC')); ?>

	<?php if ($local->have_posts()): ?>
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

</div>