<?php get_header(); ?>

<main>

    <div class="container">

        <section class="section">
        
            <?php
                if ( have_posts() ){

                    while( have_posts() ){

                        the_post();
                        get_template_part( 'templates/content', 'archive' );

                    }

                    the_posts_pagination();

                    if ( is_active_sidebar('posts-sidebar') ) {
                        dynamic_sidebar('posts-sidebar'); 
                    } 

                } else {
                    echo esc_html__('No se han encontrado artículos', 'renata');
                }
            ?>

        </section>

    </div>

</main>

<?php get_footer(); ?>