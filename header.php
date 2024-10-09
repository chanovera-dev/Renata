<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="site">
        <?php include(TEMPLATEPATH.'/sections/header/menu-mobile.php'); ?>
        <div id="panel-overlay"></div>
        <header id="mobile-header" class="container main-header">
            <section class="section header-content">
                <?php
                    include(TEMPLATEPATH.'/sections/header/menu-button.php');
                    include(TEMPLATEPATH.'/sections/header/brand.php');
                    include(TEMPLATEPATH.'/sections/header/searchform-button.php');
                ?>
            </section>
            <?php include(TEMPLATEPATH.'/sections/header/searchform-mobile.php'); ?>
        </header>
        <header id="desktop-header" class="container main-header">
            <section class="section header-content">
                <?php
                    include(TEMPLATEPATH.'/sections/header/brand.php');
                    include(TEMPLATEPATH.'/sections/header/menu-desktop.php');
                    get_search_form();
                ?>
            </section>
        </header>