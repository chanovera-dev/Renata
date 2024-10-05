<?php get_header(); ?>

<main>

    <div class="container">

        <section class="section">

            <h1 class="title"><?php echo esc_html__('Resultados para "', 'renata'); echo the_search_query(); echo esc_html__('"', 'renata') ?></h1>
        
            <?php
                if ( have_posts() ){

                    echo '<div class="posts">';

                    while( have_posts() ){

                        the_post();
                        get_template_part( 'templates/content', 'archive' );

                    }

                    the_posts_pagination();

                    echo '</div>';

                    if ( is_active_sidebar('search-sidebar') ) {
                        dynamic_sidebar('search-sidebar'); 
                    } 

                } else {
                    echo esc_html__('No se han encontrado artículos', 'renata');
                }
            ?>

        <section>

    </div>

</main>

<?php get_footer(); ?>