<?php

// carga componentes (estilos, javascript, etc) en el header
function load_parts_header() {
    wp_dequeue_style( 'wp-block-library' );
}
add_action( 'wp_enqueue_scripts', 'load_parts_header' );