<?php

function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}

function foce_child_scripts() {
	wp_enqueue_script( 'foce_child_script', get_stylesheet_directory_uri() . '/script.js', array('jquery'), false, true );
}
add_action( 'wp_enqueue_scripts', 'foce_child_scripts' );

function swiper_scripts() {
	wp_enqueue_script( 'swiper_script', get_stylesheet_directory_uri() . '/node_modules/swiper/swiper-bundle.min.js', null, null, true );
}
add_action( 'wp_enqueue_scripts', 'swiper_scripts' );