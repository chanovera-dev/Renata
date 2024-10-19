<?php

function renata_theme_colors() {
    ?>
    <style>
        @media (prefers-color-scheme: light) {
            :root {
            }
        }

        / * Modo oscuro * /
        @media (prefers-color-scheme: dark) {

            body{background-color:#11151A;}

            #mobile-header.container,
            #desktop-header.container{background-color:#11151A;}
        }
    </style>
    <?php
}
add_action('wp_head', 'renata_theme_colors');