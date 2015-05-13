<?php

function add_bigtheme_stylesheet() {
	
	wp_enqueue_style('style', get_stylesheet_uri());
	
}

add_action('wp_enqueue_scripts', 'add_bigtheme_stylesheet');

// Navigation Menus
register_nav_menus(array(
	'primary' => __( 'Primary Menu'),
	'footer' => __( 'Footer Menu'),
));

// Custome excerpt length
function custom_excerpt_length(){
    return 50;
}
add_filter('excerpt_length', 'custom_excerpt_length');

function custom_excerpt_more( $more ) {
	return '';
}
add_filter( 'excerpt_more', 'custom_excerpt_more' );