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
                --border-input:#dbe1e8;
                --border-input-hover:#cfd7e0;
                --border-color-focus:#c3cdd8;
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
                --border-input:#2e3a47;
                --border-input-hover:#354353;
                --border-color-focus:#3d4d5f;
                --color-input:#fff;
                --color-placeholder:#546a83;
            }
        }
    </style>
    <?php
}
add_action('wp_head', 'renata_theme_colors');