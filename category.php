<?php get_header() ?>
<main class="site__main">
    <h2>Liste de cours</h2>
    <?php if(have_posts()): ?>
        <h1>----CATEGORY-------</h1>

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




            <article class="cours__carte <?php echo $categories[1]->slug ?> " >
                <?php
                    $titre = get_the_title();
                    $titreCourt = substr(get_the_title(), 8);
                    $titreCourt = substr($titreCourt, 0, strrpos($titreCourt, '('));

                    $posDebutHeures = strrpos($titre, '(') + 1;
                    $posFinHeures = strrpos($titre, ')');
                    $nbHeures = substr($titre, $posDebutHeures, $posFinHeures - $posDebutHeures);
                ?>

                <?php the_post_thumbnail('medium'); ?> 
                <!-- Afficher une option pour donner une image de mise en avant pour un article / page-->
               
               



                <h2 class="carte__titre">
                    <a href="<?php echo get_permalink(); ?>">
                        <?= $titreCourt; ?>
                    </a>
               </h2>
                <p class="carte__code"><?= substr(get_the_title(), 0, 7) ?></p>
                <p><?= $nbHeures; ?></p>
                <p class="carte__description"><?= get_the_excerpt() ?></p>
            </article>
            <?php endwhile; ?>
        </section>
    <?php endif; ?>
</main>
<?php get_footer() ?>