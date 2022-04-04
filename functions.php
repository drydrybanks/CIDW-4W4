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

        wp_enqueue_style('cidw-4w4-police-google',"https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@700&display=swap", false);
            
    }

    add_action("wp_enqueue_scripts", "cidw_4w4_enqueue");


    function cidw_4w4_enregistre_menu() {
        register_nav_menus(array
                        ('principal' => __('Menu principal','cidw_4w4'), 
                            'footer' => __('Menu pied de page', 'cidw_4w4'),
                            'footer_colonne' => __('Menu footer colonne', 'cidw_4w4'), 
                            'menu_categorie' => __('Menu catégorie cours', 'cidw-4w4')
                      
                            ) 
                        );
    }

    add_action('after_setup_theme', 'cidw_4w4_enregistre_menu', 0);


    function prefix_nav_description( $item_output, $item, $args ) {
        if ( !empty( $item->description ) ) {
            $item_output = str_replace( $args->link_after . '</a>',
            $args->link_after .'<hr><span class="menu-item-description">' . $item->description . '</span>' . $args->link_after .
             '</a>', $item_output );
        }
        return $item_output;
        }
        add_filter( 'walker_nav_menu_start_el', 'prefix_nav_description', 10, 3 );

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
/**
 * @param : WP_Query $query
 */
function cidw_4w4_pre_get_posts(WP_Query $query)
// WP_QUERY = requête WpordPress de base pour accéder à ????
{

    $ordre = get_query_var('ordre');

    $cletri = get_query_var('cletri');
    echo "-------".$ordre."----".$cletri."------" ;

    if(!is_admin() && is_main_query() && is_category(array('cours','web','jeu','creation-3d','design', 'video','utilitaire'))) {
  //  var_dump($query);
 //   die();

    $query->set('posts_per_page', -1);

    $query->set('orderby', 'title');

    $query->set('order',  'ASC');
}

//   if (!is_admin() && is_main_query() && is_category(array('web','cours','design','video','utilitaire','creation-3d','jeu'))) 
//     {
//     //$ordre = get_query_var('ordre');
//     $query->set('posts_per_page', -1);
//     // $query->set('orderby', $cle);
//     $query->set('orderby', 'title');
//     // $query->set('order',  $ordre);
//     $query->set('order',  'ASC');
//     // var_dump($query);
//     // die();
//   }
}
function cidw_4w4_query_vars($params){
    $params[] = "cletri";
    $params[] = "ordre";
    //$params["cletri"] = "title";
    //var_dump($params); die();
    return $params;
}
add_action('pre_get_posts', 'cidw_4w4_pre_get_posts');
//

//add_filter('query_vars', 'cidw_4w4_query_vars' );

?>