<?php
/*
 * Template for displaying Search Form.
 * 
 * @package Corpus
 */
?>

<form role="search" method="get" id="searchform" action="<?php echo esc_url(home_url( '/' )) ?>">
    <div class="search-box clearfix">
        <input type="text" value="" name="s" id="s" placeholder="<?php _e('Search...', 'corpus') ?>" />
        <input type="submit" id="searchsubmit" value="<?php _e('Go', 'corpus') ?>" />
    </div>
</form>