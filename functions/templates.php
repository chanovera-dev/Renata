<?php

// Estilos para la página frontal
function renata_frontpage_styles() {
    if ( is_front_page() or is_page_template('front-page.php') ) {
        // carga componentes (estilos, javascript, etc) en el header
        function load_parts_header_frontpage() {
            wp_dequeue_style( 'wp-block-library' );
        }
        add_action( 'wp_enqueue_scripts', 'load_parts_header_frontpage' );
        require_once(get_template_directory() . '/functions/frontpage-css.php');
    }
}
add_action( 'wp_enqueue_scripts', 'renata_frontpage_styles' );