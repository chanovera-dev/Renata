<?php

function renata_theme_colors() {
    ?>
    <style>
        :root {
                /* generales */
                --bg-body:#dbe1e8;
                --bg-panel-overlay:rgb(61 70 81 / 90%);
                --white:#f6f6f6;
                --color-title:#3D4651;
                --color-text:#3D4651;
                --color-link:#3D4651;
                --color-link-hover:#000;
                --resalted-text:#000;

                /* cabecera */
                --bg-header:rgb(245 245 247 / 100%);
                --bg-header-scroll:rgb(245 245 247 / 80%);

                /* botones de cabecera */
                --bg-button-header:#f2f5f7;
                --border-button-header:1px solid #f2f5f7;
                --border-button-header-hover:#c3cdd8;
                --border-button-header-focus:#abb9c9;
                --color-button-header:#3D4651;
                --color-button-header-hover:#000;

                /* menú mobile */
                --bg-menu-mobile:#dbe1e8;
                --bg-submenu-mobile-level1:#c3cdd8;
                --bg-submenu-mobile-level2:#b7c3d0;
                --bg-submenu-mobile-level3:#abb9c9;
                --bg-submenu-mobile-level4:#9fafc1;
                --bg-submenu-mobile-level5:#93a5b9;
                --bg-submenu-mobile-level6:#879bb2;
                --bg-submenu-mobile-level7:#7b91aa;
                --border-button-menu-mobile:1px solid #dbe1e8;
                --border-button-menu-mobile-hover:#c3cdd8;
                --border-button-menu-mobile-focus:#abb9c9;

                /* formularios */
                --bg-input:#e6ebef;
                --border-input:#dbe1e8;
                --border-input-hover:#c3cdd8;
                --border-input-focus:#abb9c9;
                --color-input:#3D4651;
                --color-placeholder:#9fafc1;

                /* hero */
                --bg-hero-experience:#f2f5f7;
                --bg-available-text:#dbe1e8;
                --color-available-text:#4d5f71;
                --color-name:#2b7e37;

                /* other background */
                --bg-alt:#cfd7e0;
                --bg-card:#dbe1e8;
                --bg-card-hover:#f2f5f7;

                /* contact */
                --bg-form:#f2f5f7;
                --bg-address:#e6ebef;

                /* aside */
                --line-aside-list:1px solid #dbe1e8;

                /* navegación */
                --bg-nav-hover:#e6ebef;
                --bg-nav-current:#99afc9;

                /* etiquetas en el loop de WordPress */
                --bg-tag-loop:#dbe1e8;
                --bg-tag-loop-hover:#99afc9;
            }

        /* Modo oscuro */
        @media (prefers-color-scheme: dark) {
            :root{
                /* generales */
                --bg-body:#171d23;
                --bg-panel-overlay:rgb(17 21 26 / 90%);
                --white:#323232;
                --color-title:#9198a1;
                --color-text:#9198a1;
                --color-link:#9198a1;
                --color-link-hover:#fff;
                --resalted-text:#fff;

                /* cabecera */
                --bg-header:rgb(17 21 26 / 100%);
                --bg-header-scroll:rgb(17 21 26 / 80%);

                /* botones de cabecera */
                --bg-button-header:#11151A;
                --border-button-header:1px solid #11151A;
                --border-button-header-hover:#212832;
                --border-button-header-focus:#303b49;
                --color-button-header:#9198a1;
                --color-button-header-hover:#fff;

                /* menú mobile */
                --bg-menu-mobile:#303b49;
                --bg-submenu-mobile-level1:#28323e;
                --bg-submenu-mobile-level2:#212832;
                --bg-submenu-mobile-level3:#191f26;
                --bg-submenu-mobile-level4:#11151a;
                --bg-submenu-mobile-level5:#090b0e;
                --bg-submenu-mobile-level6:#010202;
                --bg-submenu-mobile-level7:#000;
                --border-button-menu-mobile:1px solid #303b49;
                --border-button-menu-mobile-hover:#404e61;
                --border-button-menu-mobile-focus:#4f6279;

                /* formularios */
                --bg-input:#26303b;
                --border-input:#2e3a47;
                --border-input-hover:#3d4d5f;
                --border-input-focus:#4c6177;
                --color-input:#fff;
                --color-placeholder:#546a83;

                /* hero */
                --bg-hero-experience:#11151a;
                --bg-available-text:#26303b;
                --color-available-text:#d1d1d1;
                --color-name:#3fb950;

                /* other background */
                --bg-alt:#0C0E12;
                --bg-card:#11151A;
                --bg-card-hover:#1a2129;

                /* contact */
                --bg-form:#1a2129;
                --bg-address:#11151a;

                /* aside */
                --line-aside-list:1px solid #2e3a47;

                /* navegación */
                --bg-nav-hover:#26303b;
                --bg-nav-current:#30435a;

                /* etiquetas en el loop de WordPress */
                --bg-tag-loop:#26303b;
                --bg-tag-loop-hover:#30435a;
            }
        }
    </style>
    <?php
}
add_action('wp_head', 'renata_theme_colors');