<?php get_header(); ?>

<main>

    <div id="breadcrumb" class="container">
        <section class="section"><div><?php get_breadcrumb(); ?></div></section>
    </div>

    <div class="container">

        <section class="section">

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
                        echo esc_html__('No posts found', 'renata');
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