<?php
 /**
  * Display Head box
  */ 
?>
<?php if(!corpus_get_option('disable_headbox_section')): ?>
    <div id="headboxes-section" class="headboxes-section grid-col-16 clearfix">
            <div id="hb-style-one" class="hb-style-one grid-col-16 clearfix">
                <div class="hb-columns clearfix">
                    <div class="hb-couple-columns grid-col-8">
                        <div class="hb-column grid-col-8 grid-float-left">
                            <div class="hb-title"><span><?php echo esc_html(corpus_get_option('head_box_title_1')) ?></span></div>
                            <div class="hb-description"><span><?php echo esc_html(corpus_get_option('head_box_content_1')) ?></span></div>
                            <?php if (corpus_get_option('head_box_button_text_1')): ?><div class="hb-button"><a href="<?php echo esc_url(corpus_get_option('head_box_button_url_1')) ?>"><?php echo esc_html(corpus_get_option('head_box_button_text_1')) ?></a></div><?php endif ?>
                        </div>
                        <div class="hb-column grid-col-8 grid-float-left">
                            <div class="hb-title"><span><?php echo esc_html(corpus_get_option('head_box_title_2')) ?></span></div>
                            <div class="hb-description"><span><?php echo esc_html(corpus_get_option('head_box_content_2')) ?></span></div>
                            <?php if (corpus_get_option('head_box_button_text_2')): ?><div class="hb-button"><a href="<?php echo esc_url(corpus_get_option('head_box_button_url_2')) ?>"><?php echo esc_html(corpus_get_option('head_box_button_text_2')) ?></a></div><?php endif ?>
                        </div>
                    </div>
                    <div class="hb-couple-columns grid-col-8">
                        <div class="hb-column grid-col-8 grid-float-left">
                            <div class="hb-title"><span><?php echo esc_html(corpus_get_option('head_box_title_3')) ?></span></div>
                            <div class="hb-description"><span><?php echo esc_html(corpus_get_option('head_box_content_3')) ?></span></div>
                            <?php if (corpus_get_option('head_box_button_text_3')): ?><div class="hb-button"><a href="<?php echo esc_url(corpus_get_option('head_box_button_url_3')) ?>"><?php echo esc_html(corpus_get_option('head_box_button_text_3')) ?></a></div><?php endif ?>
                        </div>
                        <div class="hb-column grid-col-8 grid-float-left">
                            <div class="hb-title"><span><?php echo esc_html(corpus_get_option('head_box_title_4')) ?></span></div>
                            <div class="hb-description"><span><?php echo esc_html(corpus_get_option('head_box_content_4')) ?></span></div>
                            <?php if (corpus_get_option('head_box_button_text_4')): ?><div class="hb-button"><a href="<?php echo esc_url(corpus_get_option('head_box_button_url_4')) ?>"><?php echo esc_html(corpus_get_option('head_box_button_text_4')) ?></a></div><?php endif ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php endif ?>