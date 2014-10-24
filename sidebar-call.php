<?php if ( is_active_sidebar( 'call-sidebar' ) ) : ?>
	<div id="sidebar" class="call-sidebar" role="complementary">
		<div class="widget-area">
			<?php dynamic_sidebar( 'call-sidebar' ); ?>
		</div><!-- .widget-area -->
	</div><!-- #secondary -->
<?php endif; ?>