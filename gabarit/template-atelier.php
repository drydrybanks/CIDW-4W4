<?php
/**
* Template Name: Atelier
*
* @package WordPress
* @subpackage cidw_4w4
*/
?>


<?php get_header() ?>
<main class="site__main">
    <h1>---- Template atelier ----- </h1>
   <?php if (have_posts()): the_post(); ?>
   <div class="conteneur__atelier">
       <h1> <?php the_title() ?> </h1>
     <!-- Le titre de la page -->
     <section class="atelier_description">
    <h4>Description</h4>
    <span class=champs> <?php the_field('description'); ?> </span>

     </section>
     <p class="animateur">
     Cet atelier est donné par :<span class=champs><?php the_field('animateur') ?></span>

</p>
<section class="date__lieu">
    <h4>Horaire et dates</h4>
    
    <p class="date__debut">
    Cet atelier débute le :<span class=champs><?php the_field('date_debut') ?> </span>

    </p>

    <p class="date__fin">
    Et termine le :<span class=champs><?php the_field('date_fin') ?></span>

    </p>

    <p class="jours">
    Cet atelier à lieu les :<span class=champs><?php the_field('jours_semaine') ?></span>

    </p>

    <p class="heure__debut">
    De :<span class=champs><?php the_field('heure_debut') ?></span>

    </p>

    <p class="heure__fin">
    Jusqu'à :<span class=champs><?php the_field('heure_fin') ?></span>

    </p>

    <p class="duree">
    Pour une durée de :<span class=champs> <?php the_field('duree') ?></span>

    </p>

    <p class="local">
    Dans le local :  <span class=champs><?php the_field('local') ?></span>

    </p>

</section>

</div>
     



        <?php the_content() ?>        
   <?php endif ?>
</main>
<?php get_footer() ?>
