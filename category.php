<?php get_header() ?>
<main class="site__main">
    <h2>Liste de cours</h2>
    <?php if(have_posts()): ?>
        <h1>----CATEGORY-------</h1>
        <?php if (is_category(array('cours','creation-3d','web', 'jeu', 'design', 'utilitaire', 'video'))): ?>

        <?php wp_nav_menu(array(
            "menu" => "categorie_menu",
            "container" => "nav"
        ));
        ?>
        <section class="cours">
            <?php while(have_posts()): the_post(); ?>




            <?php 
            
            $categories = get_the_category();
            
            
           
         //   var_dump()
            //    the_category(); ?>




            

            <?php get_template_part('gabarit/content', 'cours');  ?>
            <?php endwhile; ?>
        </section>
    <?php endif; // if (have_posts)?>
    <?php endif; //if (is_category('cours)): ?>

     
</main>
<?php get_footer() ?>