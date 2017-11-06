<?php get_header(); ?>
<a href="index.php/blog">Retour à la liste des articles</a>

<?php if(have_posts()) : //si on recupère article
  while (have_posts()) : the_post(); ?> <!--Boucle: on les recupère un à un-->

<h1 class="titlearticle"><?php the_title(); ?></h1>

<?php the_post_thumbnail('thumbnail',array('class' => 'centerimg')); ?> <!--Affiche l'image à la une-->

<div class="centerarticle flow-text"><?php the_content(); ?></div> <!--Affiche le contenu-->

<span class="cat">
  Catégorie de cet article:<?php the_category(); ?>
</span><!--Affiche la categorie de l 'article-->

<div class="centercom"><?php comments_template(); ?></div>
<!--Affiche la possibilité d'ajouter des commentaires (template wordpress-->)

<?php endwhile; else: ?>
<?php endif; ?>


<?php get_footer(); ?>
