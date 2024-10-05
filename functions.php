<?php

// carga componentes (estilos, javascript, etc) en el header
function load_parts_header() {
    wp_dequeue_style( 'wp-block-library' );
    wp_deregister_script( 'wp-polyfill' );
    wp_deregister_script( 'regenerator-runtime' );
}
add_action( 'wp_enqueue_scripts', 'load_parts_header' );

// Carga componentes (estilos, javascript, etc) en el footer
function load_parts_footer(){
    wp_dequeue_style( 'wc-blocks-style' );
    // Generales
    wp_enqueue_script('generals', get_template_directory_uri() . '/assets/js/global.js', array(), '1.0', true);
}
add_action( 'get_footer', 'load_parts_footer' );

// Registro de menús
register_nav_menus( 
    array(
        'mobile' => __( 'Mobile', 'renata' ),
        'primary' => __( 'Primary', 'renata' ),
        'social' => __( 'Social', 'renata' ), 
    ) 
);

function renata_theme_support(){ 
    
    add_theme_support( 'title-tag' );

    add_theme_support( 'automatic-feed-links' );

    add_theme_support( 'custom-logo', array(
        'width'                => 200,
        'height'               => 100,
        'flex-width'           => true,
        'flex-height'          => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true,
    ) );

    add_theme_support( 'html5', array( 
        'comment-list', 
        'comment-form', 
        'search-form', 
        'gallery', 
        'caption', 
        'style', 
        'script' 
    ) );

    add_theme_support( 'post-formats', array(
        'aside',
        'image', 
        'video',
        'quote',
        'link',
        'gallery',
        'status',
        'audio',
        'chat',
    ) );

    add_theme_support( 'customize-selective-refresh-widgets' );

    add_theme_support( 'post-thumbnails', array( 
        'post',
        'page',
        'movies' 
    ) );

    set_post_thumbnail_size( 300, 200, true ); // Normal post thumbnails, hard crop mode
	add_image_size( 'post-image', 400, 300, true ); // Post thumbnails, hard crop mode
	add_image_size( 'slider-image', 920, 300, true ); // Post thumbnails for slider, hard crop mode

} 
add_action('after_setup_theme', 'renata_theme_support');

function widgets_areas(){

    register_sidebar(
        array(
            'name' => __('Blog Sidebar','renata'),
            'id' => 'blog-sidebar',
            'description' => __('Sidebar Widget Area','renata'),
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
            'before_widget' => '',
            'after_widget' => '',
        )
    );
}
add_action( 'widgets_init', 'widgets_areas' );

// A N E X O S
/* anexo para cargar el css que se usa en todas las páginas */
require_once(get_template_directory() . '/functions/global-css.php');