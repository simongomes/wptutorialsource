<?php

function add_bigtheme_stylesheet() {
	wp_enqueue_style('style', get_stylesheet_uri());	
}
add_action('wp_enqueue_scripts', 'add_bigtheme_stylesheet');

// Custome excerpt length
function custom_excerpt_length(){
    return 50;
}
add_filter('excerpt_length', 'custom_excerpt_length');

function custom_excerpt_more( $more ) {
	return '';
}
add_filter( 'excerpt_more', 'custom_excerpt_more' );


function thebigtheme_setup() {
	// Navigation Menus
	register_nav_menus(array(
		'primary' => __( 'Primary Menu'),
		'footer' => __( 'Footer Menu'),
	));

	// Add featured image
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 180, 120, true);
	add_image_size('banner-image', 920, 210, array('left', 'top'));
}
add_action('after_setup_theme', 'thebigtheme_setup');


register_sidebar( array(
	'name'			=>	__( 'Sidebar', 'thebigtheme' ),
	'id'			=>	'main-sidebar',
	'class'         => 'sidebar-widget',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div><!-- /.sidebar-widget -->',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>'
) );
