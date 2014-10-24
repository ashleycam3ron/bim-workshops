	<div class="clear"></div>
    </div><!-- end #main -->
</div><!-- end #page -->
<footer id="footer">
    <small>&copy;<?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></small>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/credit.jpg"/>
</footer>

<?php 
	wp_enqueue_script('functions', get_stylesheet_directory_uri().'/js/functions.js', array('jquery'), '1.0');
?>

<?php wp_footer();?>
<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline 
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>  -->
<!-- this is where we put our custom functions -->
<!-- <script src="<?php //echo get_stylesheet_directory_uri(); ?>/js/functions.js"></script> -->

</body>
</html>