<?php

function renata_theme_custom_blog_css() {
    ?>
    <style>
        .blog main .container{background-color:var(--bg-header);}
        .blog main .container .section{padding:30px 0;}
        .blog main .container .section .posts{display:grid;gap:50px;align-content:baseline;}

        /* blog */
        .blog main .container .section .posts .post{display:grid;gap:20px;align-content:baseline;}
        .blog main .container .section .posts .post .thumbnail{width:100%;aspect-ratio:16/9;object-fit:cover;background-color:var(--bg-input);}
        .blog main .container .section .posts .post .permalink .permalink__title{}
        .blog main .container .section .posts .post .excerpt{}
    </style>
    <?php
}
add_action('wp_head', 'renata_theme_custom_blog_css');