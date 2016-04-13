<?php
/**
 * Template for displaying category archive posts.
 * 
 * @package Corpus
 */
?>
<?php get_header() ?>
<div class="archive-meta-container">
    <div class="archive-head">
        <h1><?php _e('Category Archives', 'corpus') ?></h1>
    </div>
    <div class="archive-description">
        <?php
        $corpus_category_description = term_description();
        if (!empty($corpus_category_description)) {
            echo '<span>' . $corpus_category_description . '</span>';
        } else {
            printf(__('Archive of posts published in the category:', 'corpus').' %s', single_cat_title('', false));
        }
        ?>
    </div>

</div><!-- Archive Meta Container ends -->


<div id="content-section" class="content-section grid-col-16">
    <div class="inner-content-section grid-pct-65">

            <?php if( have_posts() ) : ?>

                    <div class="loop-container-section clearfix">

                        <?php
                            // Here starts the loop
                            while (have_posts()): the_post();
                                get_template_part('loop', 'archive');
                            endwhile;
                        ?>                

                    </div><!-- loop-container-section ends -->
					
                    <?php corpus_archive_nav() // Calls the 'Previous' and 'Next' Post Links. ?>

              <?php else : ?>

                    <?php corpus_404_show() // Function dedicated for handling empty queries. ?>

              <?php endif;?>
                    
    </div><!-- inner-content-section ends -->
    
    <?php get_sidebar() ?>
    
</div><!-- Content-section ends here -->

<?php get_footer() ?>