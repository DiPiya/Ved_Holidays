<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet
	$themename = wp_get_theme();
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );
}

function optionsframework_options() {

	$options = array();
	$imagepath =  get_template_directory_uri() . '/images/';
		
	
	//Basic Settings
	
	$options[] = array(
		'name' => __('Basic Options', 'travel-guide'),
		'type' => 'heading');
			
	$options[] = array(
		'name' => __('Site Logo', 'travel-guide'),
		'desc' => __('Leave Blank to use text.', 'travel-guide'),
		'id' => 'logo',
		'class' => '',
		'type' => 'upload');	
		
	$options[] = array(
		'name' => __('Enable Excerpts on Homepage', 'travel-guide'),
		'desc' => __('This will show only a portion of your entire post on the homepage.', 'travel-guide'),
		'id' => 'excerpt1',
		'std' => '0',
		'type' => 'checkbox');					
		
	$options[] = array(
		'name' => __('Copyright Text', 'travel-guide'),
		'desc' => __('It will be displayed in Footer Left.', 'travel-guide'),
		'id' => 'footer_code',
		'std' => '',
		'type' => 'text');	
	
	$options[] = array(
		'name' => "Sidebar Layout",
		'id' => "sidebar-layout",
		'std' => "right",
		'type' => "images",
		'options' => array(
			'left' => $imagepath . '2cl.png',
			'right' => $imagepath . '2cr.png')
	);		

	return $options;
}