<?php

function renata_theme_colors() {
    ?>
    <style>
        :root {
                /* generales */
                --bg-body:#dbe1e8;
                --white:#f6f6f6;
                --color-title:#3D4651;
                --color-text:#3D4651;
                --color-link:#3D4651;
                --color-link-hover:#000;

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

                /* formularios */
                --bg-input:#e6ebef;
                --border-input:#dbe1e8;
                --border-input-hover:#c3cdd8;
                --border-input-focus:#abb9c9;
                --color-input:#3D4651;
                --color-placeholder:#9fafc1;
            }

        /* Modo oscuro */
        @media (prefers-color-scheme: dark) {
            :root{
                /* generales */
                --bg-body:#171d23;
                --white:#323232;
                --color-title:#9198a1;
                --color-text:#9198a1;
                --color-link:#9198a1;
                --color-link-hover:#fff;

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

                /* formularios */
                --bg-input:#26303b;
                --border-input:#2e3a47;
                --border-input-hover:#3d4d5f;
                --border-input-focus:#4c6177;
                --color-input:#fff;
                --color-placeholder:#546a83;
            }
        }
    </style>
    <?php
}
add_action('wp_head', 'renata_theme_colors');