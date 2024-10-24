<?php

// carga componentes (estilos, javascript, etc) en el header
function load_parts_header() {

}
add_action( 'wp_enqueue_scripts', 'load_parts_header' );

// Carga componentes (estilos, javascript, etc) en el footer
function load_parts_footer(){
    // Generales
    wp_enqueue_script('generals', get_template_directory_uri() . '/assets/js/global.min.js', array(), '1.0', true);
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

// Registra los sidebars
function widgets_areas(){
    
    register_sidebar(
        array(
            'name' => __('Blog Sidebar','renata'),
            'id' => 'posts-sidebar',
            'description' => __('Sidebar Widget Area','renata'),
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
            'before_widget' => '',
            'after_widget' => '',
        )
    );

    register_sidebar(
        array(
            'name' => __('Article Sidebar','renata'),
            'id' => 'single-sidebar',
            'description' => __('Sidebar Widget Area','renata'),
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
            'before_widget' => '',
            'after_widget' => '',
        )
    );

    register_sidebar(
        array(
            'name' => __('Page Sidebar','renata'),
            'id' => 'page-sidebar',
            'description' => __('Sidebar Widget Area','renata'),
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
            'before_widget' => '',
            'after_widget' => '',
        )
    );
    
}
add_action( 'widgets_init', 'widgets_areas' );

// Delimita el tamaño del excerpt a 20 palabras
function limite_excerpt($limite) { return 20; }
add_filter ('excerpt_length', 'limite_excerpt', 999);

// salida de wp_archive_list() personalizada
function custom_archives_link($link_html, $url, $text, $format, $before, $after) {
    // Modify the $link_html to customize the link structure
    $custom_link = '<li><a href="' . esc_url($url) . '">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16">
        <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
    </svg>
    ' . $text . '</a></li>';
    // Return the modified link HTML
    return $before . $custom_link . $after;
}
add_filter('get_archives_link', 'custom_archives_link', 10, 6);

// personaliza la salida de las categorias en el widget
function custom_category_list($output, $args) {
    $categories = get_categories($args);

    $output = '<ul class="custom-category-list">';
    foreach ($categories as $category) {
        // Aquí puedes personalizar el SVG
        $svg_icon = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16"><path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z"/></svg>';

        $output .= '<li>';
        $output .= '<a href="' . esc_url(get_category_link($category->term_id)) . '">';
        $output .= $svg_icon . ' ' . esc_html($category->name);
        $output .= '</a>';
        $output .= '</li>';
    }
    $output .= '</ul>';

    return $output;
}
add_filter('wp_list_categories', 'custom_category_list', 10, 2);

// A N E X O S
/* anexo para cargar el css que se usa en todas las páginas */
require_once(get_template_directory() . '/functions/global-css.php');
// Anexo para definir los colores personalizados en las plantillas
require_once(get_template_directory() . '/functions/colors.php');
// Anexo para definir los fondos personalizados en las plantillas
require_once(get_template_directory() . '/functions/backgrounds.php');
/* anexo para cargar los estilos de los formularios */
require_once(get_template_directory() . '/functions/forms.php');
/* anexo para los breakpoints del sitio */
require_once(get_template_directory() . '/functions/media-queries.php');
// Anexo para definir los componentes personalizados en las plantillas
require_once(get_template_directory() . '/functions/templates.php');