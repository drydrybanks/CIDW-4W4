<?php get_header() ?>
<main class="principal">
   <h1>MA PAGE D'ACCUEIL PERSONNALISÉ</h1>

   <SECTION class="animation">
    
        <div class="animation__bloc">A</div>
        <div class="animation__bloc">C</div>
        <div class="animation__bloc">C</div>
        <div class="animation__bloc">U</div>
        <div class="animation__bloc">E</div>
        <div class="animation__bloc">I</div>
        <div class="animation__bloc">L</div>
     

   </SECTION>
    <?php if(have_posts()):the_post(); ?>

    <?php the_title(); ?>
    <?php the_content(); ?>

       
        
    <?php endif; ?>
</main>
<?php get_footer() ?>