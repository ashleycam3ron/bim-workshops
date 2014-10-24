<div id="banner">
	<div id="info">
		<h2><?php the_title(); ?></h2>
		<div id="future"><?php the_field('regions', $post_id); ?></div>
		<div class="clear"></div>
	</div>
	
	<div id="copy"><?php echo do_shortcode('[gravityform id="3" name="Future Events" title="false"]'); ?></div>
	
	<img src="<?php the_field('banner', $post_id); ?>" />
</div>