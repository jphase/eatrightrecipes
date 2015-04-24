<?php

// Enqueue scripts and styles
function err_scripts_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'err_scripts_styles' );

// Actions to happen on init
function err_init_actions() {
	// Add publicize support to the recipe post type
	add_post_type_support( 'recipes', 'publicize' );
}
add_action( 'init', 'err_init_actions' );
