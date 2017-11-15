<?php get_header(); ?>
<!-- contenu -->


<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
<!-- si il y a des articles dans la base de donnée alors recuperer les arti
cles et tant qu'il y a des posts fait: -->
<?php the_content(); ?>

<!-- afficher le contenu de l'article -->
<?php endwhile; else: ?>
<!-- mettre fin a la boucle et si il ne trouve pas de contenu affiche un mes
sage d'erreur -->
<p>La page demandé n'est pas accessible</p>
<?php endif; ?>
<!-- Fin de la condition -->


<?php get_footer(); ?>
