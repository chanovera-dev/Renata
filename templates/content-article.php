<main>
    <article>
        <div class="container header-post">
            <div class="blur"></div>
            <section class="section title-and-data__wrapper">
                <?php
                    the_title('<h1 class="title-post">', '</h1>');
                    include(TEMPLATEPATH.'/sections/widgets/author.php');
                    include(TEMPLATEPATH.'/sections/widgets/date.php');
                    include(TEMPLATEPATH.'/sections/widgets/share.php');
                ?>
            </section>
        </div>
    </article>
</main>