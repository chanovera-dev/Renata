<?php

function renata_theme_custom_frontpage_css(){
    ?>
        <style>
            body{background-color:#11151A;}
            /* header */
            .page-template-front-page #mobile-header,
            .page-template-front-page #desktop-header{background-color:#11151A;}
            .page-template-front-page #mobile-header :is(.open-menu-mobile--button,.site-brand,.open-searchform-mobile--button),
            .page-template-front-page #desktop-header :is(.site-brand,.menu-primary,.search-form){
                opacity:1;
                animation-name:animation-header-1; animation-direction:normal; animation-duration:1.5s; animation-timing-function:ease; animation-iteration-count:1;
            }
            .page-template-front-page #mobile-header .site-brand,
            .page-template-front-page #desktop-header .menu-primary{animation-name:animation-header-2;}
            .page-template-front-page #mobile-header .open-searchform-mobile--button,
            .page-template-front-page #desktop-header .search-form{animation-name:animation-header-3;}
            
            @keyframes animation-header-1{
                0%    {opacity:0;transform:translateY(-60px);}
                33.33%{opacity:1;transform:translateY(0);}
            }
            @keyframes animation-header-2{
                0%    {opacity:0;transform:translateY(-60px);}
                13.33%{opacity:0;transform:translateY(-60px);}
                46.66%{opacity:1;transform:translateY(0);}
            }
            @keyframes animation-header-3{
                0%    {opacity:0;transform:translateY(-60px);}
                26.66%{opacity:0;transform:translateY(-60px);}
                56.66%{opacity:1;transform:translateY(0);}
            }
            .page-template-front-page #mobile-header .site-brand,
            .page-template-front-page #desktop-header .site-brand{color:#fff;}
            .page-template-front-page #mobile-header .header-content button{background-color:#11151A;color:#fff;}
            .page-template-front-page #desktop-header .header-content ul li a{color:#9198a1;}
            .page-template-front-page #desktop-header .header-content ul li a:hover{color:#fff;}
            .page-template-front-page #desktop-header .search-form .search-field{background-color:#26303b;border:1px solid #26303b;color:#f6f6f6;}
            .page-template-front-page #desktop-header .search-form .search-field:focus{color:#fff;}
            .page-template-front-page #desktop-header .search-form .search-submit__button{color:#f1f1f1;}
            .page-template-front-page #desktop-header .search-form .search-submit__button:hover{background-color:transparent;color:#fff;}

            /* hero */
            #hero{position:relative;background-color:#11151A;color:#fff;box-shadow:0 18px 20px 0 rgb(0 0 0 / 15%);}
            #hero .section{display:grid;}
            #hero .introduction{min-height:400px;height:calc(100svh - 54px);max-height:1000px;place-content:center;text-align:center;}
            #hero .introduction :is(h1, h2){font-weight:400;font-size:36px;line-height:1.4;color:#fff;}
            #hero .introduction h2{
                opacity:1;
                animation-name:animation-introduction-name; animation-direction:normal; animation-duration:1.5s; animation-timing-function:ease; animation-iteration-count:1;
            }
            @keyframes animation-introduction-name{
                0%   {opacity:0;transform:translateY(60px);}
                100% {opacity:1;transform:translateY(0);}
            }
            #hero .introduction h2 span{font-size:42px;color:#3fb950;}
            #hero .introduction p{
                padding:3px 7px;background-color:#26303b;border:1px solid #26303b;border-radius:4px;color:#d1d1d1;margin-bottom:24px;font-size:13px;display:inline-block;opacity:1;
                animation-name:animation-introduction-p; animation-direction:normal; animation-duration:3s; animation-timing-function:ease; animation-iteration-count:1;
            }
            @keyframes animation-introduction-p{
                0%    {opacity:0;transform:translateX(-100%);}
                30%   {opacity:0;transform:translateX(-100%);}
                40%   {opacity:1;transform:translateX(0);}
                80%   {opacity:1;transform:translateX(0);}
                85%   {opacity:1;transform:translateX(10px);}
                90%   {opacity:1;transform:translateX(0);}
                95%   {opacity:1;transform:translateX(10px);}
                100%  {opacity:1;transform:translateX(0);}
            }
            #hero .introduction h1{
                opacity:1;
                animation-name:animation-introduction-h1; animation-direction:normal; animation-duration:3s; animation-timing-function:ease; animation-iteration-count:1;
            }
            @keyframes animation-introduction-h1{
                0%   {opacity:0;transform:translateY(60px);}
                50%  {opacity:0;transform:translateY(60px);}
                100% {opacity:1;transform:translateY(0);}
            }
            #hero .introduction .contact-me{
                margin-inline:auto;padding:6px 16px;border:2px solid #3fb950;border-radius:6px;background-color:#3fb950;color:#11151A;font-size:20px;margin-top:30px;display:flex;align-items:center;gap:10px;transition:all .3s ease;
                animation-name:animation-introduction-contact-me; animation-direction:normal; animation-duration:4.5s; animation-timing-function:ease; animation-iteration-count:1;
            }
            #hero .introduction .contact-me:hover{background-color:#fff;cursor:pointer;}
            @keyframes animation-introduction-contact-me{
                0%    {opacity:0;transform:translateX(100%) rotate(15deg);}
                66.66%{opacity:0;transform:translateX(100%) rotate(15deg);}
                100%  {opacity:1;transform:translateX(0) rotate(0);}
            }

            /* about | skills | portfolio */
            :is(#about,#skills,#portfolio){background-color:#0C0E12;color:#fff;}
            :is(#about,#skills,#portfolio) .content h2{font-weight:400;font-size:36px;margin-bottom:32px;font-family:'Text me one';color:#fff;}
            #about .content{padding:120px 0 60px;}
            #about .content > div{margin-left:50px;position:relative;}
            #about .content > div:before{position:absolute;top:10px;left:-50px;content:'';width:30px;height:3px;background-color:#3fb950;}
            #about p{font-size:1.3em;color:#fff;}
            #about p:not(:last-child){margin-bottom:1.3em;}

            /* skills | portfolio */
            :is(#skills,#portfolio) .content{padding:60px 0;text-align:center;}
            #skills .content{padding-bottom:120px;}
            #portfolio .content > ul,
            #skills .content .cards__inner{margin:0;padding:0;list-style:none;display:grid;grid-template-columns:repeat(2, 1fr);gap:15px;}
            .cards {position:relative;}
            .card {
                --flow-space:0.5em;
                --hsl:var(--hue), var(--saturation), var(--lightness);
                --hue:148;
                --saturation:82.49%;
                --lightness:51.37%;
                color:#fff;
                background-color:#11151A;
                border:1px solid #11151A33;
                aspect-ratio:1/1;
                display:flex;
                flex-direction:column;
                gap:16px;
                align-items:center;
                justify-content:center;
                border-radius:10px;
                box-shadow:rgb(255 255 255 / 5%) 0px 1px 1px 0px inset, rgb(0 0 0 / 15%) 0px 50px 100px -20px, rgb(0 0 0 / 30%) 0px 30px 60px -30px;
            }
            .card svg{width:50%;height:50%;}
            .card__bullets{line-height:1.4;}
            .card__bullets li::before{
                display:inline-block;
                content:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512' width='16' title='check' fill='%23dddddd'%3E%3Cpath d='M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z' /%3E%3C/svg%3E");
                transform:translatey(0.25ch);
                margin-right:1ch;
            }
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
            #portfolio .content > ul{grid-template-columns:1fr;}
            #portfolio .content > ul > li{overflow:hidden;background-color:#11151A;box-shadow:rgb(255 255 255 / 5%) 0px 1px 1px 0px inset, rgb(0 0 0 / 15%) 0px 50px 100px -20px, rgb(0 0 0 / 30%) 0px 30px 60px -30px;border-radius:10px;padding:8px;display:grid;transition:background-color .3s ease;}
            #portfolio .content > ul > li:hover{background-color:#1a2129;}
            #portfolio .content > ul > li figure{position:relative;display:grid;gap:10px;height:100%;border-radius:6px;overflow:hidden;}
            #portfolio .content > ul > li figure img{width:100%;aspect-ratio:4/3;object-fit:cover;}
            #portfolio .content > ul li figure figcaption{position:absolute;display:grid;gap:16px;align-content:baseline;text-align:left;background-color:rgb(0 0 0 / 75%);padding:20px;width:100%;height:100%;}
            #portfolio .content > ul li figure figcaption h3{font-size:24px;font-weight:400;color:#fff;}
            #portfolio .content > ul li figure figcaption p{color:#fff;;}
            #portfolio .content > ul li > div{display:flex;align-items:center;justify-content:space-between;padding-top:9px;}
            #portfolio .content > ul li > div ul{margin:0;padding-left:0;list-style:none;display:inline-flex;align-items:center;gap:16px;}
            #portfolio .content > ul li > div ul li{line-height:1;}
            #portfolio .content > ul li > div ul li svg{color:#fff;width:24px;height:24px;}
            #portfolio .content > ul li > div .see-more-button{padding:7px;display:inline-flex;gap:6px;align-items:center;background-color:#3fb950;border:1px solid #3fb950;border-radius:6px;color:#11151A;transition:background-color .3s ease;}
            #portfolio .content > ul li > div .see-more-button:hover{cursor:pointer;background-color:#fff;}

            /* experience */
            #experience{position:relative;background-color:#11151A;color:#fff;box-shadow:0 -18px 20px 0 rgb(0 0 0 / 15%);}
            #experience .content{padding:57px 0 70px;}
            #experience .content h2{font-size:36px;font-family:'Text me one';position:relative;color:#fff;}
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

            /* contact */
            #contact{background-color:#0C0E12;padding:120px 0;}
            #contact .section{display:grid;border-radius:10px;overflow:hidden;box-shadow:rgb(255 255 255 / 5%) 0px 1px 1px 0px inset, rgb(0 0 0 / 15%) 0px 50px 100px -20px, rgb(0 0 0 / 30%) 0px 30px 60px -30px;}
            #contact .section h2{font-family:'Text me one';margin-bottom:20px;color:#fff;}
            #contact .section > div{padding:20px;}
            #contact .section > div:nth-child(1){background-color:#1a2129;position:relative;}
            #contact .section > div:nth-child(2){background-color:#11151A;display:grid;gap:20px;align-content:baseline;}
            #contact .section .contact-form{display:flex;flex-wrap:wrap;gap:1rem;overflow:hidden;margin-bottom:0;transition:all .3s ease;}
            #contact .section .contact-form p{display:flex;flex-direction:column;flex:1 0 14rem;}
            #contact .section .contact-form p.button-wrapper{flex:1 0 20rem;}
            #contact .section .contact-form p label{color:#fff;margin-bottom:5px;font-size:13px;}
            #contact .section .contact-form p .input{padding:10px;background-color:#26303b;border:1px solid #26303b;color:#f6f6f6;border-radius:6px;font-size:16px;}
            #contact .section .contact-form p .input:focus{outline:none;}
            #contact .section .contact-form p.textarea-wrapper textarea{box-sizing:border-box;width:100%;}
            #contact .section .contact-form p button{margin-right:auto;font-family:'Roboto', sans-serif;font-size:16px;padding:6px 17px;background-color:#3fb950;color:#11151A;border:1px solid #3fb950;border-radius:6px;color:#11151A;transition:all .3s ease;}
            #contact .section .contact-form p button:hover{background-color:#fff;cursor:pointer;}
            #contact .section .contact-form p button:focus{outline:none;background-color:orange;color:#fff;border-color:orange;}
            #contact .section .contact-form p :is(button.disabled,button.disabled:hover){border:1px solid #11151A;color:#11151A;background-color:transparent;cursor:auto;}
            #contact .section ul{padding-left:0;margin:0;list-style:none;display:grid;}
            #contact .section ul li{display:inline-flex;align-items:center;gap:10px;height:38px;color:#fff;}
            #contact .section ul li a{text-decoration:none;display:inline-flex;align-items:center;gap:10px;color:#fff;border-radius:2px;transition:all .3s ease;}
            #contact .section ul li a:focus{outline:none;background-color:orange;box-shadow: 0 0 0 3px orange;}
            #contact .section .contact__information--people{display:flex;align-items:center;gap:20px;}
            #title--get-in-touch{overflow:hidden;transition:all .3s ease;}
            #message-sent__wrapper{overflow:hidden;transition:all .3s ease;}
            #message-sent__wrapper h2{font-weight:400;}
            #show-form{position:absolute;top:20px;right:20px;overflow:hidden;padding:0;border:none;background-color:transparent;color:#666;font-family:'Roboto';font-size:16px;transition:all .3s ease;}
            #show-form:hover{cursor:pointer;}
        </style>
    <?php
}
add_action('wp_head', 'renata_theme_custom_frontpage_css');