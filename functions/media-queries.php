<?php

function renata_theme_media_queries() {
    ?>
        <style>
            #desktop-header{display:none;}
            
            @media(min-width:768px){
                #mobile-header{display:none;}
                #desktop-header{display:inherit;}
                #hero.container .introduction{text-align:left;height:calc(100svh - 114px);}
                .blog main .container .section .posts{grid-template-columns:1fr 1fr;}
                .page-template-front-page :is(#skills,#portfolio) .content ul{grid-template-columns:repeat(3, 1fr);gap:30px;}
            }

            @media(min-width:1024px){
                .blog main .container .section{display:grid;grid-template-columns:1fr 215px;gap:50px;}
                .page-template-front-page :is(#skills,#portfolio) .content ul{grid-template-columns:repeat(4, 1fr);gap:30px;}
            }

        </style>
    <?php
}
add_action('wp_head', 'renata_theme_media_queries');