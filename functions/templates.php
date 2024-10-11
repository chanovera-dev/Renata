<?php

// Estilos para la página frontal
function renata_frontpage_styles() {
    if ( is_front_page() or is_page_template('front-page.php') ) {
        // carga componentes (estilos, javascript, etc) en el header
        function load_parts_header_frontpage() {
            wp_enqueue_style( 'wp-block-library' );
            wp_deregister_script('wp-polyfill');
            wp_deregister_script('regenerator-runtime');
        }
        add_action( 'wp_enqueue_scripts', 'load_parts_header_frontpage' );
        require_once(get_template_directory() . '/functions/frontpage-css.php');
        function load_components_footer_frontpage(){
            wp_dequeue_style( 'wc-blocks-style' );
        }
        add_action( 'get_footer', 'load_components_footer_frontpage' );
    }
}
add_action( 'wp_enqueue_scripts', 'renata_frontpage_styles' );