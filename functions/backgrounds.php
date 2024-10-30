<?php

function renata_theme_custom_backgrounds() {
    ?>
        <style>
            <?php if ( has_post_thumbnail() == false ) : ?>
                :is(.page-template-default,.post-template-default) main .header-post .top{background-color:var(--bg-input);padding:10px 0;border-top:1px solid var(--border-input);border-bottom:1px solid var(--border-input);}
                :is(.page-template-default,.post-template-default) .header-post{background-color:var(--bg-header);}
                :is(.page-template-default,.post-template-default) .header-post .blur{display:none;}
                :is(.page-template-default,.post-template-default) .header-post .title-and-data__wrapper .title-post{color:var(--resalted-text);}
            <?php else: ?>
                :is(.page-template-default,.post-template-default) .header-post{position:relative;background:url('<?php the_post_thumbnail_url( 'full' ); ?>');background-repeat:no-repeat;background-position:50% 50%;background-size:cover;}
                :is(.page-template-default,.post-template-default) .header-post .blur{position:absolute;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,.4); backdrop-filter:saturate(180%) blur(20px); -webkit-backdrop-filter:saturate(180%) blur(20px);}
                :is(.page-template-default,.post-template-default) main .header-post .top :is(.breadcrumb,.breadcrumb a),
                :is(.page-template-default,.post-template-default) main .header-post .title-and-data__wrapper .title-post,
                .post-template-default main .header-post .title-and-data__wrapper .author .author-name,
                .post-template-default main .header-post .title-and-data__wrapper .author .author-ocupation,
                .post-template-default main .header-post .title-and-data__wrapper .date,
                .post-template-default main .header-post .title-and-data__wrapper .share,
                .post-template-default main .header-post .title-and-data__wrapper .share a{color:#fff;}
            <?php endif; ?>

        </style>
    <?php
}
add_action('wp_head', 'renata_theme_custom_backgrounds');