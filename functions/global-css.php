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
            h1,h2,h3,h4,h5,h6{color:var(--wp--preset--color--title);}
            p{color:var(--wp--preset--color--text);}
            a{color:var(--wp--preset--color--link);}

            /* C A B E C E R A */
            #mobile-header{position:sticky;top:0;z-index:2;background-color:var(--wp--preset--color--blue);}
            #mobile-header .header-content{position:relative;display:flex;align-items:center;justify-content:space-between;width:min(100%, 1096px);height:54px;padding:0 15px;}
            /* estilos al hacer scroll */
            :is(.scroll-down,.scroll-up) .main-header{;z-index:6;}
            /* menú mobile */
            #panel-overlay{position:fixed;width:100%;height:100%;top:0;left:-100%;opacity:0;z-index:7;background:rgb(61 70 81 / 90%);backdrop-filter:blur(20px);transition:opacity .3s ease;}
            #panel-overlay.show{left:0;opacity:1;}
            .menu-mobile--wrapper{position:fixed;top:0;left:-100%;width:100%;max-width:290px;height:100svh;background-color:var(--wp--preset--color--bg-panel);transition:all .3s ease;z-index:8;box-shadow:0 10px 21px rgb(0 0 0 / 0%);}
            .menu-mobile--wrapper.open{left:0;box-shadow:var(--wp--preset--shadow--panel);}
            body.lock{overflow:hidden;}
            /* nombre del menú y botón de cerrado */
            .menu-mobile--wrapper .name-menu--wrapper{display:flex;align-items:center;justify-content:space-between;height:54px;}
            .menu-mobile--wrapper .name-menu--wrapper .name-menu{padding:0 20px;}
            .menu-mobile--wrapper .name-menu--wrapper #close-menu-mobile{width:34px;height:34px;margin:10px;border:none;display:grid;place-content:center;border-radius:6px;background-color:transparent;transition:background-color .3s ease;}
            .menu-mobile--wrapper .name-menu--wrapper #close-menu-mobile:hover{background-color:var(--wp--preset--color--background);}
            /* listas */
            #menu-mobile{height:100%;overflow-y:scroll;padding-bottom:80px;}
            #menu-mobile::-webkit-scrollbar,
            .menu-mobile::-webkit-scrollbar{display:none;}
            #menu-mobile ul{padding:0;list-style:none;}
            #menu-mobile ul li a{padding:0 20px;display:flex;align-items:center;height:48px;transition:background-color .3s ease;}
            #menu-mobile ul li a:hover{background-color:var(--wp--preset--color--white);}
            #menu-mobile ul li ul li a{padding-left:40px;}
            #menu-mobile ul li ul li ul li a{padding-left:60px;}
            /* searchform mobile */
            #searchform-mobile{position:absolute;top:0;left:0;width:100%;height:100%;display:flex;align-items:center;gap:10px;background-color:var(--wp--preset--color--white);transition:top .3s ease;}
            /* formulario */
            #searchform-mobile input[type=text]{width:min(100% - 88px);height:34px;border:0 solid transparent;padding:8px 15px 8px 10px;font-family:'Roboto';font-size:16px;}
            #searchform-mobile input[type=text]:focus{outline:none;}
            /* botones */
            #searchform-mobile .buttons-container{display:flex;align-items:center;padding:10px;gap:10px;}
            #searchform-mobile .buttons-container button{display:grid;place-content:center;width:34px;height:34px;border:none;background-color:var(--wp--preset--color--white);border-radius:6px;transition:background-color .3s ease;}
            #searchform-mobile .buttons-container button:hover{background-color:var(--wp--preset--color--bg-panel);}
        </style>
    <?php
}
add_action('wp_head', 'renata_theme_custom_global_css');