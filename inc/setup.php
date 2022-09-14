<?php
function rms_scripts() {
    
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/styles/bootstrap.min.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/src/style.css', 'v1.2');
    wp_enqueue_style( 'slick', get_stylesheet_directory_uri() . '/styles/slick.min.css');
    wp_enqueue_style( 'custom', get_template_directory_uri() . '/styles/main.min.css' );
    wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' );

    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/scripts/jquery.min.js', array(), '', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/scripts/bootstrap.min.js', array(), '', true );
    wp_enqueue_script( 'main-script', get_template_directory_uri() . '/scripts/main.js', array(), '', true );
    wp_enqueue_script( 'slick', get_stylesheet_directory_uri() . '/scripts/slick.min.js', array(), '', true );

    wp_enqueue_script( 'custom', get_template_directory_uri() . '/scripts/custom.js', array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'rms_scripts' );

function rms_register_nav_menu(){
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'text_domain' ),
    ) );
}
add_action( 'after_setup_theme', 'rms_register_nav_menu', 0 );

/*
* Add ACF Options Page
*/
if( function_exists( 'acf_add_options_page' ) ) {
    acf_add_options_page( array(
        'page_title' 	=> 'Theme Settings',
        'menu_title'	=> 'Theme Settings',
        'menu_slug' 	=> 'theme-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ) );
}
/**
 * Featured Image Support
 */
add_theme_support('post-thumbnails');
