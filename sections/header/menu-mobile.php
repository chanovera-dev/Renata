<div class="menu-mobile--wrapper">
    <div class="name-menu--wrapper">
        <p class="name-menu"><b><?php echo esc_html__('Menú', 'renata'); ?></b></p>
        <button id="close-menu-mobile" onclick="closeMenuMobile()">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
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
                <nav id="menu-mobile" class="menu-mobile">
                    <ul id="menu-mobile" class="menu">
                        <li id="menu-item-1161" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1161"><a href="#">Link 1</a></li>
                        <li id="menu-item-1162" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1162"><a href="#">Link 2</a></li>
                        <li id="menu-item-1163" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1163"><a href="#">Link 3</a></li>
                        <li id="menu-item-1164" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1164"><a href="javascript:void(0)" disabled="true"><button class="mobile-links__item-toggle rotate" onclick="toggleSubMenu(this)">Link 4 – submenú 1<svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"></path></svg></button></a>
                            <ul class="sub-menu open" style="transition: 0.5s ease-in-out;">
                                <li id="menu-item-1165" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1165"><a href="#">Link 1</a></li>
                                <li id="menu-item-1166" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1166"><a href="#">Link 2</a></li>
                                <li id="menu-item-1167" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1167"><a href="#">Link 3</a></li>
                                <li id="menu-item-1168" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1168"><a href="#">Link 4</a></li>
                                <li id="menu-item-1169" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1169"><a href="#">Link 5</a></li>
                                <li id="menu-item-1170" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1170"><a href="javascript:void(0)" disabled="true"><button class="mobile-links__item-toggle rotate" onclick="toggleSubMenu(this)">Link 6 – submenú segundo nivel<svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"></path></svg></button></a>
                                    <ul class="sub-menu open" style="transition: 0.5s ease-in-out;">
                                        <li id="menu-item-1182" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1182"><a href="#">Link 1</a></li>
                                        <li id="menu-item-1183" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1183"><a href="#">Link 2</a></li>
                                        <li id="menu-item-1184" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1184"><a href="#">Link 3</a></li>
                                        <li id="menu-item-1185" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1185"><a href="#">Link 4</a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-1171" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1171"><a href="#">Link 7</a></li>
                                <li id="menu-item-1172" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1172"><a href="#">Link 8</a></li>
                                <li id="menu-item-1173" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1173"><a href="#">Link 9</a></li>
                            </ul>
                        </li>
                        <li id="menu-item-1174" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1174"><a href="#">Link 5</a></li>
                        <li id="menu-item-1175" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1175"><a href="#">Link 6</a></li>
                        <li id="menu-item-1176" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1176"><a href="#">Link 7</a></li>
                        <li id="menu-item-1177" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1177"><a href="#">Link 8</a></li>
                        <li id="menu-item-1178" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1178"><a href="javascript:void(0)" disabled="true"><button class="mobile-links__item-toggle" onclick="toggleSubMenu(this)">Link 9 – submenú 2<svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"></path></svg></button></a>
                            <ul class="sub-menu" style="transition: 0.5s ease-in-out;">
                                <li id="menu-item-1179" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1179"><a href="#">Link 1</a></li>
                                <li id="menu-item-1180" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1180"><a href="#">Link 2</a></li>
                                <li id="menu-item-1181" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1181"><a href="#">Link 3</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            ';
        }
    ?>
</div>