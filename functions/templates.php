<?php

// Estilos para la página frontal
function renata_frontpage_styles() {
    if ( is_front_page() or is_page_template('front-page.php') ) {
        function load_parts_header_frontpage() {
            wp_dequeue_style( 'wp-block-library' );
            wp_deregister_script('wp-polyfill');
            wp_deregister_script('regenerator-runtime');
        }
        add_action( 'wp_enqueue_scripts', 'load_parts_header_frontpage', 100 );
        require_once(get_template_directory() . '/functions/frontpage-css.php');
        function load_components_footer_frontpage(){
            wp_dequeue_style( 'wc-blocks-style' );
            wp_enqueue_script('skills', get_template_directory_uri() . '/assets/js/skills.min.js', array(), '1.0', true);
            wp_enqueue_script('send-email', get_template_directory_uri() . '/assets/js/send-email.min.js', array(), '1.0', true);
        }
        add_action( 'get_footer', 'load_components_footer_frontpage' );
    }
}
add_action( 'wp_enqueue_scripts', 'renata_frontpage_styles' );

// Estilos para la página archivo                                                           
function karlicius_posts_styles() {
    function load_parts_header_blog() {
        wp_dequeue_style( 'wp-block-library' );
        wp_deregister_script('wp-polyfill');
        wp_deregister_script('regenerator-runtime');
    }
    add_action( 'wp_enqueue_scripts', 'load_parts_header_blog', 100 );
    if ( is_home() or is_page_template('home.php') or is_archive() or is_search() && ! is_front_page() ) {
        require_once(get_template_directory() . '/functions/blog-css.php');
        wp_enqueue_style( 'sidebar-styles', get_template_directory_uri() . '/assets/css/sidebar.css' );
    }
    function load_components_footer_blog(){
        wp_dequeue_style( 'wc-blocks-style' );
    }
    add_action( 'get_footer', 'load_components_footer_blog' );
    // deshabilita contact form 7 en todas las páginas | revisar templates.php para ver que páginas tienen habilitado contact form 7
    add_filter( 'wpcf7_load_js', '__return_false' );
    add_filter( 'wpcf7_load_css', '__return_false' );
}
add_action( 'wp_enqueue_scripts', 'karlicius_posts_styles' );

// Estilos para todos los artículos y páginas
function single_styles() {
    if ( is_single() or is_page() && ! is_front_page() ) {
        wp_enqueue_style( 'single-styles', get_template_directory_uri() . '/assets/css/single.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'single_styles' );