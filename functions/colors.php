<?php

function renata_theme_colors() {
    ?>
    <style>
        :root {
                --bg-header:rgb(255 255 255 / 100%);
                --white:#f6f6f6;
                --color-title:#3D4651;
                --color-text:#3D4651;
                --color-link:#3D4651;
                --color-link-hover:#323232;
            }

        /* Modo oscuro */
        @media (prefers-color-scheme: dark) {
            :root{
                --bg-header:rgb(17 21 26 / 100%);
                --white:#323232;
                --color-title:#9198a1;
                --color-text:#9198a1;
                --color-link:#9198a1;
                --color-link-hover:#f6f6f6;
            }
        }
    </style>
    <?php
}
add_action('wp_head', 'renata_theme_colors');