<article>
    <img class="thumbnail" src="'; the_post_thumbnail_url( 'media' ); echo '" alt="Imagen del artículo" loading="lazy" width="300" height="200">
    <a href="<?php the_permalink(); ?>" target="_blank"><?php the_title('<h3>', '</h3>'); ?></a>
    <p><?php the_excerpt(); ?></p>
</article>