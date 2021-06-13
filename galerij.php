<?php get_header(); ?>
<?php /* Template Name: galerij */ ?>




<!-- progress -->
<section class="fitbody">

  <section>
    <img src= <?php echo (get_field('projectgalerij_foto')['url'] );?> class="img-fluid projectgroot" alt="Responsive image">
    </section>

<section class="projectnaam">
  <p>
  <?php the_field('projectgalerij'); ?>
    </p>
  </section>


<div class="jumbotron jumbotron-fluid portfoliojumbo">
  <div class="container">
    <h1 class="display-4"><?php the_field('galerij1titel'); ?></h1>
    <p class="lead portfoliobeschrijving2"><?php the_field('galerij1beschrijving'); ?></p>
  </div>
</div>
</section>

<section class="fitbody">
<div class="jumbotron jumbotron-fluid portfoliojumbo projecttitels">
  <div class="container">
    <h1 class="display-4"><?php the_field('galerijeind_titel'); ?></h1>
    <p class="lead portfoliobeschrijving2"><?php the_field('galerij1_beschrijving'); ?></p>
  </div>
</div>




       <section class="portfoliogrid">
       <div class="griditem1"> <img src= <?php echo (get_field('fotogal1')['url'] );?>  class="portfoliofoto">
       </div>

       <div class="griditem2">
       <img src= <?php echo (get_field('fotogal2')['url'] );?>  class="portfoliofoto">

       </div>
        </section>






         <section class="tekstproject">
           <p>
             <?php the_field('galeind1'); ?>
             </p>
           </section>

         <section class="portfoliogrid tussenproject">
         <div class="griditem1"> <img src= <?php echo (get_field('fotogal3')['url'] );?> class="portfoliofoto">
         </div>

         <div class="griditem2">
         <img src= <?php echo (get_field('fotogal4')['url'] );?> class="portfoliofoto">

         </div>
          </section>

          <section class="tekstproject">
            <p>
                 <?php the_field('galeind2'); ?>
              </p>
            </section>


 </section>





<?php get_footer(); ?>
