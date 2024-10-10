<?php /* Template name: Inicio */ get_header(); ?>

<main>
    <?php
        include(TEMPLATEPATH.'/sections/frontpage/hero.php');
        include(TEMPLATEPATH.'/sections/frontpage/about.php');
        include(TEMPLATEPATH.'/sections/frontpage/skills.php');
        include(TEMPLATEPATH.'/sections/frontpage/portfolio.php');
        include(TEMPLATEPATH.'/sections/frontpage/experience.php');
    ?>
</main>

<?php get_footer(); ?>