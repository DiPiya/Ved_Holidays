<?php
/*
 * Primary sidebar section of Corpus theme
 * 
 * @package Corpus
 */
?>

<div id="sidebar-right-section" class="sidebar-right-section grid-float-left">
    
    <?php if ( !dynamic_sidebar( 'right_sidebar' ) ): ?>

        <div class="widget widget_recent_entries">
            <h4 class="widget-title"><?php _e( 'Recent Posts', 'corpus' ); ?></h4>
            <ul><?php wp_get_archives( array( 'type' => 'postbypost', 'limit' => 5, 'format' => 'html' ) ); ?></ul>
        </div>
    
        <div class="widget widget_search">
            <h4 class="widget-title"><?php _e( 'Search', 'corpus' ); ?></h4>
            <?php get_search_form(); ?>
        </div>

    <?php endif ?>
</div>