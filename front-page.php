<?php get_header();


//On definie nos Option
$args=array('post_type' => 'post', //Que les articles

          );

//on stock la requete dans une var pour l'utiliser dans la boucle
$slides = new WP_Query ($args);

//on crée la boucle
if ($slides ->have_posts()):?>


    <div id="carousel">
      <div class="alaune">
        <h2>- Les articles à la une -</h2>

      </div>


      <?php while ($slides->have_posts()):$slides-> the_post();?>

        <div class="text">
          <?php the_title();?>
        </div>

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
