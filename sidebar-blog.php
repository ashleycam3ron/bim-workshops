<div id="sidebar">

<h2>Archives</h2>
<select name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
  <option value=""><?php echo esc_attr( __( 'Select Month' ) ); ?></option> 
  <?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
</select>


<h2><?php the_field('links_title', 225); ?></h2>
<?php if(get_field('blog_links', 225)): ?> 
	<ul>
	<?php while(has_sub_field('blog_links', 225)): ?>
		<li>
			<a target="_blank" href="<?php the_sub_field('link'); ?>">
				<?php the_sub_field('title'); ?>
			</a>
		</li>
	<?php endwhile; ?>
	</ul> 
<?php endif; ?>

<div id="sponsors">

	<h2>Affiliated Sponsors</h2>
	<?php $affiliated = new WP_Query( array('post_type' => 'sponsors','level' => 'affiliated','orderby' => 'title','order' => 'ASC')); ?>

	<?php if ($affiliated->have_posts()): ?>
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

	<h2>National Sponsors</h2>
	<?php $sponsors = new WP_Query( array('post_type' => 'sponsors','level' => 'corporate','orderby' => 'title','order' => 'ASC')); ?>
	
	<?php if ($sponsors->have_posts()): ?>
	<ul>
		<?php while ( $sponsors->have_posts()) : $sponsors->the_post(); ?>
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

	<h2>User Group Partners</h2>
	<?php $usergroups = new WP_Query( array('post_type' => 'sponsors','level' => 'usergroups','orderby' => 'title','order' => 'ASC')); ?>

	<?php if ($usergroups->have_posts()): ?>
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
</div>