<?php

    function cidw_4w4_add_theme_support(){





        
    add_theme_support ( 'post-thumbnails');

    add_theme_support("custom-logo", array(
        "height" => 200,
        "width" => 200,
    ));

    }

    add_action('after_setup_theme', 'cidw_4w4_add_theme_support' );



    function cidw_4w4_enqueue(){
        wp_enqueue_style('main-styles', 
        get_template_directory_uri() . '/style.css',
        array(),
        filemtime(get_template_directory() . '/style.css'),
        false);
    }

    add_action("wp_enqueue_scripts", "cidw_4w4_enqueue");


    function cidw_4w4_enregistre_menu() {
        register_nav_menus(array
                        ('principal' => __('Menu principal','cidw_4w4'), 
                            'footer' => __('Menu pied de page', 'cidw-4w4'),
                            'footer_colonne' => __('Menu footer colonne', 'cidw-4w4') 
                            ) 
                        );
    }

    add_action('after_setup_theme', 'cidw_4w4_enregistre_menu');

    function cidw_4w4_filtre_menu_item($monObjet) {

        // var_dump($monObjet);

        foreach($monObjet as $key => $value){

            //print_r($value);
            // echo $value->title . '<br>' ;
            // $value->title = substr($value->title,0,7);

            $value->title = wp_trim_words($value->title, 2);
        }

        return($monObjet);
        

    }

    add_filter("wp_nav_menu_objects", "cidw_4w4_filtre_menu_item");



/* ============ ENREGISTRER LE SIDEBAR ================== */


    add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'entete_1',
            'name'          => __( 'entete_1' ),
            'description'   => __( 'Ce sidebar s\'affiche dans l\'entête du site ' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );


    register_sidebar(
        array(
            'id'            => 'footer_colonne_1',
            'name'          => __( 'footer_colonne_1' ),
            'description'   => __( 'Ce sidebar s\'affiche dans une colonne de pied de page ' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */

    register_sidebar(
        array(
            'id'            => 'footer_colonne_2',
            'name'          => __( 'footer_colonne_2' ),
            'description'   => __( 'Ce sidebar s\'affiche dans une colonne de pied de page ' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );


    register_sidebar(
        array(
            'id'            => 'footer_colonne_3',
            'name'          => __( 'footer_colonne_3' ),
            'description'   => __( 'Ce sidebar s\'affiche dans une colonne de pied de page ' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );


    
    register_sidebar(
        array(
            'id'            => 'footer_ligne_1',
            'name'          => __( 'footer_ligne_1' ),
            'description'   => __( 'Ce sidebar s\'affiche dans une colonne de pied de page ' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'id'            => 'footer_ligne_2',
            'name'          => __( 'footer_ligne_2' ),
            'description'   => __( 'Ce sidebar s\'affiche dans une colonne de pied de page ' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}




?>