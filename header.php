<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="https://apical.xyz/apple-touch-icon.png">
    <title>Apical</title>
    <!-- les fichiers implémenter par fonctions.php -->
    <!-- <link rel="stylesheet" href="/wp-content/themes/apical/style.css"> -->
    <!-- <link rel="script" href="/wp-content/themes/apical/assets/js/header.js"> -->
    <?php
        wp_head();
    ?>
</head>
<header>

    <!-- logo -->
    <div class="logo-container">
        <div class="logo">  
            <a href="https://apical.xyz">
                <img src="https://apical.xyz/medias/fr/LogoApical-blanc.svg" alt="Logo">
            </a>
        </div>
        <div class="icons">
            <a href="index.php" class="icon">   
                <img src="https://apical.xyz/medias/commun/Accueil-MenuSecondaire.svg" alt="Accueil">
            </a>
            <a href="#" class="icon" id="rechercher-icone"> 
                <img src="https://apical.xyz/medias/commun/Rechercher-MenuSecondaire.svg" alt="Rechercher">
            </a>
            <a href="#" class="icon" id="login-icone">
                <img src="https://apical.xyz/medias/commun/Login-MenuSecondaire.svg" alt="Login">
            </a>
        </div>
    </div>

    <!-- formulaire -->
    <div id="login-form" class="login-form" style="display: none;">
        <form>
            <input type="text" placeholder="Utilisateur">
            <input type="password" placeholder="Mot de passe">
            <label for="remember">Rester connecté</label>
            <input type="checkbox" id="remember">
            <button type="submit">Se connecter</button>
            <a href="#" id="close-form">Fermer</a>
        </form>
    </div>
 
    <!-- Navigation -->
    <div class="bar-navig">
        <nav>
            <ul class="menu">
            <?php
                // Créez une requête WP_Query pour obtenir toutes les pages
                $args = array(
                'post_type' => 'page',
                'posts_per_page' => -1, // Affichez toutes les pages
                );
                $pages_query = new WP_Query($args);

                // Vérifiez si des pages sont trouvées
                if ($pages_query->have_posts()) {
                    
                    while ($pages_query->have_posts()) {
                        $pages_query->the_post();
                        echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
                    }
                    

                    // Réinitialisez la requête WP_Query
                    wp_reset_postdata();
                }
            ?>
            </ul>
        </nav>
    </div>


    <br>
    <br>

</header>
