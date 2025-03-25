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
                    ceci est un espace pour écrire une adresse/ une coordonnée.
                </div>
                <div class="piedpage__s1__adresse__recherche">
                    <?php get_search_form();   ?>
                </div>
            </div>
            <div class="piedpage__s1__description">
                ceci est la description du problème en cours (erreur 404)
            </div>
        </section>
        <section class="piedpage__s2"></section>
      
        


    </div>
</footer>
<?php wp_footer() ?>