<?php get_header(); ?>




<!--Boucle wordpress-->
<div class="vide">

</div>
<?php if(have_posts()) : //si on recupère article
  while (have_posts()) : the_post(); ?> <!--Boucle: on les recupère un à un-->


</div>
      <div id="billets" class="row">

        <section class="article col s12 m6">

          <article class="card ">

            <div class="card-content ">
              <a class="card-title" href="<?php the_permalink()?>"><h2 class="hovertitle"><?php the_title()?></h2></a>
              <!--lien avec le marqueur Permalink pour rediriger vers page article quand on clik sur le titre-->
              <p class="extrait"><?php the_excerpt();?></p>
              <!--Marqueur Excerpt permet recupérer un extrait de l 'article-->
            </div>

            <div class="card-action extrait">
                <a class="hoverlink" href="<?php the_permalink()?>">Lire la suite ...</a>
              <!--Marqueur Permalink dans le lien lire la suite pour rediriger-->
            </div>

          </article>

        </section>
      </div>


      <div class="nav-previous"><?php next_posts_link( 'Older Entries »', 0 ); ?></div>
      <div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'mon-theme' ) ); ?></div>





<?php endwhile; else: ?>
<!-- mettre fin a la boucle et si il ne trouve pas de contenu affiche un mes
sage d'erreur -->
<p>La page demandé n'est pas accessible</p>

<?php endif; ?>

<!-- Fin de la condition -->




<?php get_footer(); ?>
