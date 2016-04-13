<?php
/**
 * Displays featured section (slideshow)
 */

for($i = 1; $i <= 2; $i++){
    $slides[$i]['img'] = esc_url(corpus_get_option('slide_img_' . $i));
    $slides[$i]['head'] = esc_html(corpus_get_option('slide_head_' . $i));
    $slides[$i]['text'] = esc_html(corpus_get_option('slide_text_' . $i));
    $slides[$i]['button'] = esc_html(corpus_get_option('slide_button_text_' . $i));
    $slides[$i]['button_url'] = esc_url(corpus_get_option('slide_button_url_' . $i));

}
?>

<?php if (!corpus_get_option('disable_slideshow_section')): ?>
    <div id="cta-bg-section" class="cta-bg-section grid-col-16 clearfix">
        <div id="cta-section" class="cta-section grid-col-16 clearfix">
            <div id="cta-content-section" class="cta-content-section grid-col-16">
                <div class="cta-image-section">
                    
                    <div id="featured-container" class="slider">
                        <div class="flexslider">
                            <ul class="slides">
                                <?php if (is_array($slides)): ?>
                                    <?php foreach ($slides as $slide): ?>
                                        <?php if (!empty($slide['img'])): ?>
                                            <li>
                                                <img src="<?php echo esc_url($slide['img']) ?>" />
                                                <div class="flex-caption">
                                                    <?php if ($slide['head']): ?>
                                                        <div class="featured-heading">
                                                            <span><?php echo esc_html($slide['head']) ?></span>
                                                        </div>
                                                    <?php endif ?>
                                                    <?php if ($slide['text']): ?>
                                                        <div class="featured-content">
                                                            <span><?php echo esc_html($slide['text']) ?></span>
                                                        </div>
                                                    <?php endif ?>
                                                    <?php if ($slide['button']): ?>
                                                        <div class="featured-button">
                                                            <span><a href="<?php echo esc_url($slide['button_url']) ?>" title="<?php echo esc_html($slide['button']) ?>"><?php echo esc_html($slide['button']) ?></a></span>
                                                        </div>
                                                    <?php endif ?>
                                                </div>
                                            </li>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                <?php endif ?>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div> <!-- cta section ends -->
    </div>
<?php endif; ?>