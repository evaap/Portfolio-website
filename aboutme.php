<?php get_header(); ?>
<?php /* Template Name: aboutme */ ?>




<!-- Einde navigatie -->

<section class="intro fitbody">
  <div class="jumbotron jumbointro aboutmeout">
    <div class="container">
      <div class="rechts2">
        <h1 class="aboutmetitel"> <?php the_field('aboutme_titel'); ?></h1>
        <p class="aboutmebeschrijving">
      <?php the_field('aboutme_beschrijving'); ?>
          </p>
        </div>
  <div class= fotorechts>
<img <img src= <?php echo (get_field('blokfoto')['url'] );?> class="img-fluid responsive aboutmefoto">
    </div>
  </div>
    </div>


             <section class="portfoliogrid2">
             <div class="griditem1"> <img src= <?php echo (get_field('animalcrossing_foto')['url'] );?>  class="portfoliofoto">
             </div>

             <div class="griditem2">
             <img src= <?php echo (get_field('jurre_aboutme')['url'] );?>  class="portfoliofoto">

             </div>
              </section>




<!-- progress -->

  </section>






<!-- begin footer -->
<?php get_footer(); ?>
