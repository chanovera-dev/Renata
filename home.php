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

                } else {
                    echo esc_html__('No se han encontrado artículos', 'renata');
                }
            ?>

        <section>

    </div>

</main>

<?php get_footer(); ?>