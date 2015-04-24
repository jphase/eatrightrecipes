<?php

// Enqueue scripts and styles
function err_scripts_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'err_scripts_styles' );