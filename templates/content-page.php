<main>
    <section>
        <article>
            <?php 
                the_title('<h1 class="title-post">', '</h1>'); 
                the_content();    
            ?>
        </article>
        <?php 
            if ( is_active_sidebar('page-sidebar') ) {
                dynamic_sidebar('page-sidebar'); 
            } 
        ?>
    </section>
</main>