<?php
/*
 * Template for displaying single posts.
 * 
 * @package Corpus
 */
?>
<?php get_header() ?>

<?php if( have_posts() ) : while( have_posts() ): the_post() ?>

<div id="content-section" class="content-section grid-col-16 clearfix">
    <div id="post-<?php the_ID() ?>" <?php post_class('inner-content-section') ?>>
	
	                <div class="post-title">
                    <?php if ( is_front_page() ): ?>
                        <h1 class="front-page"><?php the_title() ?></h1>
                    <?php else: ?>
                        <h1 class="inner-page"><?php the_title() ?></h1>
                    <?php endif ?>
                        
                        <div class="post-meta">
                            <?php 
                            printf( '%1$s<span class="meta-author-url">, '.__( 'By', 'corpus' ).' %2$s </span>',
                                sprintf( '<span class="entry-date">%1$s</span>',
                                get_the_date()
                            ),
                            sprintf( '<span class="author vcard">%1$s</span>',
                                get_the_author()
                            )) ?>
                            <?php if(comments_open()) {
                                echo '<span class="post-meta-comments">';                                    
                                comments_number( ' | <a href='.get_comments_link().'>'.__('Leave a reply', 'corpus').'</a>', ' | '.__('1 comment', 'corpus'), ' | % '.__('comments', 'corpus') );
                                echo '</span>';
                                } ?>
                        </div>
                    </div>

                    <div class="post-content">
                         <?php the_content() ?>
                         <?php wp_link_pages(array('before' => '<div class="post-nav-link"><span>' . __('Pages:', 'corpus') . '</span>', 'after' => '</div>')) ?>
                    </div>

                    <div class="post-below-content">
                    	<?php edit_post_link( __( 'Edit', 'corpus' ), '<div class="edit-link">', '</div>' ) ?>
                        <p class="tags-below-content"><?php the_tags( __( 'Tags: ', 'corpus' ) , ', ', '') ?></p>
                    </div>

                    <?php corpus_post_nav() ?>

                    <?php comments_template( '', true ) ?>


        
    </div><!-- inner-content-section ends -->
    
    <?php get_sidebar() ?>
    
</div><!-- Content-section ends here -->

<?php endwhile ?>

<?php endif ?>

<?php get_footer() ?>