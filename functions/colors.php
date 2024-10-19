<?php

function renata_theme_colors() {
    ?>
    <style>
        :root {
                /* generales */
                --white:#f6f6f6;
                --color-title:#3D4651;
                --color-text:#3D4651;
                --color-link:#3D4651;
                --color-link-hover:#000;

                /* cabecera */
                --bg-header:rgb(245 245 247 / 100%);

                /* formularios */
                --bg-input:#e6ebef;
                --border-input:1px solid #dbe1e8;
                --border-input-hover:#c3cdd8;
                --border-color-focus:#b7c3d0;
                --color-input:#3D4651;
                --color-placeholder:#9fafc1;
            }

        /* Modo oscuro */
        @media (prefers-color-scheme: dark) {
            :root{
                /* generales */
                --white:#323232;
                --color-title:#9198a1;
                --color-text:#9198a1;
                --color-link:#9198a1;
                --color-link-hover:#fff;

                /* cabecera */
                --bg-header:rgb(17 21 26 / 100%);

                /* formularios */
                --bg-input:#26303b;
                --border-input:1px solid #2e3a47;
                --border-input-hover:#3d4d5f;
                --border-color-focus:#45576b;
                --color-input:#f6f6f6;
                --color-placeholder:#546a83;
            }
        }
    </style>
    <?php
}
add_action('wp_head', 'renata_theme_colors');