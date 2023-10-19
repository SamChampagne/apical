<!-- Page.php fait bugguer mon index.php, donc pour l'exercice je n'est pas réussie a la mettre. Par contre, au début du projet la page marchais bien. -->
<?php
get_header();
if (have_posts()) : while (have_posts()) : the_post();
?>

<!-- On fait apparaitre le contenu de la page, je suis pas sure si sa marche bien, car ma page voulais pas ouvrir a cause du bug avec l'index-->
<div class="contenu_principale_formation">
    <div class="contenu">
        <article <?php post_class(); ?>>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </article>
    </div>
</div>

<?php
endwhile;
endif;
get_footer();
