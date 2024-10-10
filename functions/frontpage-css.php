<?php

function renata_theme_custom_frontpage_css(){
    ?>
        <style>
            /* header */
            .page-template-front-page #mobile-header,
            .page-template-front-page #desktop-header{background-color:#34353a;}
            .page-template-front-page #mobile-header .site-brand,
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
            #hero .introduction{min-height:400px;height:100svh;max-height:600px;place-content:center;}
            #hero .introduction :is(h1, h2){font-weight:400;}
            #hero .introduction h2 span{font-size:36px;color:#ffc86b;}
            #hero .introduction .contact-me{padding:10px 20px;border:3px solid #ffc86b;border-radius:6px;background-color:transparent;color:#ffc86b;font-size:1.2em;font-weight:600;margin-top:16px;}

            /* about | skills | portfolio */
            :is(#about,#skills,#portfolio){background-color:#31333b;color:#fff;}
            :is(#about,#skills,#portfolio) .content h2{font-weight:400;font-size:36px;margin-bottom:32px;font-family:'Times New Roman';color:#fff;}
            #about .content{padding:150px 0 120px;}
            #about .content > div{margin-left:50px;position:relative;}
            #about .content > div:before{position:absolute;top:10px;left:-50px;content:'';width:30px;height:3px;background-color:#ffc86b;}
            #about p{font-size:1.3em;color:#fff;}
            #about p:not(:last-child){margin-bottom:1.3em;}
        </style>
    <?php
}
add_action('wp_head', 'renata_theme_custom_frontpage_css');