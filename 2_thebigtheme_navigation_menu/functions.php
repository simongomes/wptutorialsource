<?php

function add_stylesheet(){
	wp_enqueue_style('style', get_stylesheet_uri(), 'screen');
}

add_action( 'wp_enqueue_scripts', 'add_stylesheet' );

register_nav_menus( 
	array (
		'primary'	=>	__('Primary Menu'),
		'footer'	=>	__('Footer Menu') 
	 )
);