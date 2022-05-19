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
    <h6>Description</h6>
     <?php the_field('description'); ?>

     </section>
     <p class="animateur">
     Cet atelier est donné par :<?php the_field('animateur') ?>

</p>
<section class="date__lieu">
    
    <p class="date__debut">
    Cet atelier débute le :<?php the_field('date_debut') ?>

    </p>

    <p class="date__fin">
    Et termine le :<?php the_field('date_fin') ?>

    </p>

    <p class="jours">
    Cet atelier à lieu les :<?php the_field('jours_semaine') ?>

    </p>

    <p class="heure__debut">
    De :<?php the_field('heure_debut') ?>

    </p>

    <p class="heure__fin">
    Jusqu'à<?php the_field('heure_fin') ?>

    </p>

    <p class="duree">
    Pour une durée de : <?php the_field('duree') ?>

    </p>

    <p class="local">
    Dans le local :  <?php the_field('local') ?>

    </p>

</section>

</div>
     



        <?php the_content() ?>        
   <?php endif ?>
</main>
<?php get_footer() ?>
