<?php
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */
	
if ( !function_exists( 'optionsframework_init' ) ) {
        define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
        require_once get_template_directory() . '/inc/options-framework.php';
}

if ( ! function_exists( 'travel_guide_setup' ) ) :

function travel_guide_setup() {

	load_theme_textdomain( 'travel-guide', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_image_size('travel-thumb',180,130,true);
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'travel-guide' ),
	) );
	add_theme_support( 'post-formats', array( 'image', 'video', 'quote' ) );

	add_theme_support( 'custom-background', apply_filters( 'travel_guide_custom_background_args', array(
		'default-color' => "ffffff",
		'default-image' => get_template_directory_uri()."/images/bg.jpg",
	) ) );
}
endif; // travel_guide_setup
add_action( 'after_setup_theme', 'travel_guide_setup' );

function travel_guide_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'travel-guide' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'travel_guide_widgets_init' );

add_action('optionsframework_custom_scripts', 'travel_guide_custom_scripts');

function travel_guide_custom_scripts() { ?>

<script type="text/javascript">
jQuery(document).ready(function() {

	jQuery('#example_showhidden').click(function() {
  		jQuery('#section-example_text_hidden').fadeToggle(400);
	});
	
	if (jQuery('#example_showhidden:checked').val() !== undefined) {
		jQuery('#section-example_text_hidden').show();
	}
	
});
</script>
 
<?php
}

function travel_guide_style_scripts() {
	wp_enqueue_style( 'TravelGuide-basic-style', get_stylesheet_uri() );
	if ( (function_exists( 'of_get_option' )) && (of_get_option('sidebar-layout', true) != 1) ) {
		if (of_get_option('sidebar-layout', true) ==  'right') {
			wp_enqueue_style( 'TravelGuide-layout', get_template_directory_uri()."/css/layouts/content-sidebar.css" );
		}
		else {
			wp_enqueue_style( 'TravelGuide-layout', get_template_directory_uri()."/css/layouts/sidebar-content.css" );
		}	
	}	
	else {
		wp_enqueue_style( 'TravelGuide-layout', get_template_directory_uri()."/css/layouts/content-sidebar.css" );
	}
	wp_enqueue_style( 'TravelGuide-bootstrap-style', get_template_directory_uri()."/css/bootstrap.min.css", array('TravelGuide-layout') );
	wp_enqueue_style( 'TravelGuide-style', get_template_directory_uri()."/css/main.css", array('TravelGuide-layout') );
	
	wp_enqueue_script( 'TravelGuide-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
			
	wp_enqueue_script('TravelGuide-collapse', get_template_directory_uri() . '/js/collapse.js', array('jquery') );
	
	wp_enqueue_script( 'TravelGuide-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery') );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'TravelGuide-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'travel_guide_style_scripts' );

function travel_guide_custom_header() {
 if ( get_header_image() ) {
 	echo "<style>#masthead {background: url(".get_header_image().");,height:450px, overflow: auto;}</style>";
 	}
}	
add_action('wp_head', 'travel_guide_custom_header');

function travel_guide_nav_menu_args( $args = '' )
{
    $args['container'] = false;
    return $args;
} // function
add_filter( 'wp_page_menu_args', 'travel_guide_nav_menu_args' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom Menu For Bootstrap
 */
require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
