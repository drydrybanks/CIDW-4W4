<?php get_header() ?>

<main class="site__main">
    <h1></h1>

    <?php if(have_posts()) : ?>
    <?php while(have_posts()): the_post(); ?>
   
    

    <h3>
        <?php get_permalink(); ?>
        <?php the_title(); ?> <?= wp_trim_words(get_the_content(), 20, "...>"); ?>

    </h3>



    <?php endwhile; ?>
    <?php else : ?>
        <p>Aucun résultat</p>


        <?php endif; ?>



</main>

<?php get_footer(); ?>