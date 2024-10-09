<?php

function renata_theme_media_queries() {
    ?>
        <style>
            #desktop-header{display:none;
            }
            @media(min-width:769px){
                #mobile-header{display:none;}
                #desktop-header{display:inherit;}
            }
        </style>
    <?php
}
add_action('wp_head', 'renata_theme_media_queries');