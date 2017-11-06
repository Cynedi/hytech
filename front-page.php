<?php get_header();



//On definie nos Option
$args=array('post_type' => 'post', //Que les articles
            'category_name' => 'news', //de la catégorie News
          );

//on stock la requete dans une var pour l'utiliser dans la boucle
$slides = new WP_Query ($args);

//on crée la boucle
if ($slides ->have_posts()):?>


    <div id="carousel">

      <?php while ($slides->have_posts()):$slides-> the_post();?>

        <div class="item">

          <a href="<?php echo get_permalink();?>">

            <div class= "imageContainer">
              <?php the_post_thumbnail('slides',array('class' => 'Slide'));?>
            </div>

          </a>

        </div>




  <?php endwhile; ?>

</div>

<?php endif;
wp_reset_postdata(); //On arrete la requete

get_footer(); ?>
