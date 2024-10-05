<main class="container">
    <section class="section">
        <article>
            <?php 
                the_title('<h1 class="title-post">', '</h1>'); 
                the_content();   
            ?>
        </article>
        <?php 
            if ( is_active_sidebar('single-sidebar') ) {
                dynamic_sidebar('single-sidebar'); 
            }
        ?>
        <div>
            <?php comments_template(); ?>
        </div>
    </section>
</main>