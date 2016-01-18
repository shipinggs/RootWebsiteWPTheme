<?php

// jQuery
function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );

}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );


function my_scripts_loader() {

	// my custom script for root website
	wp_register_script( 'customroot.js', get_template_directory_uri() . '/js/customroot.js');
	wp_enqueue_script( 'customroot.js', false );

}
add_action( 'wp_enqueue_scripts', 'my_scripts_loader');

// stylesheet
function root_resources() {
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'root_resources');

// Theme setup
function roottheme_setup() {

	// Navigation Menus
	register_nav_menus(array(

		'primary' => __('Primary Menu Left'),
		'primary right' => __('Primary Menu Right'),
		'footer' => __('Footer Menu'),
	));

	
}

add_action('after_setup_theme', 'roottheme_setup');



?>