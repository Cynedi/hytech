<?php
$args = array ( 'category' => ID, 'posts_per_page' => 5);
$myposts = get_posts( $args );
foreach( $myposts as $post ) :	setup_postdata($post);
 ?>


 <div class="row">
   <section class="col s12 m6">

     <article class="card blue-grey darken-1">

       <div class="card-content white-text">
         <a class="card-title" href="<?php the_permalink()?>"><h1 class="hovertitle"><?php the_title()?></h1></a>
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

<?php endforeach; ?>
