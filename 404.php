<?php 
    get_header();
?>
<div class="contenu_principale_404 ">

    <div class="contenu">

        <div class="titre">

            <!-- titre -->
            <hr class="hr-contenu">
                <p id="titre-posts">La page demandée n'existe pas</p>
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