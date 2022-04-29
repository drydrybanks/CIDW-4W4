<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4W4 - Les cours du TIM</title>
    <?php wp_head(); 
    show_admin_bar(true); ?>
</head>
<body <?php body_class('site'); ?>>
<header class="site__header">
    <?= get_custom_logo(); ?>
    <section class="site__header__titre">

    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
    <h1><?php echo get_bloginfo(); ?></h1>
    </a>
    <h2 class="header__description"> Mon premier thème </h2>
    </section>
    <section class="util">

    <div class="icone">
       <?php get_sidebar("entete_1") ?>
    </div>

    <?php get_search_form(); ?>

    </section>
</header>
<section class="site__barre">
    <input type="checkbox" id="chk-burger">
    <label for="chk-burger" id="burger" class="burger">
        <!--Les 3 lignes de nos menus burger -->
        
        <div class="burger__ligne"></div>
        <div class="burger__ligne"></div>
        <div class="burger__ligne"></div>
    <?php

    $icone_menu = '<svg width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="#1A9FAD"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.933 12.8a1 1 0 000-1.6L6.6 7.2A1 1 0 005 8v8a1 1 0 001.6.8l5.333-4zm8 0a1 1 0 000-1.6l-5.333-4A1 1 0 0013 8v8a1 1 0 001.6.8l5.333-4z"></path></svg>';
    
    
    wp_nav_menu(array('menu' => 'principal',
                            "link_before"=>$icone_menu)); ?>
</section>