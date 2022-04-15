<?php
/**
* Template Name: Évenement
*
* @package WordPress
* @subpackage cidw_4w4
*/
?>

<?php get_header() ?>
<main class="site__main">
    <h1>---- Template evenement ------</h1>
   <?php if (have_posts()): the_post(); ?>
       <h1> <?php the_title() ?> </h1>
     <!-- Le titre de la page -->
     <section class="evenement__resume">

     <?php the_field('resume'); ?>

     </section>
     <p class="evenement__endroit">
     <?php the_field('endroit') ?>

     </p>
     



        <?php the_content() ?>        
   <?php endif ?>
</main>
<?php get_footer() ?>