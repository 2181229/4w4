<footer>
    <div class="piedpage global">
        <section class="piedpage__s1">
         
                <?php wp_nav_menu(array(
                    "menu"=> "externe",
                    "container" => "nav",
                    "container_class" => "piedpage__s1__externe"
                )); ?>
                

            <div class="piedpage__s1__adresse">
                <div class="piedpage__s1__adresse__coord">
                    Trouvez une page:
                </div>
                <div class="piedpage__s1__adresse__recherche">
                    <?php get_search_form();   ?>
                </div>
            </div>
            <div class="piedpage__s1__description">
                droits d'auteurs
            </div>
        </section>
        <section class="piedpage__s2"></section>
      
        


    </div>
</footer>
<?php wp_footer() ?>