<?php
function exertio_child_theme_enqueue_styles() {

    $parent_style = 'exertio-main-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'exertio-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
    
}

add_action( 'wp_enqueue_scripts', 'exertio_child_theme_enqueue_styles' );