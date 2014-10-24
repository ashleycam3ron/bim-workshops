<?php //wp_enqueue_script('cycle2', get_stylesheet_directory_uri().'/js/jquery.cycle.all.min.js', array('jquery'), '1.01'); ?>
<?php get_header();?>

<section id="primary" class="site-content">
	<article id="banner" class="post" id="post-<?php the_ID(); ?>">
		<div class="col4 welcome">
		  <?php while ( have_posts() ) : the_post(); ?>
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		  <?php endwhile; // end of the loop. ?>
		</div>
		<div class="col4 pacific">
			<h2><?php echo get_the_title(100); ?></h2>
			<h3><?php the_field('location', 100); ?></h3>
			<h4><?php the_field('event_dates', 100); ?></h4>
			<a href="/events/pacific-coast" class="details">event details ></a>
			<a href="<?php the_field('link', 100); ?>" class="register">Register<span>&raquo;</span></a>
		</div>
		<div class="col4 central">
			<h2><?php echo get_the_title(107); ?></h2>
			<h3><?php the_field('location', 107); ?></h3>
			<h4><?php the_field('event_dates', 107); ?></h4>
			<a href="/events/central-states" class="details">event details ></a>
			<a href="<?php the_field('link', 107); ?>" class="register">Register<span>&raquo;</span></a>
		</div>
		<div class="col4 east">
			<h2><?php //echo get_the_title(108); ?>Future Events</h2>
			<h3><?php //the_field('location', 108); ?></h3>
			<h4><?php //the_field('event_dates', 108); ?></h4>
			<!-- <a href="/events/pacific-coast-2" class="details">event details ></a> -->
			<!-- <a href="<?php the_field('link', 108); ?>" class="register">Register<span>&raquo;</span></a> -->
			<a href="/future-events" class="register">Suggest A Location<span>&raquo;</span></a>
		</div>
		<div class="clear"></div>
	    <?php edit_post_link('Edit this entry'); ?>
	</article>
	
	<article id="feature">
		<?php if (get_field('photo')){ ?><img src="<?php the_field('photo'); ?>"/><?php } ?>
		<div class="txt">
		  <?php if (get_field('title')){ ?><h2><?php the_field('title'); ?></h2><?php } ?>
		  <?php if (get_field('bio')){ ?><?php the_field('bio'); ?><?php } ?>
		</div>
	</article>
	
	<article id="speakers" class="board">
		<h2>National Speakers</h2>
		<?php $the_query = new WP_Query( array(
			'post_type' => 'speakers',
			'meta_key' => 'national_speaker',
			'meta_value' => '1',
			'orderby' => 'title',
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
		
	<?php endwhile; endif; wp_reset_postdata(); ?>

	</article>
	<article id="sponsors">
		<h2>Affiliated Sponsors</h2>
		
		<?php $sponsors = new WP_Query( array(
			'post_type' => 'sponsors',
			'level' => 'affiliated',
			'orderby' => 'title',
			'order' => 'ASC'
		)); ?>


		<?php if ($sponsors->have_posts()): ?>
		<ul>
			<?php while ( $sponsors->have_posts()) : $sponsors->the_post(); ?>
			<li>
				<?php if (get_field('link')){ ?><a target="_blank" href="<?php the_field('link'); ?>"><?php } ?>
					<img style="max-height:100px;" src="<?php the_field('image'); ?>" />
				<?php if (get_field('link')){ ?></a><?php } ?>
			</li>
			<?php endwhile; ?> 
		</ul>
		<?php endif; wp_reset_postdata(); ?>
	</article>

	<article id="sponsors">
		<h2>National Sponsors</h2>
		
		<?php $sponsors = new WP_Query( array(
			'post_type' => 'sponsors',
			'level' => 'corporate',
			'orderby' => 'title',
			'order' => 'ASC'
		)); ?>


		<?php if ($sponsors->have_posts()): ?>
		<ul>
			<?php while ( $sponsors->have_posts()) : $sponsors->the_post(); ?>
			<li>
				<?php if (get_field('link')){ ?><a target="_blank" href="<?php the_field('link'); ?>"><?php } ?>
					<img style="max-height:100px;" src="<?php the_field('image'); ?>" />
				<?php if (get_field('link')){ ?></a><?php } ?>
			</li>
			<?php endwhile; ?> 
		</ul>
		<?php endif; wp_reset_postdata(); ?>
	</article>
</section><!-- #primary -->

<?php get_footer(); ?>