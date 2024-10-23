<?php

function karlicius_theme_custom_backgrounds() {
    ?>
        <style>
            <?php if ( has_post_thumbnail() == false ) : ?>
                :is(.page-template-default,.post-template-default) .header-post{background-color:var(--bg-header);color:var(--color-text);}
            <?php else: ?>
                :is(.page-template-default,.post-template-default) .header-post{position:relative;padding-top:var(--height--header);background:url('<?php the_post_thumbnail_url( 'full' ); ?>');background-repeat:no-repeat;background-position:50% 50%;background-size:cover;color:#fff;}
            <?php endif; ?>

        </style>
    <?php
}
add_action('wp_head', 'renata_theme_custom_backgrounds');