<?php

function renata_theme_media_queries() {
    ?>
        <style>
            @media(min-width:769px){
                #mobile-header{display:none;}
            }
        </style>
    <?php
}
add_action('wp_head', 'renata_theme_media_queries');