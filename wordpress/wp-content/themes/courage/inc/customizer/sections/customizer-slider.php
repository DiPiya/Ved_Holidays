<?php
/**
 * Register Post Slider section, settings and controls for Theme Customizer
 *
 */

// Add Theme Colors section to Customizer
add_action( 'customize_register', 'courage_customize_register_slider_settings' );

function courage_customize_register_slider_settings( $wp_customize ) {

	// Add Sections for Slider Settings
	$wp_customize->add_section( 'courage_section_slider', array(
        'title'    => esc_html__( 'Post Slider', 'courage' ),
        'priority' => 50,
		'panel' => 'courage_options_panel' 
		)
	);

	// Add settings and controls for Post Slider
	$wp_customize->add_setting( 'courage_theme_options[slider_active_header]', array(
        'default'           => '',
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'esc_attr'
        )
    );
    $wp_customize->add_control( new Courage_Customize_Header_Control(
        $wp_customize, 'courage_control_slider_activated', array(
            'label' => esc_html__( 'Activate Post Slider', 'courage' ),
            'section' => 'courage_section_slider',
            'settings' => 'courage_theme_options[slider_active_header]',
            'priority' => 1
            )
        )
    );
	$wp_customize->add_setting( 'courage_theme_options[slider_active_magazine]', array(
        'default'           => false,
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'courage_sanitize_checkbox'
		)
	);
    $wp_customize->add_control( 'courage_control_slider_active_magazine', array(
        'label'    => esc_html__( 'Show Slider on Magazine Homepage', 'courage' ),
        'section'  => 'courage_section_slider',
        'settings' => 'courage_theme_options[slider_active_magazine]',
        'type'     => 'checkbox',
		'priority' => 2
		)
	);
	$wp_customize->add_setting( 'courage_theme_options[slider_active_blog]', array(
        'default'           => false,
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'courage_sanitize_checkbox'
		)
	);
    $wp_customize->add_control( 'courage_control_slider_active_blog', array(
        'label'    => esc_html__( 'Show Slider on posts page', 'courage' ),
        'section'  => 'courage_section_slider',
        'settings' => 'courage_theme_options[slider_active_blog]',
        'type'     => 'checkbox',
		'priority' => 3
		)
	);
	
	// Select Featured Posts
	$wp_customize->add_setting( 'courage_theme_options[featured_posts_header]', array(
        'default'           => '',
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'esc_attr'
        )
    );
    $wp_customize->add_control( new Courage_Customize_Header_Control(
        $wp_customize, 'courage_control_featured_posts_header', array(
            'label' => esc_html__( 'Select Featured Posts', 'courage' ),
            'section' => 'courage_section_slider',
            'settings' => 'courage_theme_options[featured_posts_header]',
            'priority' => 4,
			'active_callback' => 'courage_slider_activated_callback'
            )
        )
    );
	$wp_customize->add_setting( 'courage_theme_options[featured_posts_description]', array(
        'default'           => '',
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'esc_attr'
        )
    );
    $wp_customize->add_control( new Courage_Customize_Description_Control(
        $wp_customize, 'courage_control_featured_posts_description', array(
			'label'    => esc_html__( 'The slideshow displays all your featured posts. You can easily feature posts by a tag of your choice.', 'courage' ),
            'section' => 'courage_section_slider',
            'settings' => 'courage_theme_options[featured_posts_description]',
            'priority' => 5,
			'active_callback' => 'courage_slider_activated_callback'
            )
        )
    );

	// Add Slider Animation Setting
	$wp_customize->add_setting( 'courage_theme_options[slider_animation]', array(
        'default'           => 'horizontal',
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'courage_sanitize_slider_animation'
		)
	);
    $wp_customize->add_control( 'courage_control_slider_animation', array(
        'label'    => esc_html__( 'Slider Animation', 'courage' ),
        'section'  => 'courage_section_slider',
        'settings' => 'courage_theme_options[slider_animation]',
        'type'     => 'radio',
		'priority' => 9,
		'active_callback' => 'courage_slider_activated_callback',
        'choices'  => array(
            'horizontal' => esc_html__( 'Slide Effect', 'courage' ),
            'fade' => esc_html__( 'Fade Effect', 'courage' )
			)
		)
	);
	
}

?>