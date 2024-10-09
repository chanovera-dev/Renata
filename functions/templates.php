<?php

// Estilos para la página frontal
function renata_frontpage_styles() {
    if ( is_front_page() or is_page_template('front-page.php') ) {
        require_once(get_template_directory() . '/functions/frontpage-css.php');
    }
}
add_action( 'wp_enqueue_scripts', 'renata_frontpage_styles' );