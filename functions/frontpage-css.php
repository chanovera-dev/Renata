<?php

function renata_theme_custom_frontpage_css(){
    ?>
        <style>
            .page-template-front-page #desktop-header{background-color:#34353a;}
        </style>
    <?php
}
add_action('wp_head', 'renata_theme_custom_frontpage_css');