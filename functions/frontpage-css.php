<?php

function renata_theme_custom_frontpage_css(){
    ?>
        <style>
            .page-template-front-page #desktop-header{background-color:#34353a;}
            .page-template-front-page #desktop-header .site-brand{color:#fff;}
            .page-template-front-page #desktop-header .header-content ul li a{color:#9f9fa0;}
            .page-template-front-page #desktop-header .header-content ul li a:hover{color:#fff;}
            .page-template-front-page #desktop-header .search-form .search-field{background-color:#3d3d42;border:1px solid #3e3d42;color:#929393;}
            .page-template-front-page #desktop-header .search-form .search-submit__button{color:#929393;}
            .page-template-front-page #desktop-header .search-form .search-submit__button:hover{background-color:transparent;color:#fff;}
        </style>
    <?php
}
add_action('wp_head', 'renata_theme_custom_frontpage_css');