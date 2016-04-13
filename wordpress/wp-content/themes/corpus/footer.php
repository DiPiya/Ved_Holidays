<?php
/*
 * Template for displaying footer.
 * 
 * @package Corpus
 */
?>
<?php get_sidebar('footer') ?>

            <div class="footer-bg-section grid-col-16 clearfix">
                <div id="footer-section" class="footer-section grid-col-16">
                    <div id="copyright" class="copyright"><?php _e( 'Copyright', 'corpus' ) ?> &#169; <?php echo date( 'Y' ) ?> | <?php _e( 'Powered by', 'corpus' ) ?> <a href="http://www.wordpress.org">WordPress</a> | <?php _e( 'Corpus theme by', 'corpus' ) ?> <a href="http://www.mudthemes.com/" target="_blank">mudThemes</a></div>
                    <?php  corpus_social_section_show() ?>
                </div>
            </div>
        </div><!-- wrapper ends -->
    </div><!-- parent-wrapper ends -->
    <?php wp_footer(); ?>
</body>
</html>