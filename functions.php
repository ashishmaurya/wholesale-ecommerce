<?php
include __DIR__.'/inc/lib/class-wp-bootstrap-navwalker.php';
function wpt_register_js() {
    wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', 'jquery');
    wp_enqueue_script('jquery.bootstrap.min');
}

add_action( 'wp_enqueue_scripts', 'wpt_register_js' );


function wpt_register_css() {
    wp_register_style( 'bootstrap.min', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap.min' );
}

add_action( 'wp_enqueue_scripts', 'wpt_register_css' );

/**
 * Theme Functions
 */
 function theme_name_scripts() {
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );

}
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );