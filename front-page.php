<?php get_header() ?>
<main class="principal">
   

   <SECTION class="animation">
    
        <div class="animation__bloc">A</div>
        <div class="animation__bloc">C</div>
        <div class="animation__bloc">C</div>
        <div class="animation__bloc">U</div>
        <div class="animation__bloc">E</div>
        <div class="animation__bloc">I</div>
        <div class="animation__bloc">L</div>
     

   </SECTION>
   <h1>Activités en TIM</h1>
     <?php 
     
     wp_nav_menu(array("menu"=>"departement",
                         "container" => "nav"));
     
     ?>
     <h1>Les évènements important pour l'année</h1>
      <?php 
     
     wp_nav_menu(array("menu"=>"evenement",
                         "container" => "nav"));
     
     ?>




    <?php if(have_posts()):the_post(); ?>

    <?php the_title(); ?>
    <?php the_content(); ?>

       
        
    <?php endif; ?>
</main>
<?php get_footer() ?>