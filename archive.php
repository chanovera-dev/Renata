<?php get_header(); ?>

<main>

    <div class="container">

        <section class="section">
            <?php the_archive_title( '<h1>', '</h1>' ); ?>
            <div class="posts-wrapper">
                <?php
                    if ( have_posts() ){

                        echo '<div class="posts">';

                        while( have_posts() ){

                            the_post();
                            get_template_part( 'templates/content', 'archive' );

                        }

                        echo '</div>';

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