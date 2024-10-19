<?php

function renata_theme_colors() {
    ?>
    <style>
        :root {
                --bg-header:rgb(255 255 255 / 100%);
            }

        /* Modo oscuro */
        @media (prefers-color-scheme: dark) {
            :root{
                --bg-header:rgb(17 21 26 / 100%);
            }
        }
    </style>
    <?php
}
add_action('wp_head', 'renata_theme_colors');