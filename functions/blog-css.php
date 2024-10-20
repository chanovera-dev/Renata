<?php

function renata_theme_custom_blog_css() {
    ?>
    <style>
        main .container{background-color:var(--bg-header);}
        main .container .section{padding:30px 0;display:grid;gap:50px;}
        main .container .section .posts-wrapper{display:grid;grid-template-rows:1fr auto;gap:50px;}
        main .container .section .posts-wrapper .posts{display:grid;gap:50px;align-content:baseline;grid-template-columns:repeat(auto-fill, minmax(291px, 1fr));}
        main .container .section .posts-wrapper .posts .post{display:grid;gap:16px;align-content:baseline;}
        main .container .section .posts-wrapper .posts .post .thumbnail{width:100%;aspect-ratio:16/9;object-fit:cover;background-color:var(--bg-input);}
        main .container .section .posts-wrapper .posts .post .permalink .permalink__title{}
        main .container .section .posts-wrapper .posts .post .excerpt{}
    </style>
    <?php
}
add_action('wp_head', 'renata_theme_custom_blog_css');