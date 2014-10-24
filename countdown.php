<?php wp_enqueue_style('countdown'); ?>
<?php wp_enqueue_script('countdown'); ?>
<script type="text/javascript">
	$(function() {
		<?php if ( $post->post_parent == 100 || $post->post_parent == 107 || $post->post_parent == 108 ){ ?>
			$('#timer').countdown({until: new Date(<?php the_field('date', $post->post_parent); ?>)});
		<?php } else { ?>
			$('#timer').countdown({until: new Date(<?php the_field('date'); ?>)});
		<?php } ?>
	});
</script>
<div id="countdown">
	<div id="timer"></div>
	<?php if ( $post->post_parent == 100 || $post->post_parent == 107 || $post->post_parent == 108 ){ ?>
		<div id="location"><?php the_field('location', $post->post_parent); ?></div>
	<?php } else { ?>
		<div id="location"><?php the_field('location'); ?></div>
	<?php } ?>
</div>


<?php //if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>