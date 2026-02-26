<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <!--animate-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <?php wp_enqueue_script('jquery'); ?>
    <?php wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', array('jquery')); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header id="header" class="l-header fadein animate__animated">
        <div class="l-container">
            <h1 class="site-title">
                <a href="<?php echo home_url(''); ?>" class="site-title__link">
                    <span>ikaomoti</span><span class="site-title__bar"> | </span><span>Web engineer</span>
                </a>
            </h1>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'gloval-nav-menu',
                    'container' => 'nav',
                    'container_class' => 'gnav',
                    'menu_class' => 'gnav__list',
                    'add_li_class'  => 'gnav__list-item'
                )
            );
            ?>
            <div class="hamburger-button">
                <span class="hamburger-button__bar"></span>
                <span class="hamburger-button__bar"></span>
                <span class="hamburger-button__bar"></span>
            </div>
        </div>
    </header>