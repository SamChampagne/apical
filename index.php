<?php 
    get_header();
?>
<!-- le carré ou le contenu va être rentrer  -->
<div class="contenu_principale_formation ">
    <div class="contenu">
        <div class="titre">
            
            <br>
            <!-- Titre du contenu avec ses séparations -->
            <hr class="hr_separation_contenu">

                <p class="titre_formation">Formation PUB020: WordPress, 2023</p>

            <hr class="hr_separation_contenu">

        </div>

            <!-- boutton pour réduire la page  -->
        <div class="bouton_reduire_container">

            <a class="bouton_reduit">Tout réduire</a>

        </div>
        <!-- le php qui affiche les post ici -->
        <?php
        // Créez une requête WP_Query pour obtenir toutes les publications (posts)
        $chiffre = 1;
        $args = array(      
            'post_type' => 'post', // Utilisez 'post' pour obtenir tous les types de publications
            'posts_per_page' => -1, // Affichez tous les posts
        );

        $posts_query = new WP_Query($args);

        // Vérifiez si des posts sont trouvés
        if ($posts_query->have_posts()) {
            echo '<ul>'; // Commencez une liste ordonnée ici
            while ($posts_query->have_posts()) {
                $posts_query->the_post();
                
                echo '<li class="post"><a href="' . get_permalink() . '">' . $chiffre . '. ' . get_the_title() . '</a></li>';

            
                $chiffre++;
            }
            echo '</ul>'; // Terminez la liste ordonnée ici
        
            // Réinitialisez la requête WP_Query
            wp_reset_postdata();
        }
        ?>
    </div>
</div>
<?php 
    get_footer();
?>