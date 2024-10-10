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
                :is(#skills.container,#portfolio.container) .content > ul{grid-template-columns:repeat(3, 1fr);gap:30px;}
                #portfolio.container .content > ul{grid-template-columns:1fr 1fr;gap:30px;}
                #skills.container .content ul li{border-radius:10px;}
                #portfolio.container .content > ul li figure figcaption{padding:30px;}
                #experience .certifications .card-timeline{padding-left:216px;}
            }

            @media(min-width:1024px){
                .blog main .container .section{display:grid;grid-template-columns:1fr 215px;gap:50px;}
                .page-template-front-page :is(#skills,#portfolio) .content > ul{grid-template-columns:repeat(4, 1fr);gap:30px;}
                #portfolio.container .content > ul{grid-template-columns:repeat(3, 1fr);}
            }

            @media(min-width:1200px){
                #portfolio.container .content > ul li figure img{display:block;width:100%;height:100%;object-fit:cover;}
                #portfolio.container .content > ul li figure figcaption{position:absolute;top:0;left:0;width:100%;height:100%;background-color:rgba(0, 0, 0, .5);backdrop-filter:saturate(180%) blur(20px);opacity:0;transition:opacity .3s ease;}
                #portfolio.container .content > ul li:hover figure figcaption{opacity:1;}
            }

        </style>
    <?php
}
add_action('wp_head', 'renata_theme_media_queries');