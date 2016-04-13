<?php
/**
 * Theme Customizer Options
 *
 * @since 1.0.0
 */

require_once 'customizer_constants.php';
require_once 'customizer_extended.php';

/**
 * Contains options array for theme customizer
 * 
 * @param string $type
 * @return array
 */
function corpus_customizer_options($type){
    
    $options = array();
    $sections = array();
    $panels = array();
    
    $panels[] = array(
        'id' => 'corpus_panel_general',
        'title' => __('General','corpus'),
        'description' => '',
        'priority' => 20,
    );

    $panels[] = array(
        'id' => 'corpus_panel_header',
        'title' => __('Header','corpus'),
        'description' => '',
        'priority' => 40,
    );

    $sections[] = array(
        'id' => 'corpus_section_header_logo',
        'title' => __('Site Logo','corpus'),
        'description' => '',
        'panel' => 'corpus_panel_header',
        'priority' => 100,
        'shortname' => 'section_header_logo',
    );

    $options[] = array(
        'id' => 'site_logo',
        'default' => '',
        'label' => __('Site Logo','corpus'),
        'description' => '',
        'type' => 'media_upload',
        'sanitize_type' => 'media_upload',
        'section' => 'section_header_logo',
        'extended_class' => 'WP_Customize_Image_Control',
        'choices' => false,
        'transport' => 'refresh'
    );

    $panels[] = array(
        'id' => 'corpus_panel_layout',
        'title' => __('Layout','corpus'),
        'description' => '',
        'priority' => 60,
    );

    $sections[] = array(
        'id' => 'corpus_section_layout_header',
        'title' => __('Header','corpus'),
        'description' => '',
        'panel' => 'corpus_panel_layout',
        'priority' => 100,
        'shortname' => 'section_layout_header',
    );

    $options[] = array(
        'id' => 'disable_header',
        'default' => false,
        'label' => __('Hide Header','corpus'),
        'description' => '',
        'type' => 'checkbox',
        'sanitize_type' => 'checkbox',
        'section' => 'section_layout_header',
        'extended_class' => false,
        'choices' => false,
        'transport' => 'refresh'
    );
    
    $options[] = array(
        'id' => 'disable_site_desc',
        'default' => true,
        'label' => __('Hide Site Description','corpus'),
        'description' => '',
        'type' => 'checkbox',
        'sanitize_type' => 'checkbox',
        'section' => 'section_layout_header',
        'extended_class' => false,
        'choices' => false,
        'transport' => 'refresh'
    );

    $sections[] = array(
        'id' => 'corpus_section_layout_social',
        'title' => __('Social','corpus'),
        'description' => '',
        'panel' => 'corpus_panel_layout',
        'priority' => 110,
        'shortname' => 'section_layout_social',
    );

    $options[] = array(
        'id' => 'disable_social_section',
        'default' => false,
        'label' => __('Disable Social Section', 'corpus'),
        'description' => '',
        'type' => 'checkbox',
        'sanitize_type' => 'checkbox',
        'section' => 'section_layout_social',
        'extended_class' => false,
        'choices' => false,
        'transport' => 'refresh'
    );

    $sections[] = array(
        'id' => 'corpus_section_layout_slideshow',
        'title' => __('Slideshow','corpus'),
        'description' => '',
        'panel' => 'corpus_panel_layout',
        'priority' => 120,
        'shortname' => 'section_layout_slideshow',
    );

    $options[] = array(
        'id' => 'disable_slideshow_section',
        'default' => false,
        'label' => __('Disable Slideshow Section', 'corpus'),
        'description' => '',
        'type' => 'checkbox',
        'sanitize_type' => 'checkbox',
        'section' => 'section_layout_slideshow',
        'extended_class' => false,
        'choices' => false,
        'transport' => 'refresh'
    );

    $sections[] = array(
        'id' => 'corpus_section_layout_headbox',
        'title' => __('Headbox','corpus'),
        'description' => '',
        'panel' => 'corpus_panel_layout',
        'priority' => 130,
        'shortname' => 'section_layout_headbox',
    );

    $options[] = array(
        'id' => 'disable_headbox_section',
        'default' => false,
        'label' => __('Disable Headbox Section', 'corpus'),
        'description' => '',
        'type' => 'checkbox',
        'sanitize_type' => 'checkbox',
        'section' => 'section_layout_headbox',
        'extended_class' => false,
        'choices' => false,
        'transport' => 'refresh'
    );

    $panels[] = array(
        'id' => 'corpus_panel_slideshow',
        'title' => __('Slideshow','corpus'),
        'description' => '',
        'priority' => 70,
    );

    $sections[] = array(
        'id' => 'corpus_section_slideshow_slide_1',
        'title' => __('Slide 1','corpus'),
        'description' => '',
        'panel' => 'corpus_panel_slideshow',
        'priority' => 100,
        'shortname' => 'section_slideshow_slide_1',
    );

    $options[] = array(
        'id' => 'slide_img_1',
        'default' => esc_url(CORPUS_GLOBAL_IMAGES_URL . 'hot-air-balloon.jpg'),
        'label' => __('Slide Image','corpus'),
        'description' => '',
        'type' => 'media_upload',
        'sanitize_type' => 'media_upload',
        'section' => 'section_slideshow_slide_1',
        'extended_class' => 'WP_Customize_Image_Control',
        'choices' => false,
        'transport' => 'refresh'
    );
    
    $options[] = array(
        'id' => 'slide_head_1',
        'default' => __('Elegant and Stylish Theme','corpus'),
        'label' => __('Slide Heading', 'corpus'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'nohtml',
        'section' => 'section_slideshow_slide_1',
        'extended_class' => false,
        'choices' => false,
        'transport' => 'refresh'
    );
    
    $options[] = array(
        'id' => 'slide_text_1',
        'default' => __('Beautiful and Attractive Layout with Theme Options to configure settings easily.','corpus'),
        'label' => __('Slide Content', 'corpus'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'nohtml',
        'section' => 'section_slideshow_slide_1',
        'extended_class' => false,
        'choices' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'slide_button_text_1',
        'default' => __('See Documentation','corpus'),
        'label' => __('Slide Button (Text)', 'corpus'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'nohtml',
        'section' => 'section_slideshow_slide_1',
        'extended_class' => false,
        'choices' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'slide_button_url_1',
        'default' => esc_url(CORPUS_DOCS_URL),
        'label' => __('Slide Button (URL)', 'corpus'),
        'description' => '',
        'type' => 'url',
        'sanitize_type' => 'url',
        'section' => 'section_slideshow_slide_1',
        'extended_class' => false,
        'choices' => false,
        'transport' => 'refresh'
    );    

    $sections[] = array(
        'id' => 'corpus_section_slideshow_slide_2',
        'title' => __('Slide 2','corpus'),
        'description' => '',
        'panel' => 'corpus_panel_slideshow',
        'priority' => 120,
        'shortname' => 'section_slideshow_slide_2',
    );

    $options[] = array(
        'id' => 'slide_img_2',
        'default' => '',
        'label' => __('Slide Image','corpus'),
        'description' => '',
        'type' => 'media_upload',
        'sanitize_type' => 'media_upload',
        'section' => 'section_slideshow_slide_2',
        'extended_class' => 'WP_Customize_Image_Control',
        'choices' => false,
        'transport' => 'refresh'
    );
    
    $options[] = array(
        'id' => 'slide_head_2',
        'default' => '',
        'label' => __('Slide Heading', 'corpus'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'nohtml',
        'section' => 'section_slideshow_slide_2',
        'extended_class' => false,
        'choices' => false,
        'transport' => 'refresh'
    );
    
    $options[] = array(
        'id' => 'slide_text_2',
        'default' => '',
        'label' => __('Slide Content', 'corpus'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'nohtml',
        'section' => 'section_slideshow_slide_2',
        'extended_class' => false,
        'choices' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'slide_button_text_2',
        'default' => '',
        'label' => __('Slide Button (Text)', 'corpus'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'nohtml',
        'section' => 'section_slideshow_slide_2',
        'extended_class' => false,
        'choices' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'slide_button_url_2',
        'default' => '',
        'label' => __('Slide Button (URL)', 'corpus'),
        'description' => '',
        'type' => 'url',
        'sanitize_type' => 'url',
        'section' => 'section_slideshow_slide_2',
        'extended_class' => false,
        'choices' => false,
        'transport' => 'refresh'
    );    

    $sections[] = array(
        'id' => 'corpus_section_slideshow_settings',
        'title' => __('Settings','corpus'),
        'description' => '',
        'panel' => 'corpus_panel_slideshow',
        'priority' => 130,
        'shortname' => 'section_slideshow_settings',
    );

    $options[] = array(
        'id' => 'slide_speed',
        'default' => 5000,
        'label' => __('Slide Speed (microseconds)', 'corpus'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'nohtml',
        'section' => 'section_slideshow_settings',
        'extended_class' => false,
        'choices' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'slide_ani_speed',
        'default' => 700,
        'label' => __('Slide Animation Speed (microseconds)', 'corpus'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'nohtml',
        'section' => 'section_slideshow_settings',
        'extended_class' => false,
        'choices' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'disable_slide_nav',
        'default' => false,
        'label' => __('Disable Slide Navigation', 'corpus'),
        'description' => '',
        'type' => 'checkbox',
        'sanitize_type' => 'checkbox',
        'section' => 'section_slideshow_settings',
        'extended_class' => false,
        'choices' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'disable_smooth_height',
        'default' => false,
        'label' => __('Disable Smooth Height', 'corpus'),
        'description' => '',
        'type' => 'checkbox',
        'sanitize_type' => 'checkbox',
        'section' => 'section_slideshow_settings',
        'extended_class' => false,
        'choices' => false,
        'transport' => 'refresh'
    );


    $options[] = array(
        'id' => 'disable_slide_nav',
        'default' => false,
        'label' => __('Disable Slide Navigation', 'corpus'),
        'description' => '',
        'type' => 'checkbox',
        'sanitize_type' => 'checkbox',
        'section' => 'section_slideshow_settings',
        'extended_class' => false,
        'choices' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'slide_animation_type',
        'default' => 'fade',
        'label' => __('Animation Type', 'corpus'),
        'description' => '',
        'type' => 'select',
        'sanitize_type' => 'select',
        'section' => 'section_slideshow_settings',
        'extended_class' => false,
        'choices' => array('fade' => __('fade', 'corpus'), 'slide' => __('slide', 'corpus')),
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'slide_dir',
        'default' => 'horizontal',
        'label' => __('Slideshow Direction', 'corpus'),
        'description' => '',
        'type' => 'select',
        'sanitize_type' => 'select',
        'section' => 'section_slideshow_settings',
        'extended_class' => false,
        'choices' => array('horizontal' => __('horizontal', 'corpus'), 'vertical' => __('vertical', 'corpus')),
        'transport' => 'refresh'
    );

    $panels[] = array(
        'id' => 'corpus_panel_headbox',
        'title' => __('Headbox','corpus'),
        'description' => '',
        'priority' => 75,
    );

    $sections[] = array(
        'id' => 'corpus_section_headbox_col_1',
        'title' => __('Column 1','corpus'),
        'description' => '',
        'panel' => 'corpus_panel_headbox',
        'priority' => 100,
        'shortname' => 'section_headbox_col_1',
    );

    $options[] = array(
        'id' => 'head_box_title_1',
        'default' => __('Suspendisse Efficitur Fringilla', 'corpus'),
        'label' => __('Headbox Title', 'corpus'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'nohtml',
        'section' => 'section_headbox_col_1',
        'extended_class' => false,
        'choices' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'head_box_content_1',
        'default' => __('Felis non dui efficitur suscipit. Nulla gravida dolor quis tellus mattis, vel viverra risus tincidunt. Quisque in luctus lorem.', 'corpus'),
        'label' => __('Headbox Content', 'corpus'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'nohtml',
        'section' => 'section_headbox_col_1',
        'extended_class' => false,
        'choices' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'head_box_button_text_1',
        'default' => __('Read more', 'corpus'),
        'label' => __('Headbox Button (Text)', 'corpus'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'nohtml',
        'section' => 'section_headbox_col_1',
        'extended_class' => false,
        'choices' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'head_box_button_url_1',
        'default' => '',
        'label' => __('Headbox Button (URL)', 'corpus'),
        'description' => '',
        'type' => 'url',
        'sanitize_type' => 'url',
        'section' => 'section_headbox_col_1',
        'extended_class' => false,
        'choices' => false,
        'transport' => 'refresh'
    );

    $sections[] = array(
        'id' => 'corpus_section_headbox_col_2',
        'title' => __('Column 2','corpus'),
        'description' => '',
        'panel' => 'corpus_panel_headbox',
        'priority' => 110,
        'shortname' => 'section_headbox_col_2',
    );

    $options[] = array(
        'id' => 'head_box_title_2',
        'default' => __('Commodo Cursus Odio','corpus'),
        'label' => __('Headbox Title', 'corpus'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'nohtml',
        'section' => 'section_headbox_col_2',
        'extended_class' => false,
        'choices' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'head_box_content_2',
        'default' => __('Morbi lectus mi, molestie et blandit ut, finibus a est. Nullam at ligula in urna mollis dictum. Nullam aliquam pulvinar.','corpus'),
        'label' => __('Headbox Content', 'corpus'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'nohtml',
        'section' => 'section_headbox_col_2',
        'extended_class' => false,
        'choices' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'head_box_button_text_2',
        'default' => __('Read more','corpus'),
        'label' => __('Headbox Button (Text)', 'corpus'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'nohtml',
        'section' => 'section_headbox_col_2',
        'extended_class' => false,
        'choices' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'head_box_button_url_2',
        'default' => '',
        'label' => __('Headbox Button (URL)', 'corpus'),
        'description' => '',
        'type' => 'url',
        'sanitize_type' => 'url',
        'section' => 'section_headbox_col_2',
        'extended_class' => false,
        'choices' => false,
        'transport' => 'refresh'
    );

    $sections[] = array(
        'id' => 'corpus_section_headbox_col_3',
        'title' => __('Column 3','corpus'),
        'description' => '',
        'panel' => 'corpus_panel_headbox',
        'priority' => 120,
        'shortname' => 'section_headbox_col_3',
    );

    $options[] = array(
        'id' => 'head_box_title_3',
        'default' => __('Vestibulum Vitae Dictum','corpus'),
        'label' => __('Headbox Title', 'corpus'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'nohtml',
        'section' => 'section_headbox_col_3',
        'extended_class' => false,
        'choices' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'head_box_content_3',
        'default' => __('Etiam eu sem pretium, sodales nulla in, elementum lacus. Vestibulum vitae elit dictum, pellentesque massa sed.','corpus'),
        'label' => __('Headbox Content', 'corpus'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'nohtml',
        'section' => 'section_headbox_col_3',
        'extended_class' => false,
        'choices' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'head_box_button_text_3',
        'default' => __('Read more','corpus'),
        'label' => __('Headbox Button (Text)', 'corpus'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'nohtml',
        'section' => 'section_headbox_col_3',
        'extended_class' => false,
        'choices' => false,
        'transport' => 'refresh'
    );
    
    $options[] = array(
        'id' => 'head_box_button_url_3',
        'default' => '',
        'label' => __('Headbox Button (URL)', 'corpus'),
        'description' => '',
        'type' => 'url',
        'sanitize_type' => 'url',
        'section' => 'section_headbox_col_3',
        'extended_class' => false,
        'choices' => false,
        'transport' => 'refresh'
    );
    
    $sections[] = array(
        'id' => 'corpus_section_headbox_col_4',
        'title' => __('Column 4','corpus'),
        'description' => '',
        'panel' => 'corpus_panel_headbox',
        'priority' => 130,
        'shortname' => 'section_headbox_col_4',
    );

    $options[] = array(
        'id' => 'head_box_title_4',
        'default' => __('Nullam Aliquam Pulvinar','corpus'),
        'label' => __('Headbox Title', 'corpus'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'nohtml',
        'section' => 'section_headbox_col_4',
        'extended_class' => false,
        'choices' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'head_box_content_4',
        'default' => __('Tellus mattis vel viverra risus tincidunt. Quisque in luctus lorem ut finibus a est molestie et blandit vitae elit dictum.','corpus'),
        'label' => __('Headbox Content', 'corpus'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'nohtml',
        'section' => 'section_headbox_col_4',
        'extended_class' => false,
        'choices' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'head_box_button_text_4',
        'default' => __('Read more','corpus'),
        'label' => __('Headbox Button (Text)', 'corpus'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'nohtml',
        'section' => 'section_headbox_col_4',
        'extended_class' => false,
        'choices' => false,
        'transport' => 'refresh'
    );
    
    $options[] = array(
        'id' => 'head_box_button_url_4',
        'default' => '',
        'label' => __('Headbox Button (URL)', 'corpus'),
        'description' => '',
        'type' => 'url',
        'sanitize_type' => 'url',
        'section' => 'section_headbox_col_4',
        'extended_class' => false,
        'choices' => false,
        'transport' => 'refresh'
    );
    
    $panels[] = array(
        'id' => 'corpus_panel_colors',
        'title' => __('Colors','corpus'),
        'description' => '',
        'priority' => 80,
    );

    $sections[] = array(
        'id' => 'corpus_section_colors_global',
        'title' => __('Global','corpus'),
        'description' => '',
        'panel' => 'corpus_panel_colors',
        'priority' => 100,
        'shortname' => 'section_colors_global',
    );

    $sections[] = array(
        'id' => 'corpus_section_colors_header',
        'title' => __('Header','corpus'),
        'description' => '',
        'panel' => 'corpus_panel_colors',
        'priority' => 101,
        'shortname' => 'section_colors_header',
    );

    $options[] = array(
        'id' => 'color_site_title',
        'default' => '#555555',
        'label' => __('Site Title Color','corpus'),
        'description' => '',
        'type' => 'color',
        'sanitize_type' => 'color',
        'section' => 'section_colors_header',
        'extended_class' => 'WP_Customize_Color_Control',
        'choices' => false,
        'transport' => 'postMessage'
    );
    
    $options[] = array(
        'id' => 'color_site_desc',
        'default' => '#555555',
        'label' => __('Site Description Color','corpus'),
        'description' => '',
        'type' => 'color',
        'sanitize_type' => 'color',
        'section' => 'section_colors_header',
        'extended_class' => 'WP_Customize_Color_Control',
        'choices' => false,
        'transport' => 'postMessage'
    );

    $sections[] = array(
        'id' => 'corpus_section_colors_post',
        'title' => __('Posts/Pages','corpus'),
        'description' => '',
        'panel' => 'corpus_panel_colors',
        'priority' => 102,
        'shortname' => 'section_colors_posts',
    );


    $options[] = array(
        'id' => 'color_p_title',
        'default' => '#000000',
        'label' => __('Post Title Color (Page/Post)','corpus'),
        'description' => '',
        'type' => 'color',
        'sanitize_type' => 'color',
        'section' => 'section_colors_posts',
        'extended_class' => 'WP_Customize_Color_Control',
        'choices' => false,
        'transport' => 'postMessage'
    );

    $options[] = array(
        'id' => 'color_p_meta',
        'default' => '#000000',
        'label' => __('Post Meta Color (Page/Posts)','corpus'),
        'description' => '',
        'type' => 'color',
        'sanitize_type' => 'color',
        'section' => 'section_colors_posts',
        'extended_class' => 'WP_Customize_Color_Control',
        'choices' => false,
        'transport' => 'postMessage'
    );

    $options[] = array(
        'id' => 'color_p_content',
        'default' => '#000000',
        'label' => __('Post Content Color (Page/Posts)','corpus'),
        'description' => '',
        'type' => 'color',
        'sanitize_type' => 'color',
        'section' => 'section_colors_posts',
        'extended_class' => 'WP_Customize_Color_Control',
        'choices' => false,
        'transport' => 'postMessage'
    );

    $sections[] = array(
        'id' => 'corpus_section_colors_blog',
        'title' => __('Blog','corpus'),
        'description' => '',
        'panel' => 'corpus_panel_colors',
        'priority' => 103,
        'shortname' => 'section_colors_blog',
    );

    $options[] = array(
        'id' => 'color_blog_p_title',
        'default' => '#444444',
        'label' => __('Post Title Color (Blog)','corpus'),
        'description' => '',
        'type' => 'color',
        'sanitize_type' => 'color',
        'section' => 'section_colors_blog',
        'extended_class' => 'WP_Customize_Color_Control',
        'choices' => false,
        'transport' => 'postMessage'
    );

    $options[] = array(
        'id' => 'color_blog_p_meta',
        'default' => '#000000',
        'label' => __('Post Meta Color (Blog)','corpus'),
        'description' => '',
        'type' => 'color',
        'sanitize_type' => 'color',
        'section' => 'section_colors_blog',
        'extended_class' => 'WP_Customize_Color_Control',
        'choices' => false,
        'transport' => 'postMessage'
    );

    $options[] = array(
        'id' => 'color_blog_p_content',
        'default' => '#000000',
        'label' => __('Post Content Color (Blog)','corpus'),
        'description' => '',
        'type' => 'color',
        'sanitize_type' => 'color',
        'section' => 'section_colors_blog',
        'extended_class' => 'WP_Customize_Color_Control',
        'choices' => false,
        'transport' => 'postMessage'
    );

    $panels[] = array(
        'id' => 'corpus_panel_social',
        'title' => __('Social','corpus'),
        'description' => '',
        'priority' => 100,
    );

    $sections[] = array(
        'id' => 'corpus_section_social_profiles',
        'title' => __('Social Profiles','corpus'),
        'description' => '',
        'panel' => 'corpus_panel_social',
        'priority' => 100,
        'shortname' => 'section_social_profiles',
    );

    $options[] = array(
        'id' => 'facebook',
        'default' => '',
        'label' => __('Facebook', 'corpus'),
        'description' => '',
        'type' => 'url',
        'sanitize_type' => 'url',
        'section' => 'section_social_profiles',
        'extended_class' => false,
        'choices' => false,
        'transport' => 'refresh'
    );
    
    $options[] = array(
        'id' => 'twitter',
        'default' => '',
        'label' => __('Twitter','corpus'),
        'description' => '',
        'type' => 'url',
        'sanitize_type' => 'url',
        'section' => 'section_social_profiles',
        'extended_class' => false,
        'choices' => false,
        'transport' => 'refresh'
    );
    
    $options[] = array(
        'id' => 'rss',
        'default' => '',
        'label' => __('RSS','corpus'),
        'description' => '',
        'type' => 'url',
        'sanitize_type' => 'url',
        'section' => 'section_social_profiles',
        'extended_class' => false,
        'choices' => false,
        'transport' => 'refresh'
    );

    $sections[] = array(
        'id' => 'corpus_section_about',
        'title' => __('About Corpus Theme','corpus'),
        'description' => '',
        'panel' => '',
        'priority' => 120,
        'shortname' => 'section_about',
    );

    $options[] = array(
        'id' => 'important_links',
        'default' => '',
        'label' => '',
        'description' => '',
        'type' => 'important_links',
        'sanitize_type' => 'none',
        'section' => 'section_about',
        'extended_class' => 'Corpus_Customize_Important_Links_Control',
        'choices' => false,
        'transport' => 'refresh'
    );


    switch($type):
        case 'panels':
            return $panels;
        case 'sections':
            return $sections;
        case 'options':
            return $options;
        default:
            return;
    endswitch;
}

/**
 * Build Theme Customizer Options
 * 
 * @param type $wp_customize
 */
function corpus_customizer_setup($wp_customize) {
    
    /**
     * Exit if $wp_customize does not exist.
     */
    if( !isset($wp_customize)) {
        return;
    }
    
    $panels = corpus_customizer_options('panels');
    $sections = corpus_customizer_options('sections');
    $options = corpus_customizer_options('options');
    
    foreach($panels as $panel) {
        $wp_customize->add_panel($panel['id'], array(
            'title' => $panel['title'],
            'description' => $panel['description'],
            'theme_supports' => '',
            'capability' => 'edit_theme_options',
            'priority' => $panel['priority'],
        ));
    }
    
    foreach($sections as $section) {
        $wp_customize->add_section($section['id'], array(
            'title' => $section['title'],
            'description' => $section['description'],
            'panel' => $section['panel'],
            'priority' => $section['priority'],
        ));
    }
    
    foreach($options as $option) {
        $wp_customize->add_setting('corpus_theme_lite['.$option['id'].']', array(
            'type' => 'option',
            'default' => $option['default'],
            'capability' => 'edit_theme_options',
            'sanitize_callback' => corpus_get_sanitize_filter($option['sanitize_type']),
            'transport' => $option['transport'],
        ));

        if (!$option['extended_class']) {
            $wp_customize->add_control('corpus_theme_lite[' . $option['id'] . ']', array(
                'label' => $option['label'],
                'description' => $option['description'],
                'type' => $option['type'],
                'section' => corpus_get_sections($option['section']),
                'setting' => $option['id'],
                'choices' => $option['choices']
            ));
        } else {
            $wp_customize->add_control(new $option['extended_class'](
                $wp_customize, 'corpus_theme_lite[' . $option['id'] . ']', array(
                'label' => $option['label'],
                'description' => $option['description'],
                'section' => corpus_get_sections($option['section']),
                'setting' => $option['id'],
                'choices' => $option['choices']
                )
            ));
        }
    }
	
    // WP Defaults
    $wp_customize->get_section('title_tagline')->panel = 'corpus_panel_general';
    $wp_customize->get_section('static_front_page')->panel = 'corpus_panel_general';
    $wp_customize->get_control('background_color')->section = 'corpus_section_colors_global';
    $wp_customize->get_control('background_image')->section = 'corpus_section_colors_global';
    $wp_customize->remove_section('background_image');
}
add_action( 'customize_register', 'corpus_customizer_setup' );



/**
 * Enqueue Customizer Live Preview Scripts
 * 
 * @todo complete this
 */
function corpus_live_preview_scripts(){
    wp_enqueue_script('corpus-themecustomizer-live-preview', CORPUS_ADMIN_JS_URL . 'customizer.js', array('jquery', 'customize-preview'),'', true);
}
add_action('customize_preview_init','corpus_live_preview_scripts');



/**
 * Enqueue admin panel CSS - (Primarily for customizer)
 *
 * @since 1.0
 */
function corpus_admin_panel_style($hook) {
    
    if($hook == 'widgets.php'){
        wp_enqueue_style('corpus-admin-panel-css', CORPUS_ADMIN_CSS_URL . 'admin.css');
        wp_enqueue_script('corpus-admin-panel-js', CORPUS_ADMIN_JS_URL . 'admin.js', array('jquery'), '1.0.0', TRUE);
        wp_localize_script('corpus-admin-panel-js', 'corpusCustomizerUpgradeVars', array('upgrade_text' => __('Upgrade to Premium', 'corpus')));
    }
}
add_action( 'admin_enqueue_scripts', 'corpus_admin_panel_style' );



/**
 * Gets the value of an option.
 * Also sets caching for default options.
 * 
 * @global array $corpus_options Options cache.
 * @param string $id Option ID
 * @return string Option Value
 */
function corpus_get_option($id = NULL) {
    global $corpus_options;
    
    // Global array exists. Get value from memory
    if($corpus_options && array_key_exists($id, $corpus_options)) {
        return $corpus_options[$id];
    } else {
        
        // No value in Memory. Try fetching from DB
        $saved_options = get_option('corpus_theme_lite');
        
        if($saved_options && array_key_exists($id, $saved_options)){
            
            $corpus_options = $saved_options;
            return $corpus_options[$id];
            
        } else {
            
            // No value in Memory or DB. Get it from default options.
            $sane_options = corpus_customizer_options('options');
            $corpus_options = array();
            
            foreach($sane_options as $options) {
                if($id == $options['id'] ){
                    $corpus_options[$options['id']] = $options['default'];
                    break;
                }                
            }

            return $corpus_options[$id];

        }
    }
}


/**
 * Returns sanitization filter functions
 * 
 * @param string $type The type of input to be sanitized
 * @return string Sanitization function name
 */
function corpus_get_sanitize_filter($type){
    $filters = array(
        'html' => 'corpus_sanitize_html',
        'nohtml' => 'corpus_sanitize_nohtml', // Only Text
        'url' => 'corpus_sanitize_url',
        'checkbox' => 'corpus_sanitize_checkbox',
        'select' => 'corpus_sanitize_select',
        'radio' => 'corpus_sanitize_select',
        'color' => 'corpus_sanitize_hex_color',
        'media_upload' => 'corpus_sanitize_media_upload',
        'none' => 'corpus_sanitize_none'
    );

    return $filters[$type];
}


/**
 * Returns the section based on shortname
 * 
 * @param string $shortname
 * @return string
 */
function corpus_get_sections($shortname) {
    $sections = corpus_customizer_options('sections');
    foreach ($sections as $section) {
        if($section['shortname'] == $shortname){
            return $section['id'];
        }
    }
}


/**
 * Sanitization Function for No HTML content (only text)
 *
 * @param string $nohtml
 * @return string
 */
function corpus_sanitize_nohtml($nohtml) {
    return wp_filter_nohtml_kses( $nohtml );
}


/**
 * Sanitization Function for only HTML content
 *
 * @param string $html
 * @return string
 */
function corpus_sanitize_html($html) {
    return wp_filter_post_kses( $html );
}


/**
 * Sanitization Function for URL
 * 
 * @param string $url
 * @return string
 */
function corpus_sanitize_url($url){
    return esc_url_raw($url);
}


/**
 * Sanitization Function for Checkbox
 * 
 * @param boolean $checked
 * @return boolean
 */
function corpus_sanitize_checkbox($checked){
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
}


/**
 * Sanitization Function for Select/Radio
 * 
 * @param String $input Slug to sanitize
 * @param WP_Customize_Setting $setting Setting instance
 * @return String Sanitized slug if it is a valid choice; otherwise, the setting default
 */
function corpus_sanitize_select($input, $setting) {
    // Ensure input is a slug.
    $input = sanitize_key($input);

    // Get list of choices from the control associated with the setting.
    $choices = $setting->manager->get_control($setting->id)->choices;

    // If the input is a valid key, return it; otherwise, return the default.
    return ( array_key_exists($input, $choices) ? $input : $setting->default );
}


/**
 * Sanitization Function for Hex Colors
 * 
 * @param string HEX color to sanitize
 * @param WP_Customize_Setting Setting instance
 */
function corpus_sanitize_hex_color($hex_color, $setting){
    // Sanitize $input as a hex value without the hash prefix.
    $hex_color = sanitize_hex_color($hex_color);

    // If $input is a valid hex value, return it; otherwise, return the default.
    return ( ( $hex_color ) ? $hex_color : $setting->default );
}

/**
 * Sanitization Function for Image Upload via Media Manager
 * 
 * @param string Image filename
 * @param WP_Customize_Setting Setting instance
 * @return string The image filename if the extension is allowed; otherwise, the setting default.
 */
function corpus_sanitize_media_upload( $image, $setting ) {

    /*
     * Array of valid image file types.
     *
     * The array includes image mime types that are included in wp_get_mime_types()
     */
    $mimes = array(
        'jpg|jpeg|jpe' => 'image/jpeg',
        'gif'          => 'image/gif',
        'png'          => 'image/png',
        'bmp'          => 'image/bmp',
        'tif|tiff'     => 'image/tiff',
        'ico'          => 'image/x-icon'
    );

    // Return an array with file extension and mime_type.
    $file = wp_check_filetype( $image, $mimes );

    // If $image has a valid mime_type, return it; otherwise, return the default.
    return ( $file['ext'] ? $image : $setting->default );
}


/**
 * Sanitizes nothing
 * 
 * This function is not used to sanitize customizer options.
 * 
 * It is used for displaying `About Corpus Theme` section at the bottom of Customizer.
 * 
 * @see Corpus_Customize_Important_Links_Control
 */
function corpus_sanitize_none(){
    return;
}