<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package TravelGuide
 */
?>
</div><!-- #content -->

	<footer id="colophon" class="site-footer container row" role="contentinfo">
		<div id="footertext" class="col-md-7">
        	<?php
			if ( (function_exists( 'of_get_option' ) && (of_get_option('footer_code', true) != 1) ) ) {
			 	echo of_get_option('footer_code', true); } ?>
        </div> 
		<div class="site-info col-md-5">
			<?php do_action( 'travel_guide_credits' ); ?>
			<?php printf( __( 'Powered By  %1$s', 'travel-guide' ), '<a href="http://travel-guides.dk/" rel="designer">Travel Guide Theme</a>' ); ?>
		</div><!-- .site-info -->
		  
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>