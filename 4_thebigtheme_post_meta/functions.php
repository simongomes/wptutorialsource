<?php

function add_bigtheme_stylesheet() {
	
	wp_enqueue_style('style', get_stylesheet_uri());
	
}

add_action('wp_enqueue_scripts', 'add_bigtheme_stylesheet');

register_nav_menus(
        array(
            'primary'   =>  __( 'Main Menu' ),
            'footer'    =>  __( 'Footer Menu' )
        )
);