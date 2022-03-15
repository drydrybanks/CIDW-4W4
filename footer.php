<footer class="site__footer">




<!-- Première rangée de colonnes -->
<div class="site__footer__colonne">
        <!-- Une list des articles -->
        <section class="footer__article">

        <?php get_sidebar('footer_colonne_1'); ?>

        </section>
        <!-- L'adresse de l'entreprise -->
        <section class="footer__adresse">

        <?php get_sidebar('footer_colonne_2'); ?>

        938373 rue du Fun Noir
        </section>
        <!-- Les liens intéressants -->
        <section class="footer__liens">
    <?php 

        wp_nav_menu(array("menu"=>"externe"));
                                ?>
            <a href="#"></a>
            <a href="#"></a>
            <a href="#"></a>
            <a href="#"></a>
        </section>



    </div>


<!-- Rangée de lignes -->
    <div class="site__footer__ligne">
        <!-- Description du site -->
        <section class="description"></section>
        <!-- Le menu du footer -->
        <section class="footer__nav"></section>
        <!-- Les droits d'auteurs -->
        <section class="copyright"></section>
        <!-- Le nom de l'auteur -->
        <section class="footer__auteur"></section>

        <section class="footer__sociaux"></section>
        
        <?php get_sidebar('footer_ligne_1'); ?>

        




    </div>



    <section>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam rerum quaerat repudiandae enim ullam minima, sit perspiciatis fugiat necessitatibus cum voluptate neque blanditiis facere? Aperiam vero excepturi modi a unde!</p>
    

        <?php
        
        $icone = '<svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="#f00"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>';
        
        
        wp_nav_menu(array("menu"=>"simple", 
                                "container" => "nav",
                                "container_class"=>"site__footer__nav",
                                "menu_class" => "site__footer__menu__ul",
                                "link_before"=>$icone)); ?>

                        <?php get_search_form(); ?>
   
   
    </section>
    ­<?php wp_footer(); ?>
</footer>