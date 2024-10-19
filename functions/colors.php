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
            :root {
                --wp--preset--color--bg-header:#11151A!important;
            }
            
        }
    </style>
    <?php
}
add_action('wp_head', 'renata_theme_colors');