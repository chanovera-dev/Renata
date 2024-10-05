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