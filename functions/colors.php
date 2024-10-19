<?php

function renata_theme_colors() {
    ?>
    <style>
        :root {
                --wp--preset--color--bg-header:rgb(255 255 255 / 100%);
            }

        / * Modo oscuro * /
        @media (prefers-color-scheme: dark) {
            :root{
                --wp--preset--color--bg-header:#11151A;
            }
        }
    </style>
    <?php
}
add_action('wp_head', 'renata_theme_colors');