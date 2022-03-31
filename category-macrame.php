 <?php get_header() ?>

<main class="site__main">
    <h1>
        -----category-macrame.php----------
    </h1>

    <?php if (have_posts(): while(have_posts())):   ?>

        <?php the_title(); ?>
        <?php the_content(); ?>



        <?php endwhile; ?>
        <?php endif; ?>



</main>
<?php get_footer(); ?>
