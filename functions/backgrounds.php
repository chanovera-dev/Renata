<?php

function renata_theme_custom_backgrounds() {
    ?>
        <style>
            <?php if ( has_post_thumbnail() == false ) : ?>
                :is(.page-template-default,.post-template-default) .header-post{background-color:var(--bg-header);}
            <?php else: ?>
                :is(.page-template-default,.post-template-default) .header-post{position:relative;background:url('<?php the_post_thumbnail_url( 'full' ); ?>');background-repeat:no-repeat;background-position:50% 50%;background-size:cover;}
            <?php endif; ?>

        </style>
    <?php
}
add_action('wp_head', 'renata_theme_custom_backgrounds');