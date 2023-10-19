<?php 
    get_header();
?>
<!-- page erreur 404 -->
<div class="contenu_principale_404 ">
    <div class="contenu">

        <div class="titre">

            <!-- titre -->
            <hr class="hr-contenu">

                <!-- j'ai mis le style dans le p ici, car problème quand je le met dans le style -->
                <p id="titre-posts" style="font-size: 20px; font-weight: 500; font-family: Raleway, sans-serif; color: #333;">La page demandée n'existe pas</p>

            <hr class="hr-contenu">

        </div>

        <!-- message envoyer -->
        <p id="texte_404" style="text-align: left;">La page demandée n'existe pas. Voici les pages disponibles sur Apical :</p>

        <!-- Les possibilités de tâches -->
        <ul id="lien_page_depannage" style="list-style-type: disc; text-align: left;">
            <li><a class="lien_404" href="index.php">Accueil</a></li>
            <li><a class="lien_404" href="/">Formations</a></li>
            <li><a class="lien_404" href="/">Blogue</a></li>
            <li><a class="lien_404" href="/">À propos</a></li>
            <li><a class="lien_404" href="/">Contact</a></li>
        </ul>



    </div>
</div>

<?php 
    get_footer();
?>