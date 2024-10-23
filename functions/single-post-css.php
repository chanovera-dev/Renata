<?php

function renata_theme_custom_frontpage_css(){
    ?>
        <style>
            /* E N C A B E Z A D O */
            :is(.page-template-default,.post-template-default) .header-post .title-and-data__wrapper{position:relative;padding:var(--padding-bg-header) 0;text-align:center;display:grid;gap:20px;}
            :is(.page-template-default,.post-template-default) .header-post .title-and-data__wrapper .title-post{font-weight:400;font-size:30px;}
            /* autor */
            .post-template-default .header-post .title-and-data__wrapper .author{display:grid;grid-template-columns:auto auto;column-gap:13px;max-width:140px;text-align:left;margin-inline:auto;}
            .post-template-default .header-post .title-and-data__wrapper .author .author-name{color:var(--color-text);}
            .post-template-default .header-post .title-and-data__wrapper .author .avatar{grid-row:1 / 3;background-color:var(--bg-alt);border-radius:50%;}
            .post-template-default .header-post .title-and-data__wrapper .author .author-ocupation{font-size:13px;opacity:.5;color:var(--color-text);}
            /* date */
            .post-template-default .header-post .title-and-data__wrapper .date{display:inline-flex;align-items:center;gap:7px;justify-content:center;color:var(--color-text);}
            /* compartir */
            .post-template-default .header-post .title-and-data__wrapper .share{display:flex;align-items:center;justify-content:center;line-height:1;gap:20px;color:var(--color-text);}
            .post-template-default .header-post .title-and-data__wrapper .share a{color:var(--color-text);}
        </style>
    <?php
}
add_action('wp_head', 'renata_theme_custom_frontpage_css');