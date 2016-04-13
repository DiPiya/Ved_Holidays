<?php
/**
 * Corpus Theme functions and definitions
 * 
 * @package Corpus
 * @since 1.0
 */


/**
 * Corpus Pro Validation
 * 
 * @since 1.0.0
 */
define('CORPUS_PRO', FALSE );


/**
 * Corpus Global JS Directory URL
 * 
 * @since 1.0.0
 */
define('CORPUS_GLOBAL_JS_URL', get_template_directory_uri() . '/assets/global/js/');


/**
 * Corpus Global Images Directory URL
 * 
 * @since 1.0.0
 */
define('CORPUS_GLOBAL_IMAGES_URL', get_template_directory_uri() . '/assets/global/images/');


/**
 * Corpus Global CSS Directory URL
 * 
 * @since 1.0.0
 */
define('CORPUS_GLOBAL_CSS_URL', get_template_directory_uri() . '/assets/global/css/');


/**
 * Corpus Includes Directory Path
 * 
 * @since 1.0.0
 */
define('CORPUS_INCLUDES_DIR' , get_template_directory() . '/includes/' );


/**
 * Customizer call
 */
require_once CORPUS_INCLUDES_DIR . 'customizer.php';



/**
 * Sets up theme defaults and registers support for various theme features
 * 
 * @since 1.0
 */
function corpus_setup() {
    
    global $content_width;
    
    /**
     * Primary content width according to the design and stylesheet.
     */
    if ( ! isset( $content_width ) ) { $content_width = 730; }
    
    /**
     * Makes corpus Theme ready for translation.
     * Translations can be filed in the /languages/ directory
     */
    load_theme_textdomain('corpus', get_template_directory() . '/languages');

    /**
     * Add default posts and comments RSS feed links to head.
     */
    add_theme_support('automatic-feed-links');
    
    /**
     * Add custom background.
     * @todo Put E7E7E7 in a variable and then change it according to the skin
     */
    add_theme_support('custom-background', array('default-color' => 'E7E7E7'));
    
    /**
     * Automatically adds title tag
     */
    add_theme_support('title-tag');
    
    /**
     * Adds supports for Theme menu.
     * Corpus uses wp_nav_menu() in a single location to diaplay one single menu.
     */
    register_nav_menu('primary', __('Primary Menu', 'corpus'));

    /**
     * Add support for Post Thumbnails.
     * Defines a custom name and size for Thumbnails to be used in the theme.
     *
     * Note: In order to use the default theme thumbnail, add_image_size() must be removed
     * and 'corpus-thumb' value must be removed from the_post_thumbnail in the loop file.
     */
    add_theme_support('post-thumbnails');
    add_image_size('corpus-thumb', 212, 141, true);
}
add_action( 'after_setup_theme', 'corpus_setup' );



/**
 * Defines menu values and call the menu itself.
 * The menu is registered using register_nav_menu function in the theme setup.
 * 
 * @since 1.0
 */
function corpus_nav() {
    wp_nav_menu(array(
        'theme_location' => 'primary',
        'container_id' => 'menu',
        'menu_class' => 'sf-menu corpus_menu',
        'menu_id' => 'corpus_menu',
        'fallback_cb' => 'corpus_nav_fallback' // Fallback function in case no menu item is defined.
    ));
}



/**
 * Displays a custom menu in case either no menu is selected or
 * menu does not contains any items or wp_nav_menu() is unavailable.
 * 
 * @since 1.0
 */
function corpus_nav_fallback() {
?>
    <div id="menu">
    	<ul class="sf-menu" id="corpus_menu">
			<?php
            	wp_list_pages( 'title_li=&sort_column=menu_order&depth=3');
            ?>
        </ul>
    </div>
<?php
}



/**
 * Register sidebars one at right and three footer sidebars in a box.
 * 
 * @since 1.0
 */
