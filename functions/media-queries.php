<?php

function renata_theme_media_queries() {
    ?>
        <style>
            /* header */
            #desktop-header{display:none;}
            
            @media(min-width:768px){
                /* cabecera */
                #mobile-header{display:none;}
                #desktop-header{display:inherit;}

                /* hero */
                #hero.container .introduction{text-align:left;height:calc(100svh - 114px);}
                #hero.container .introduction .contact-me{margin-inline:inherit;}

                /* blog */
                .blog main .container .section .posts{grid-template-columns:1fr 1fr;}

                /* portafolio */
                #portfolio.container .content > ul{grid-template-columns:1fr 1fr;}

                /* skills */
                #skills.container .content .cards__inner{grid-template-columns:repeat(3, 1fr);gap:30px;}
                #skills.container .content ul li{border-radius:10px;}

                /* experiencia */
                #experience .certifications .card-timeline{padding-left:216px;}

                /* contacto */
                #contact.container .section{grid-template-columns:auto 250px;width:min-content;}
                #contact.container .section > div:nth-child(1){min-width:400px;}
            }

            @media(min-width:1024px){
                /* blog */
                .blog main .container .section{display:grid;grid-template-columns:1fr 215px;gap:90px;}

                /* skills */
                #skills.container .content .cards__inner{grid-template-columns:repeat(4, 1fr);gap:30px;}

                /* portafolio */
                #portfolio.container .content > ul{grid-template-columns:repeat(3, 1fr);gap:30px;}
            }

            @media(min-width:1096px){
                /* skills */
                #skills.container .content .cards__inner{grid-template-columns:repeat(5, 1fr);}
            }

        </style>
    <?php
}
add_action('wp_head', 'renata_theme_media_queries');