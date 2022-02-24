<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package underscore
 */

get_header();
?>

<main class="site__main"> 
    <h1> ---- SINGLE-POST.PHP ----</h1>
    <?php if (have_posts()):the_post(); ?>


    <?php the_title(); ?>

    <div class="article__contenu">


    <?php if (has_post_thumbnail()): ?>
        <article class="article">
        
        <figure class="article__contenu__figure">
        <?php the_post_thumbnail(); ?> 

        </figure>

        <?php endif; ?>

       

   
    <?php the_content(); ?>

    
    </div>
    </article>
  

   
    <?php endif; ?>
    
</main>

<?php get_footer(); ?>