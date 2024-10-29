<main>
    <article>
        <div class="container header-post">
            <div class="blur"></div>
            <section class="section breadcrumb"><?php get_breadcrumb(); ?></section>
            <section class="section title-and-data__wrapper">
                <?php
                    the_title('<h1 class="title-post">', '</h1>');
                    include(TEMPLATEPATH.'/sections/widgets/author.php');
                    include(TEMPLATEPATH.'/sections/widgets/date.php');
                    include(TEMPLATEPATH.'/sections/widgets/share.php');
                ?>
            </section>
        </div>
        <div class="container body-post">
            <section class="section">
                <div class="content-post">
                    <?php the_content(); ?>
                </div>
                <?php
                    if ( is_active_sidebar('single-sidebar') ) {
                        echo '<aside>';
                        dynamic_sidebar('single-sidebar');
                        echo '</aside>';
                    }
                ?>
            </section>
        </div>
    </article>
</main>