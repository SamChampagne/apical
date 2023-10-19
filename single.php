<?php
get_header();
while (have_posts()) : the_post();
?>

<!-- On fait apparaitre les post choisis -->
<div class="contenu_principale_formation ">
    <div class="contenu">

        <article <?php post_class(); ?>><h1><?php the_title(); ?></h1><?php the_content(); ?></article>
       
    </div>
</div>
<?php endwhile;
get_footer(); 
?>