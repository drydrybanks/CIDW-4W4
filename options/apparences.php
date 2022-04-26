<?php 
/*
Le hook : 'customize_register' qui sera utilisé dans le l'écouteur add_action()
La fonction de rappel : function(WP_Customizer_Manager, $manager)
La méthode add_section( id de la section,
                         [
                             "title" => "Le titre de la section"
                         ]);
La méthode add_setting ( Le nom de la variable php qui sera utilisée dans notre thème,
                          [   "default" => la valeur par défaut de la variable,
                              "sanitize_callback"=> "sanitize_hex_color" // permet de valider/filtrer la donnée
                          ]);   

La méthode add_control ( le nom de la variable php qui sera utilisé dans notre thème,
                          ["section"=> le ID de la section,
                           "setting"=> le nom de la variable,
                           "label"=> l'étiquette de la variable dans le formulaire 
                           ])                          

Pour utiliser une interface de couleur plus complexe on peut utiliser 
La méthode add_control (new WP_Customize_Color_Control($manager, le nom de la variable php,
                      ["section"=>"le ID de la section",
                      "label"=>l'étiquette de la variable dans le formulaire  ]));





*/



// Add action est un hook qui permet d'initialiser la fonction 

add_action('customiza_register', function(WP_Customizer_Manager $manager){

$manager->add_section();
$manager->add_setting();
$manager->add_control();


});





?>