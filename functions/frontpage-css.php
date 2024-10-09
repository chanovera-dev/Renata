<?php

function renata_theme_custom_frontpage_css(){
    ?>
        <style>
            /* header */
            .page-template-front-page #desktop-header{background-color:#34353a;}
            .page-template-front-page #desktop-header .site-brand{color:#fff;}
            .page-template-front-page #desktop-header .header-content ul li a{color:#9f9fa0;}
            .page-template-front-page #desktop-header .header-content ul li a:hover{color:#fff;}
            .page-template-front-page #desktop-header .search-form .search-field{background-color:#3d3d42;border:1px solid #3e3d42;color:#929393;}
            .page-template-front-page #desktop-header .search-form .search-field:focus{color:#fff;}
            .page-template-front-page #desktop-header .search-form .search-submit__button{color:#929393;}
            .page-template-front-page #desktop-header .search-form .search-submit__button:hover{background-color:transparent;color:#fff;}

            /* hero */
            #hero{position:relative;background-color:#34353a;color:#fff;box-shadow:0 18px 20px 0 rgb(0 0 0 / 15%);}
            #hero .section{display:grid;}
            #hero .introduction{min-height:400px;height:100svh;max-height:700px;place-content:center;}
            #hero .introduction :is(h1, h2){font-weight:400;}
            #hero .introduction h2 span{font-size:36px;color:#ffc86b;}
            #hero .introduction .contact-me{padding:10px 20px;border:3px solid #ffc86b;border-radius:6px;background-color:transparent;color:#ffc86b;font-size:1.2em;font-weight:600;margin-top:16px;}
        </style>
    <?php
}
add_action('wp_head', 'renata_theme_custom_frontpage_css');