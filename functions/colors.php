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

            .page-template-front-page #mobile-header,
            .page-template-front-page #desktop-header{background-color:#11151A;}
        }
    </style>
    <?php
}
add_action('wp_head', 'renata_theme_colors');