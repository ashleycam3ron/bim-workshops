<div id="banner">
	<div id="info">
		<h2>
		<?php if ( $post->post_parent == 100 || $post->post_parent == 107 || $post->post_parent == 108 ){
				echo empty( $post->post_parent ) ? get_the_title( $post->ID ) : get_the_title( $post->post_parent );
			} else {
				the_title();
			} ?>
		</h2>
		<?php if ( $post->post_parent == 100 || $post->post_parent == 107 || $post->post_parent == 108 ){ ?>
			<div id="location"><?php the_field('location', $post->post_parent); ?></div>
			<span class="date"><?php the_field('event_dates', $post->post_parent); ?></span>
		<?php } else { ?>
			<div id="location"><?php the_field('location', $post_id); ?></div>
			<span class="date"><?php the_field('event_dates', $post_id); ?></span>
		<?php } ?>

		<!-- register link -->
		<?php if ( is_page(array(136,137,138))){ ?>
			<a style="background:white;" target="_blank" href="<?php the_field('link'); ?>" class="register">Register<span>&raquo;</span></a>
		<?php } elseif ( $post->post_parent == 100 || $post->post_parent == 107 || $post->post_parent == 108 ){ ?>
			<a style="background:white;" href="<?php the_field('link', $post->post_parent); ?>" class="register">Register<span>&raquo;</span></a>
		<?php } else { ?>
			<a style="background:white;" href="<?php the_field('link', $post_id); ?>" class="register">Register<span>&raquo;</span></a>
		<?php } ?>
	</div>

	<div id="copy">
		<?php if ( $post->post_parent == 100 || $post->post_parent == 107 || $post->post_parent == 108 ){ ?>
			<p class="<?php the_field('copy_size', $post->post_parent); ?>"><?php the_field('copy', $post->post_parent); ?></p>
		<?php } else { ?>
			<p class="<?php the_field('copy_size', $post_id); ?>"><?php the_field('copy', $post_id); ?></p>
		<?php } ?>
	</div>

	<?php if ( $post->post_parent == 100 || $post->post_parent == 107 || $post->post_parent == 108 ){ ?>
		<img src="<?php the_field('banner', $post->post_parent); ?>" />
	<?php } else { ?>
		<img src="<?php the_field('banner', $post_id); ?>" />
	<?php } ?>
</div>

<?php
$output = wp_list_pages('echo=0&depth=0' );
if (!is_page(array(100,107,108))) {
  $page = $post->ID;
  
  if ($post->post_parent) {
    $page = $post->post_parent;
  }
  $children=wp_list_pages( 'echo=0&child_of=' . $page . '&title_li=' );
  if ($children) {
    $output = wp_list_pages ('echo=0&child_of=' . $page . '&title_li=');
  } ?>
  
<ul id="secondary-nav"><?php echo $output; ?></ul>  
<?php } else {
	$output = wp_list_pages ('echo=0&child_of=' . $post->ID . '&title_li='); ?>
	<ul id="secondary-nav"><?php echo $output; ?></ul>
<?php } ?>