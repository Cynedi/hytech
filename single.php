<?php get_header(); ?>

<div class="retourliste">
<a  href="index.php/blog">Retour à la liste des articles</a>
</div>

<div id="vuedetaille" class="row">

<!--Aside-->
  <div id="aside" class="right  col m3">
  <?php dynamic_sidebar('defaut'); ?>
  </div>

<!--Vue detaillé de l'article-->
<div class=" detail col s12 m6">


<?php if(have_posts()) : //si on recupère article
  while (have_posts()) : the_post(); ?> <!--Boucle: on les recupère un à un-->

  <h2 class="titlearticle"><?php the_title(); ?></h1>

<?php the_post_thumbnail('thumbnail',array('class' => 'centerimg')); ?> <!--Affiche l'image à la une-->

  <div class="centerarticle flow-text"><?php the_content(); ?></div> <!--Affiche le contenu-->

</div>

</div>
<!--Fin de la vue détaillé-->

<span class="cat">
  Catégorie de cet article:<?php the_category(); ?>
</span><!--Affiche la categorie de l 'article-->

<div class="centercom"><?php comments_template(); ?></div>
<!--Affiche la possibilité d'ajouter des commentaires (template wordpress-->)

<?php endwhile; else: ?>
<?php endif; ?>


<?php get_footer(); ?>
