<?php

// carga componentes (estilos, javascript, etc) en el header
function load_parts_header() {
    wp_dequeue_style( 'wp-block-library' );
}
add_action( 'wp_enqueue_scripts', 'load_parts_header' );

// Carga componentes (estilos, javascript, etc) en el footer
function load_parts_footer(){
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
} 
add_action('after_setup_theme', 'renata_theme_support');
