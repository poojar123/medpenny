<?php
/*This file is part of twentyseventeen-child, twentyseventeen child theme.

All functions of this file will be loaded before of parent theme functions.
Learn more at https://codex.wordpress.org/Child_Themes.

Note: this function loads the parent stylesheet before, then child theme stylesheet
(leave it in place unless you know what you are doing.)
*/

if ( ! function_exists( 'suffice_child_enqueue_child_styles' ) ) {
	function twentyseventeen_child_enqueue_child_styles() {
	    // loading parent style
	    wp_register_style(
	      'parente2-style',
	      get_template_directory_uri() . '/style.css'
	    );

	    wp_enqueue_style( 'parente2-style' );
	    // loading child style
	    wp_register_style(
	      'childe2-style',
	      get_stylesheet_directory_uri() . '/style.css'
	    );
	    wp_enqueue_style( 'childe2-style');
	 }
}
add_action( 'wp_enqueue_scripts', 'twentyseventeen_child_enqueue_child_styles' );

/*Write here your own functions */
/*Write here your own functions */
function theme_jquery() {
	wp_enqueue_script( 'bootstrap-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js' );
	
}
add_action( 'wp_enqueue_scripts', 'theme_jquery' );
function bootstrap_style() {
wp_enqueue_style( 'bootstrap-css','https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css' );
}
add_action( 'wp_enqueue_scripts', 'bootstrap_style' );
function bootstrap_js() {
	wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js' );
	
}
add_action( 'wp_enqueue_scripts', 'bootstrap_js' );
function font_awesome() {
wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
}
add_action( 'wp_enqueue_scripts', 'font_awesome' );

