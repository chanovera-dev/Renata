<?php

function renata_theme_custom_global_css() {
    ?>
        <style>
            /* G E N E R A L E S */
            *,:before,:after{box-sizing:border-box;margin:0;}
            html{scroll-behavior:smooth;}
            body{font-size:16px;font-weight:400;line-height:1.5;text-align:left;}
            :is(header,footer,aside) :is(ol,ul){padding-left:0;list-style:none;}
            .container .section{width:min(100% - 30px, 1096px);margin-inline:auto;}
            img{display:block;height:auto;}

            /* C A B E C E R A */
            #mobile-header{position:sticky;top:0;z-index:2;}
            #mobile-header .header-content{display:flex;align-items:center;justify-content:space-between;height:54px;}
            /* estilos al hacer scroll */
            :is(.scroll-down,.scroll-up) .main-header{;z-index:6;}
            /* menú mobile */
            #panel-overlay{position:fixed;width:100%;height:100%;top:0;left:-100%;opacity:0;z-index:7;background:rgb(61 70 81 / 90%);backdrop-filter:blur(20px);transition:opacity .3s ease;}
            #panel-overlay.show{left:0;opacity:1;}
            .menu-mobile--wrapper{position:fixed;top:0;left:-100%;width:100%;max-width:290px;height:100svh;background-color:#f6f6f6;transition:all .3s ease;z-index:8;box-shadow:0 10px 21px rgb(61 70 81 / 0%);}
            .menu-mobile--wrapper.open{left:0;box-shadow:0 10px 21px rgb(61 70 81 / 50%);}
        </style>
    <?php
}
add_action('wp_head', 'renata_theme_custom_global_css');