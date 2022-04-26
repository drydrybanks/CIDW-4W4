<article class="cours__carte <?php echo $categories[1]->slug ?> " >
                <?php
                    $titre = get_the_title();
                    $titreCourt = substr(get_the_title(), 8);
                    $titreCourt = substr($titreCourt, 0, strrpos($titreCourt, '('));

                    $posDebutHeures = strrpos($titre, '(') + 1;
                    $posFinHeures = strrpos($titre, ')');
                    // $ = substr($titre, $posDebutHeures, $posFinHeures - $posDebutHeures);
                    $nbHeures = get_field("nombre_dheures");

                    $descCours = wp_trim_words(get_the_content(),15,
                    '<button class="cours__desc__suite" href=#> Lire la suite </button>');
                
                    $descComplet = get_the_content();


                ?>



                <?php the_post_thumbnail('medium'); ?> 
                <!-- Afficher une option pour donner une image de mise en avant pour un article / page-->
               
               
                <code class="hide">
                    <?= $descComplet ?>
                </code>


                <h2 class="carte__titre">
                    <a href="<?php echo get_permalink(); ?>">
                        <?= $titreCourt; ?>
                    </a>
               </h2>
                <p class="carte__code"><?= substr(get_the_title(), 0, 7) ?></p>
                <p><?= $nbHeures; ?></p>
                <p class="carte__description"><?= $descCours ?></p>
            </article>