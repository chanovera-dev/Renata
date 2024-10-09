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
            #mobile-header,
            #desktop-header{position:sticky;top:0;z-index:2;background-color:var(--wp--preset--color--bg-header);}
            #mobile-header .header-content{position:relative;display:flex;align-items:center;justify-content:space-between;height:54px;}
            
            /* botones en el header */
            #mobile-header .header-content button{display:grid;place-content:center;width:34px;height:34px;border:none;background-color:var(--wp--preset--color--white);border-radius:6px;transition:all .3s ease;}
            #mobile-header .header-content button:hover{background-color:var(--wp--preset--color--bg-panel);}
            #mobile-header .header-content button:focus{background-color:var(--wp--preset--color--focus);color:#fff;outline:none;}

            /* estilos del header al hacer scroll */
            :is(.scroll-down,.scroll-up) .main-header{box-shadow:var(--wp--preset--shadow--header);background:var(--wp--preset--color--bg-header-scroll);backdrop-filter:blur(20px);z-index:6;}
            
            /* panel que cubre el contenido al abrir el menó mobile */
            #panel-overlay{position:fixed;width:100%;height:100%;top:0;left:-100%;opacity:0;z-index:7;background:rgb(61 70 81 / 90%);backdrop-filter:blur(20px);transition:opacity .3s ease;}
            #panel-overlay.show{left:0;opacity:1;}

            /* contenedor del menú mobile */
            .menu-mobile--wrapper{position:fixed;top:0;left:-100%;width:100%;max-width:290px;height:100svh;background-color:var(--wp--preset--color--bg-panel);z-index:8;box-shadow:0 10px 21px rgb(0 0 0 / 0%);}
            .menu-mobile--wrapper.open{left:0;box-shadow:var(--wp--preset--shadow--panel);}
            body.lock{overflow:hidden;}

            /* nombre del menú y botón de cerrado */
            .menu-mobile--wrapper .name-menu--wrapper{display:flex;align-items:center;justify-content:space-between;height:54px;}
            .menu-mobile--wrapper .name-menu--wrapper .name-menu{padding:0 20px;}
            .menu-mobile--wrapper .name-menu--wrapper #close-menu-mobile{width:34px;height:34px;margin:10px;border:none;display:grid;place-content:center;border-radius:6px;background-color:transparent;transition:all .3s ease;}
            .menu-mobile--wrapper .name-menu--wrapper #close-menu-mobile:hover{background-color:var(--wp--preset--color--background);}
            .menu-mobile--wrapper .name-menu--wrapper #close-menu-mobile:focus{background-color:var(--wp--preset--color--focus);color:#fff;outline:none;}

            /* menús del menú mobile */
            #menu-mobile{height:100%;overflow-y:scroll;padding-bottom:60px;}
            #menu-mobile::-webkit-scrollbar{display:none;}
            #menu-mobile ul{padding:0;list-style:none;}
            #menu-mobile a:has(button){padding:0!important;}
            #menu-mobile a:has(button) button{display:flex;align-items:center;justify-content:space-between;}
            #menu-mobile :is(a, button){display:flex;width:100%;padding:12px 20px;background-color:var(--wp--preset--color--bg-panel);font-size:16px;font-family:'Roboto';color:var(--wp--preset--color--text);border:none;transition:background-color .3s ease;}
            #menu-mobile :is(a:hover, button:hover){background-color:#f4f4f4;}
            #menu-mobile :is(a:focus, button:focus){outline:none;background-color:var(--wp--preset--color--focus);color:#fff;}
                /* submenús */
                #menu-mobile ul.sub-menu{overflow:hidden;max-height:0;}
                #menu-mobile ul.sub-menu.open{display:block;max-height:2200px;}
                /* indicador de submenú */
                #menu-mobile ul .mobile-links__item-toggle svg{transition:all .5s ease;}
                #menu-mobile ul .mobile-links__item-toggle.rotate svg{transform:rotate(180deg);}
                    /* segundo nivel */
                    #menu-mobile ul.sub-menu li :is(a, button){font-size:14px;background-color:#f0f0f0;padding:10px 20px;padding-left:40px;}
                    #menu-mobile ul.sub-menu li :is(a:hover, button:hover){background-color:#f4f4f4;}
                    #menu-mobile ul.sub-menu li :is(a:focus, button:focus){background-color:var(--wp--preset--color--focus);}
                    #menu-mobile ul.sub-menu li:first-child a{box-shadow:inset 0px 17px 10px -17px rgb(0 0 0 / 15%);}
                    #menu-mobile ul.sub-menu li:last-child a{box-shadow:inset 0px -17px 6px -17px rgb(0 0 0 / 15%);}
                        /* tercer nivel */
                        #menu-mobile ul.sub-menu ul.sub-menu li :is(a, button){padding-left:60px;background-color:#e0e0e0;font-size:12px;}
                        #menu-mobile ul.sub-menu ul.sub-menu li :is(a:hover, button:hover){background-color:#e4e4e4;}
                        #menu-mobile ul.sub-menu ul.sub-menu li :is(a:focus, button:focus){background-color:var(--wp--preset--color--focus);}
                        #menu-mobile ul.sub-menu ul.sub-menu li:first-child a{box-shadow:inset 0px 17px 10px -17px rgb(0 0 0 / 30%);}
                        #menu-mobile ul.sub-menu ul.sub-menu li:last-child a{box-shadow:inset 0px -17px 6px -17px rgb(0 0 0 / 30%);}

            /* searchform mobile */
            #searchform-mobile{position:absolute;top:-100%;left:0;width:100%;height:100%;background-color:var(--wp--preset--color--white);z-index:8;transition:top .3s ease;}
            #searchform-mobile.open{top:0;box-shadow:var(--wp--preset--shadow--header);}
            #searchform-mobile > div{display:flex;align-items:center;margin-inline:auto;}
                /* formulario */
                #searchform-mobile input[type=text]{width:min(100% - 88px);height:34px;border:0 solid transparent;border-radius:6px;background-color:var(--wp--preset--color--bg-panel);padding:8px 15px 8px 10px;font-family:'Roboto';font-size:16px;}
                #searchform-mobile input[type=text]:focus{outline:none;}
                /* botones */
                #searchform-mobile .buttons-container{display:flex;align-items:center;padding:10px 0 10px 10px;gap:10px;}
                #searchform-mobile .buttons-container :is(button,.close-searchform-mobile){display:grid;place-content:center;width:34px;height:34px;border:none;background-color:var(--wp--preset--color--white);color:var(--wp--preset--color--text);border-radius:6px;transition:all .3s ease;}
                #searchform-mobile .buttons-container :is(button:hover,.close-searchform-mobile:hover){background-color:var(--wp--preset--color--bg-panel);}
                #searchform-mobile .buttons-container :is(button:focus,.close-searchform-mobile:focus){background-color:var(--wp--preset--color--focus);color:#fff;outline:none;}

            /* header desktop */
            #desktop-header .header-content{display:grid;grid-template-columns:1fr auto 1fr;align-items:center;}
            /* menú desktop */
            #desktop-header .header-content ul{margin:0;padding:0;list-style:none;display:flex;align-items:center;gap:30px;}
            /* searchform */
            #desktop-header .header-content .search-form{margin-left:auto;position:relative;}
        </style>
    <?php
}
add_action('wp_head', 'renata_theme_custom_global_css');