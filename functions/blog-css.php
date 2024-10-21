<?php

function renata_theme_custom_blog_css() {
    ?>
    <style>
        .blog main .container{background-color:var(--bg-header);}
        .blog main .container .section{padding:30px 0;}
        .blog main .container .section .posts{display:grid;gap:30px;}

        /* blog */
        .blog main .container .section .posts .post{display:grid;gap:20px;}
        .blog main .container .section .posts .post img{width:100%;aspect-ratio:4/3;object-fit:cover;}
    </style>
    <?php
}
add_action('wp_head', 'renata_theme_custom_blog_css');