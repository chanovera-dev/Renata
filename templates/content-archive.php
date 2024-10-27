<article class="post">
    <?php
        if ( has_post_thumbnail() == false ) :
        else:
            echo '<img class="thumbnail" src="'; the_post_thumbnail_url( 'media' ); echo '" alt="Imagen del artículo" loading="lazy" width="300" height="200">';
        endif;
    ?>
    <a class="permalink" href="<?php the_permalink(); ?>" target="_blank"><?php the_title('<h3 class="permalink__title">', '</h3>'); ?></a>
    <?php 
        the_excerpt(); 
        if ( is_home() or is_page_template('home.php') or is_archive() && ! is_active_sidebar('posts-sidebar') ) {
            echo '<div class="tags">' . get_the_tag_list() . '</div>';
        } else if ( is_search() && ! is_active_sidebar('search-sidebar') ) {
            echo '<div class="tags">' . get_the_tag_list() . '</div>'; 
        }
    ?>
</article>