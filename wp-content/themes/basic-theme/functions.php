<?php
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/src/bootstrap/style.css');
    wp_enqueue_style( 'child-sass', get_stylesheet_directory_uri() . '/dist/style/style.min.css', array(), uniqid(), 'all' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

// Adding menu to wp-admin
function register_my_menus() {
    register_nav_menus(
        array(
            'new-menu' => __( 'New Menu' ),
            'another-menu' => __( 'Another Menu' ),
            'an-extra-menu' => __( 'An Extra Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );
