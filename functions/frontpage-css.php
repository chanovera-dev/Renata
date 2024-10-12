<?php

function renata_theme_custom_frontpage_css(){
    ?>
        <style>
            body{background-color:#11151A;}
            /* header */
            .page-template-front-page #mobile-header,
            .page-template-front-page #desktop-header{
                background-color:#11151A;opacity:1;
                animation-name:animation-header; animation-direction:normal; animation-duration:1.5s; animation-timing-function:ease; animation-iteration-count:1;
            }
            @keyframes animation-header{
                0%   {opacity:0;transform:translateY(-60px);}
                100% {opacity:1;transform:translateY(0);}
            }
            .page-template-front-page #mobile-header .site-brand,
            .page-template-front-page #desktop-header .site-brand{color:#fff;}
            .page-template-front-page #mobile-header .header-content button{background-color:#11151A;color:#fff;}
            .page-template-front-page #desktop-header .header-content ul li a{color:#9198a1;}
            .page-template-front-page #desktop-header .header-content ul li a:hover{color:#fff;}
            .page-template-front-page #desktop-header .search-form .search-field{background-color:#212529;border:1px solid #212529;color:#f6f6f6;}
            .page-template-front-page #desktop-header .search-form .search-field:focus{color:#fff;}
            .page-template-front-page #desktop-header .search-form .search-submit__button{color:#f1f1f1;}
            .page-template-front-page #desktop-header .search-form .search-submit__button:hover{background-color:transparent;color:#fff;}

            /* hero */
            #hero{position:relative;background-color:#11151A;color:#fff;box-shadow:0 18px 20px 0 rgb(0 0 0 / 15%);}
            #hero .section{display:grid;}
            #hero .introduction{
                min-height:400px;height:calc(100svh - 54px);max-height:1000px;place-content:center;text-align:center;opacity:1;
                animation-name:animation-introduction; animation-direction:normal; animation-duration:1.5s; animation-timing-function:ease; animation-iteration-count:1;
            }
            @keyframes animation-introduction{
                0%   {opacity:0;transform:translateY(60px);}
                100% {opacity:1;transform:translateY(0);}
            }
            #hero .introduction :is(h1, h2){font-weight:400;font-size:36px;line-height:1.4;color:#fff;}
            #hero .introduction h2 span{font-size:36px;color:#3fb950;}
            #hero .introduction .contact-me{padding:10px 20px;border:3px solid #3fb950;border-radius:6px;background-color:transparent;color:#3fb950;font-size:1.2em;font-weight:600;margin-top:36px;}

            /* about | skills | portfolio */
            :is(#about,#skills,#portfolio){background-color:#0C0E12;color:#fff;}
            :is(#about,#skills,#portfolio) .content h2{font-weight:400;font-size:36px;margin-bottom:32px;font-family:'Times New Roman';color:#fff;}
            #about .content{padding:150px 0 120px;}
            #about .content > div{margin-left:50px;position:relative;}
            #about .content > div:before{position:absolute;top:10px;left:-50px;content:'';width:30px;height:3px;background-color:#3fb950;}
            #about p{font-size:1.3em;color:#fff;}
            #about p:not(:last-child){margin-bottom:1.3em;}

            /* skills | portfolio */
            :is(#skills,#portfolio) .content{padding:30px 0;text-align:center;}
            #portfolio .content > ul,
            #skills .content .cards__inner{margin:0;padding:0;list-style:none;display:grid;grid-template-columns:repeat(2, 1fr);gap:15px;}
            #skills .cards {position:relative;}
            #skills .card {--flow-space:0.5em;--hsl:var(--hue), var(--saturation), var(--lightness);--hue:165;--saturation:82.26%;--lightness:51.37%;color:#fff;background-color:#11151A;border:1px solid #11151A33;aspect-ratio:1/1;display:flex;flex-direction:column;gap:16px;align-items:center;justify-content:center;border-radius:10px;box-shadow:rgb(255 255 255 / 5%) 0px 1px 1px 0px inset, rgb(0 0 0 / 15%) 0px 50px 100px -20px, rgb(0 0 0 / 30%) 0px 30px 60px -30px;}
            #skills .card svg{width:50%;height:50%;}

            .flow > * + * {
                margin-top: var(--flow-space, 1.25em);
            }

            .overlay {
                position: absolute;
                inset: 0;
                pointer-events: none;
                user-select: none;
                opacity: var(--opacity, 0);
                -webkit-mask: radial-gradient(
                        25rem 25rem at var(--x) var(--y),
                        #000 1%,
                        transparent 50%
                );
                mask: radial-gradient(
                        25rem 25rem at var(--x) var(--y),
                        #000 1%,
                        transparent 50%
                );
                transition: 400ms mask ease;
                will-change: mask;
            }

            .overlay .card {
                background-color: hsla(var(--hsl), 0.15);
                border-color: hsla(var(--hsl), 1);
                box-shadow: 0 0 0 1px inset hsl(var(--hsl));
            }

            :not(.overlay) > .card {
                transition: 400ms background ease;
                will-change: background;
            }

            :not(.overlay) > .card:hover {
                --lightness: 95%;
                background: hsla(var(--hsl), 0.1);
            }


            /* portfolio */
            #portfolio .content{padding-bottom:150px;}
            #portfolio .content > ul{grid-template-columns:1fr;}
            #portfolio .content > ul > li{overflow:hidden;background-color:#11151A;box-shadow:rgb(255 255 255 / 5%) 0px 1px 1px 0px inset, rgb(0 0 0 / 15%) 0px 50px 100px -20px, rgb(0 0 0 / 30%) 0px 30px 60px -30px;}
            #portfolio .content > ul li figure{margin:0;text-align:left;position:relative;}
            #portfolio .content > ul li figure img{display:none;}
            #portfolio .content > ul li figure figcaption{padding:15px;box-sizing:border-box;}
            #portfolio .content > ul li figure figcaption h3{margin:0;margin-bottom:14px;font-weight:600;color:#fff;}
            #portfolio .content > ul li figure figcaption h4{font-weight:400;margin-bottom:0;line-height:1.6;color:#fff;}
            #portfolio .content > ul li figure figcaption p{color:#fff;line-height:1.6;margin-bottom:16px;}
            #portfolio .content > ul li figure figcaption ul{margin:0;padding-left:16px;}
            #portfolio .content > ul li figure figcaption ul li{line-height:1.6;}
            #portfolio .content > ul li figure figcaption .see-more-button{margin-top:16px;padding:7px 12px;display:inline-flex;gap:6px;align-items:center;background-color:#3fb950;border:1px solid #3fb950;border-radius:6px;text-decoration:none;color:#11151A;text-shadow:none;}
            #portfolio .content > ul li figure figcaption .see-more-button:hover{cursor:pointer;}

            /* experience */
            #experience{position:relative;background-color:#11151A;color:#fff;box-shadow:0 -18px 20px 0 rgb(0 0 0 / 15%);}
            #experience .content{padding-bottom:61px;}
            #experience .content h2{font-size:36px;font-family:'Times New Roman';position:relative;top:-23px;}
            .certifications .card-timeline{position:relative;display:grid;padding-left:4px;}
            .certifications{position:relative;display:grid;gap:20px;align-content:flex-start;}
            .certifications .card-item:before{position:absolute;left:4px;width:2px;top:10px;height:calc(100% - 65px);content:'';background:linear-gradient(#3fb950, transparent);}
            .certifications .card-item{position:relative;font-size:14px;padding-left:40px;padding-bottom:50px;z-index:1;line-height:1.9;margin:0;}
            .certifications .card-item:after{
                content:attr(data-year);
                position:absolute;
                top:3px;
                left:-3px;
                width:16px;
                height:16px;
                line-height:1;
                border:1px solid #3fb950;
                text-indent:-215px;
                border-radius:50%;
                color:#9198a1;
                font-size:16px;
                background-color:#3fb950;
                box-shadow:0 0 15px #3fb950;
            }
            .certifications .card-item-title{font-size:24px;line-height:1.4;}
            .certifications .card-item-desc{color:#9198a1;font-size:16px;margin-top:6px;}
        </style>
    <?php
}
add_action('wp_head', 'renata_theme_custom_frontpage_css');