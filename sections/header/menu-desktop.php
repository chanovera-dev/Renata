<?php
    $menu_id = get_nav_menu_locations()[ 'primary' ];
    $items = wp_get_nav_menu_items( $menu_id );
    if (!empty($items)) {
        wp_nav_menu(
            array(
                'container' => 'nav',
                'container_id' => 'menu-primary',
                'container_class' => 'menu-primary', 
                'theme_location' => 'primary',
            ) 
        );
    } else {
        echo 'No hay menú';
    }
?>