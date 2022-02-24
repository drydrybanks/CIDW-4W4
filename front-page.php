<?php get_header() ?>
<main class="principal">
   <h1>FRONT-PAGE.PHP</h1>

   <SECTION class="animation">

        <div class="animation__bloc">1</div>
        <div class="animation__bloc">2</div>
        <div class="animation__bloc">3</div>
        <div class="animation__bloc">4</div>
        <div class="animation__bloc">5</div>


   </SECTION>
    <?php if(have_posts()):the_post(); ?>

    <?php the_title(); ?>
    <?php the_content(); ?>

       
        
    <?php endif; ?>
</main>
<?php get_footer() ?>