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
        </style>
    <?php
}
add_action('wp_head', 'renata_theme_custom_global_css');