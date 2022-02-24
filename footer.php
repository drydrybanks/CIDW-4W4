<footer class="site__footer">
    <section>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam rerum quaerat repudiandae enim ullam minima, sit perspiciatis fugiat necessitatibus cum voluptate neque blanditiis facere? Aperiam vero excepturi modi a unde!</p>
    

        <?php
        
        $icone = '<svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="#f00"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>';
        
        
        wp_nav_menu(array("menu"=>"simple", 
                                "container" => "nav",
                                "container_class"=>"site__footer__nav",
                                "menu_class" => "site__footer__menu__ul",
                                "link_before"=>$icone)); ?>

                        <?php get_search_form(); ?>
   
   
    </section>
    ­<?php wp_footer(); ?>
</footer>