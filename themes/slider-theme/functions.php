<?php
function theme_enqueue_scripts() {
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/script.js', [], false, true );
    /*wp_enqueue_style(
        'theme-fonts',
        get_template_directory_uri() . '/assets/fonts.css',
        [],
        filemtime( get_template_directory() . '/assets/fonts.css' )
    );*/
    wp_enqueue_style('style-index', get_stylesheet_directory_uri() . '/style.css');
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );

function mytheme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'mytheme_setup' );