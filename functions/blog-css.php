<?php

function renata_theme_custom_blog_css() {
    ?>
    <style>
        .blog main .container{background-color:var(--bg-header);}
        .blog main .container .section{padding:30px 0;}
        .blog main .container .section .posts{display:grid;gap:30px;}
    </style>
    <?php
}
add_action('wp_head', 'renata_theme_custom_blog_css');