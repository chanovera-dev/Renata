<?php get_header(); ?>

<main>

    <div class="container">

        <section class="section">

            <div class="posts">
                <?php
                    if ( have_posts() ){

                        while( have_posts() ){

                            the_post();
                            get_template_part( 'templates/content', 'archive' );

                        }

                        the_posts_pagination();

                    } else {
                        echo esc_html__('No se han encontrado artículos', 'renata');
                    }
                ?>
            </div>
            <?php
                if ( is_active_sidebar('posts-sidebar') ) {
                    echo '<aside>';
                    dynamic_sidebar('posts-sidebar');
                    echo '</aside>';
                }
            ?>

        </section>

    </div>

</main>

<?php get_footer(); ?>