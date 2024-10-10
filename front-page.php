<?php /* Template name: Inicio */ get_header(); ?>

<main>
    <?php
        include(TEMPLATEPATH.'/sections/frontpage/hero.php');
        include(TEMPLATEPATH.'/sections/frontpage/about.php');
        include(TEMPLATEPATH.'/sections/frontpage/skills.php');
    ?>
</main>

<?php get_footer(); ?>