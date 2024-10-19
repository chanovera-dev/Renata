<?php

function renata_theme_colors() {
    ?>
    <style>
        :root {
                
            }

        / * Modo oscuro * /
        @media (prefers-color-scheme: dark) {
            :root{
                
            }
        }
    </style>
    <?php
}
add_action('wp_head', 'renata_theme_colors');