function corpus_sidebars() {

    // Primary Sidebar
    register_sidebar(array(
        'name' => __('Right Sidebar', 'corpus'),
        'id' => 'right_sidebar',
        'description' => __('Right Sidebar', 'corpus'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));
    
    // Footerbox Sidebar #1
    register_sidebar(array(
        'name' => __('Footerbox Sidebar #1', 'corpus'),
        'id' => 'footerbox_sidebar_1',
        'description' => __('Footerbox Sidebar #1', 'corpus'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));
    
    // Footerbox Sidebar #2
    register_sidebar(array(
        'name' => __('Footerbox Sidebar #2', 'corpus'),
        'id' => 'footerbox_sidebar_2',
        'description' => __('Footerbox Sidebar #2', 'corpus'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));
    
    // Footerbox Sidebar #3
    register_sidebar(array(
        'name' => __('Footerbox Sidebar #3', 'corpus'),
        'id' => 'footerbox_sidebar_3',
        'description' => __('Footerbox Sidebar #3', 'corpus'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));
    
}
add_action( 'widgets_init', 'corpus_sidebars' );



/**
 * Enqueue CSS and JS files
 * 
 * @since 1.0
 */
function corpus_enqueue() {
    wp_enqueue_style('corpus-noto-sans', '//fonts.googleapis.com/css?family=Noto+Sans:400,400italic,700,700italic');
    wp_enqueue_style('corpus-noto-serif', '//fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700,700italic');
    wp_enqueue_style('corpus-font-awesome', CORPUS_ADMIN_CSS_URL . 'font-awesome.4.5.0.css');
    wp_enqueue_style('corpus-stylesheet', get_stylesheet_uri(), false, corpus_get_theme_info('Version'), 'all' );
    
    // Enqueue (comment-reply )Javascript in case of threaded comments.
    if (is_singular() && comments_open() && get_option('thread_comments')) :
        wp_enqueue_script('comment-reply');
    endif;

    wp_enqueue_script('corpus-flexslider', CORPUS_GLOBAL_JS_URL . 'jquery.flexslider-min.js', array( 'jquery' ), '2.1.0', true);
    wp_localize_script('corpus-flexslider', 'corpus_slide_vars', array(
                    'slideshowSpeed' => esc_js(corpus_get_option('slide_speed')),
                    'animationSpeed' => esc_js(corpus_get_option('slide_ani_speed')),
                    'directionNav' => (bool) esc_js(corpus_get_option('disable_slide_nav')) ? '' : 'true',
                    'smoothHeight' => (bool) esc_js(corpus_get_option('disable_smooth_height')) ? '' : 'true',
                    'animation' => esc_js(corpus_get_option('slide_animation_type')),
                    'direction' => esc_js(corpus_get_option('slide_dir')),
	));
    wp_enqueue_script('corpus-superfish', CORPUS_GLOBAL_JS_URL . 'superfish.min.js', array( 'jquery' ), '1.4.8', true);
    wp_enqueue_script('jquery-color');
    wp_enqueue_script('corpus-custom', CORPUS_GLOBAL_JS_URL . 'custom.js', array( 'jquery' ), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'corpus_enqueue');



/**
 * Hooks respond.js for IE in the wp_head hook.
 * 
 * @since 1.0
 */
function corpus_enqueue_ie_script() {
    echo "\n";
    ?><!--[if lt IE 9]><script type='text/javascript' src='<?php echo esc_url(CORPUS_GLOBAL_JS_URL . 'respond.min.js?ver=1.4.2') ?>'></script><![endif]--><?php
    echo "\n";
    ?><!--[if lt IE 9]><script type='text/javascript' src='<?php echo esc_url(CORPUS_GLOBAL_JS_URL . 'html5shiv.min.js') ?>'></script><![endif]--><?php
    echo "\n";
}
add_action('wp_head', 'corpus_enqueue_ie_script');



/**
 * Returns the theme info from WP_Theme object
 * 
 * @link https://codex.wordpress.org/Function_Reference/wp_get_theme WPORG documentation
 * @param string $property Queried Property
 * @return mixed
 */
function corpus_get_theme_info($property){
    $theme = wp_get_theme();
    return $theme->get($property);
}



/**
 * Defines the number of characters for post excerpts
 * and is added to excerpt_length filter.
 * 
 * @since 1.0
 */
function corpus_excerpt_length( $length ) {
	return 43;
}
add_filter( 'excerpt_length', 'corpus_excerpt_length' );



/**
 * Defines the text for the (read more) link for post excerpts
 * and is added to excerpt_more filter.
 * 
 * @since 1.0
 */
function corpus_auto_excerpt_more( $more ) {
	return '&#8230;' ;
}
add_filter( 'excerpt_more', 'corpus_auto_excerpt_more' );



/**
 * Used to return body classes
 * 
 * @param array $classes
 * @return array
 * @since 1.0
 */
function corpus_body_class($classes) {
    
    if(is_single()):
        
        $classes[] = 'single-template';
        $classes[] = 'post-template';
    
    elseif(is_page()):
        
        $classes[] = 'page-template';
        $classes[] = 'post-template';

    elseif(is_front_page()):
        
        $classes[] = 'home-template';
    
    elseif(is_home()):
        
        $classes[] = 'home-template';
        $classes[] = 'blog-template';
    
    elseif (is_archive()):
        
        $classes[] = 'archive-template';
    
    elseif(is_404()):
        
        $classes[] = 'archive-template';
        $classes[] = 'empty-template';
    
    elseif(is_search()):
        
        $classes[] = 'archive-template';
        $classes[] = 'search-template';
    
    endif;

        $classes[] = 'orange';
        $classes[] = 'right_sidebar';
        $classes[] = 'theme-wide';
        $classes[] = 'thumbnail-left';
    
    return $classes;
}
add_filter('body_class', 'corpus_body_class');



/**
 * Returns social icons individually
 * 
 * @param string $option Name of option in DB
 * @param string $title
 * @param string $icon Name of icon as in mdf-[icon]
 * @return string
 * 
 * @since 1.0.0
 */
function corpus_get_social_section_individual_icon($option, $title, $icon) {
    $output = '';

    if(corpus_get_option($option)){
        $output .= '<a href="'.esc_url(corpus_get_option($option)).'" title="'.esc_attr($title).'" target="_blank"><i class="mdf mdf-'.esc_attr($icon).'"></i></a>';
    }
    return $output;
    
}



/**
 * Used to display social section
 * 
 * @since 1.0
 */
function corpus_social_section_show() {
    
    if(!corpus_get_option('disable_social_section')):

    $output = false;
    
    $output .= corpus_get_social_section_individual_icon('facebook', __('Facebook', 'corpus'), 'facebook');
    $output .= corpus_get_social_section_individual_icon('twitter', __('Twitter', 'corpus'), 'twitter');
    $output .= corpus_get_social_section_individual_icon('rss', __('RSS feed', 'corpus'), 'rss');
    
    ?>            
                
                <?php if($output !== false): ?>
                <div id="social-section" class="social-section">
                    <?php echo $output ?>
                </div>
                <?php endif ?>
            
            <div class="socialicons-mi"></div><div class="socialicons-mo"></div>

<?php
    endif;
}



/**
 * Displays the content in case of 404 page, empty search query
 * and any other query which does not output any result.
 * 
 * Both heading and content of the page will be displayed with a
 * search form. Any modification to this module will effect only
 * 404 error or related pages.
 * 
 * @since 1.0
 */
function corpus_404_show(){
?>
        <div class="archive-meta-container">
            <div class="archive-head">
                <?php if (is_404()) : ?>
                    <h1><?php _e('Ooops! Nothing Found', 'corpus'); ?></h1>
                <?php elseif (is_search()) : ?>
                    <h1><?php printf(__('Nothing found for:', 'corpus').' %s', get_search_query()); ?></h1>
                <?php else : ?>
                    <h1><?php printf(__('Nothing found for:', 'corpus').' %s', single_term_title('', false)); ?></h1>
                <?php endif; ?>
            </div>
        </div><!-- Archive Meta Container ends -->
        
        <div class="archive-loop-container archive-empty">
            <div class="archive-excerpt">
                <p><?php _e('Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'corpus'); ?></p>
                <?php get_search_form(); ?>
            </div>
        </div>
<?php }



/**
 * Decides and returns the accurate 'text' to be displayed.
 * 
 * @return string
 * @since 1.0
 */
function corpus_date_text() {
    if (is_date()):
        if (is_day()):
            $date_text = __('Day', 'corpus');
        elseif (is_month()):
            $date_text = __('Month', 'corpus');
        elseif (is_year()):
            $date_text = __('Year', 'corpus');
        else:
            $date_text = __('Period', 'corpus');
        endif;

        return $date_text;

    endif;
}



/**
 * Displays the navigation links for the archive pages. Is only
 * applicable if the total number of pages is more than 'one'.
 * 
 * @since 1.0
 */
function corpus_archive_nav() {
    
    global $wp_query;

    if ($wp_query->max_num_pages > 1): ?>
        
        <div class="archive-nav grid-col-16 clearfix">
            <div class="nav-next"><?php previous_posts_link('<span class="meta-nav">&larr;</span> '.__('Newer posts', 'corpus')); ?></div>
            <div class="nav-previous"><?php next_posts_link(__('Older posts', 'corpus').' <span class="meta-nav">&rarr;</span>'); ?></div>
        </div>
        
<?php endif;
}



/**
 * Displays the navigation links for the posts and pages.
 * 
 * @since 1.0
 */
function corpus_post_nav() {
?>
    <div class="post-nav clearfix">
        <div class="nav-previous"><?php previous_post_link( '%link', '%title <span class="meta-nav"><i class="mdf mdf-caret-right"></i></span>' ) ?></div>
        <div class="nav-next"><?php next_post_link( '%link', '<span class="meta-nav"><i class="mdf mdf-caret-left"></i></span> %title' ) ?></div>
    </div>
<?php
}



/**
 * Display site title/description or logo
 * 
 * @since 1.0
 */
function corpus_logo() {
?>
	<?php if(!corpus_get_option('site_logo')): ?>
        <div id="site-title" class="site-title">
            <a href="<?php echo esc_url( home_url( '/' ) ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ) . ' | ' . esc_attr( get_bloginfo('description') ) ?>" rel="<?php _e('home', 'corpus') ?>"><?php echo esc_html(get_bloginfo( 'name', 'display' )) ?></a>
        </div>
        <?php if(!corpus_get_option('disable_site_desc')): ?><div id="site-description" class="site-description"><?php echo esc_html( get_bloginfo( 'description' ) ) ?></div><?php endif ?>
	<?php else: ?>
        <div id="site-title" class="site-title">
            <a href="<?php echo esc_url( home_url( '/' ) ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ) . ' | ' . esc_attr( get_bloginfo('description') ) ?>" rel="<?php _e('home', 'corpus') ?>"><img src="<?php echo esc_url(corpus_get_option('site_logo')) ?>" /></a>
        </div>
	<?php endif ?>
<?php
}



/**
 * Template for comments and pingbacks.
 * 
 * @since 1.0
 */
function corpus_comment_callback( $comment, $args, $depth ) {

  $GLOBALS['comment'] = $comment;
  switch ( $comment->comment_type ):

         case '' :
		 // Proceed with normal comments.
  ?>
  <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
        <?php if ($comment->comment_approved == '0') : ?><div class="comment-awaiting"><em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.', 'corpus'); ?></em></div><?php endif; ?>
        <?php $corpus_get_comment_ID = get_comment_ID() ?>
        <?php $corpus_is_comment_reply = get_comment($corpus_get_comment_ID)->comment_parent ?>
        <?php $corpus_the_comment_author = get_comment_author(get_comment($corpus_get_comment_ID)->comment_parent) ?>

      <div id="comment-<?php comment_ID(); ?>" class="comment-block-container grid-float-left grid-col-16">
          
          
                     <div class="comment-info-container grid-col-4 grid-float-left">
                          <div class="comment-author vcard">
                              <div class="comment-author-avatar-container"><?php echo get_avatar($comment, 125); ?></div>
                              <div class="comment-author-info-container">
                                  <div class="comment-author-name"><?php printf('%s <span class="says"></span>', sprintf('<cite class="fn">%s</cite>', get_comment_author_link())) ?></div>
                                  <div class="comment-meta comment-date"><a href="<?php echo esc_url(get_comment_link($comment->comment_ID)); ?>">(<?php printf('%1$s '.__('ago', 'corpus'), human_time_diff(get_comment_time( 'U' ), current_time( 'timestamp' ))); ?>)</a></div>
                              </div>
                          </div><!-- .comment-author .vcard -->
                     </div>
          
                     <div class="comment-body-container grid-col-12 grid-float-left">
                        <div class="comment-body"><?php comment_text(); ?></div>
                        <div class="reply"><?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?></div>
                        <?php edit_comment_link(__('(Edit)', 'corpus'), '<div class="comment-edit">', '</div>');?>
                     </div>

      </div><!-- #comment-##  -->

<?php
         break;

         case 'pingback' :
         case 'trackback' :
		 // Display trackbacks differently than normal comments.
  ?>

  <li class="post pingback">
      <p><?php _e( 'Pingback:', 'corpus' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'corpus' ), ' ' ); ?></p>

  <?php
         break;

  endswitch;
}



/**
 * Outputs CSS for customizer options
 * 
 * @since 1.0
 */
function corpus_customizer_css() {
    $output = '';
    $options_color = array(
        'color_site_title' => '#wrapper .site-title a',
        'color_site_desc' => '#wrapper .site-description',
        'color_blog_p_title' => '#wrapper .loop-post-title h1 a',
        'color_blog_p_meta' => '#wrapper .loop-post-meta, #wrapper .loop-post-meta .loop-meta-comments a',
        'color_blog_p_content' => '#wrapper .loop-post-excerpt',
        'color_p_title' => '#wrapper .post-title h1',
        'color_p_meta' => '#wrapper .post-meta',
        'color_p_content' => '#wrapper .post-content',
    );

    $output .= "\n" . '<style type="text/css">';

    foreach ($options_color as $option => $location) {
        if (corpus_get_option($option)) {
            $output .= $location . '{color:' . wp_filter_nohtml_kses(corpus_get_option($option)) . ';}';
        }
    }

    $output .= '</style>' . "\n";

    echo $output;
}
add_action('wp_head', 'corpus_customizer_css');



function corpus_wp_readmore_link($button, $text) {
	$post = get_post();

	return '<div class="read-more"><a href="' . get_permalink() . "#more-{$post->ID}\">".__('Read more','corpus')."</a></div>";
}
add_filter('the_content_more_link', 'corpus_wp_readmore_link', 100, 2);