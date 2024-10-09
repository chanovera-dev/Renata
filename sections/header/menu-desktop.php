<?php
    $menu_id = get_nav_menu_locations()[ 'desktop' ];
    $items = wp_get_nav_menu_items( $menu_id );
    if (!empty($items)) {
        wp_nav_menu(
            array(
                'container' => 'nav',
                'container_id' => 'menu-desktop',
                'container_class' => 'menu-desktop', 
                'theme_location' => 'desktop',
            ) 
        );
    } else {
        echo 'No hay menú';
    }
?>