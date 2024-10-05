<div class="menu-mobile--wrapper">
    <div class="name-menu--wrapper">
        <p class="name-menu"><b><?php echo esc_html__('Menú', 'renata'); ?></b></p>
        <button id="close-menu-mobile" onclick="closeMenuMobile()">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
            </svg>
        </button>
    </div>
    <?php
        $menu_id = get_nav_menu_locations()[ 'mobile' ];
        $items = wp_get_nav_menu_items( $menu_id );
        if (!empty($items)) {
            wp_nav_menu(
                array(
                    'container' => 'nav',
                    'container_id' => 'menu-mobile',
                    'container_class' => 'menu-mobile', 
                    'theme_location' => 'mobile',
                ) 
            );
        } else {
            echo '
                <nav>
                    <ul>
                        <li><a href="#">Link 1</a></li>
                        <li><a href="#">Link 2</a></li>
                        <li><a href="#">Link 3</a></li>
                        <li><a href="#">Link 4</a></li>
                        <li><a href="#">Link 5</a></li>
                    </ul>
                </nav>
            ';
        }
    ?>
</div>