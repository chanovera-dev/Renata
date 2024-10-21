<?php

function renata_theme_custom_blog_css() {
    ?>
    <style>
        .blog main .container{background-color:var(--bg-header);}
        /* blog */
        <?php
            if ( is_active_sidebar('posts-sidebar') ) {
                echo '.blog main .container .section{display:grid;grid-template-columns:1fr 215px;gap:90px;}';
            }
        ?>
        .blog main .container .section{padding:30px 0;}
        .blog main .container .section .posts{display:grid;gap:50px;align-content:baseline;grid-template-columns:repeat(auto-fill, minmax(330px, 1fr));}

        /* blog */
        .blog main .container .section .posts .post{display:grid;gap:16px;align-content:baseline;}
        .blog main .container .section .posts .post .thumbnail{width:100%;aspect-ratio:16/9;object-fit:cover;background-color:var(--bg-input);}
        .blog main .container .section .posts .post .permalink .permalink__title{}
        .blog main .container .section .posts .post .excerpt{}
    </style>
    <?php
}
add_action('wp_head', 'renata_theme_custom_blog_css');