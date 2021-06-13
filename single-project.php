<?php acf_form_head(); ?>
<?php get_header(); ?>
<?php /* Template Name: showcase */ ?>
<?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>

<!-- Einde navigatie -->



<!-- progress -->
<section class="fitbody">

  <section>
    <img src= <?php echo (get_field('pgrote_foto1')['url'] );?> class="img-fluid projectgroot" alt="Responsive image">
    </section>

<section class="projectnaam">
  <p>
    <?php the_field('projectnaam'); ?>
    </p>
  </section>


<div class="jumbotron jumbotron-fluid portfoliojumbo">
  <div class="container">
    <h1 class="display-4"><?php the_field('casenaam'); ?></h1>
    <p class="lead portfoliobeschrijving2"><?php the_field('caseomschrijving'); ?></p>
  </div>
</div>
</section>

<section class="fitbody">
<div class="jumbotron jumbotron-fluid portfoliojumbo projecttitels">
  <div class="container">
    <h1 class="display-4"><?php the_field('procesnaam'); ?></h1>
    <p class="lead portfoliobeschrijving2"><?php the_field('procesomschrijving'); ?></p>
  </div>
</div>




<section class="portfoliogrid">
<div class="griditem1"> <img src= <?php echo (get_field('projectfoto_klein1')['url'] );?> class="portfoliofoto">
</div>

<div class="griditem2">
<img src= <?php echo (get_field('projectfoto_klein2')['url'] );?> class="portfoliofoto">

</div>
 </section>


<section class="tekstproject">
  <p>
     <?php the_field('tussentekst1'); ?>
    </p>
  </section>


<section>
  <img  src= <?php echo (get_field('tussenfoto1')['url'] );?> class="img-fluid projectgroot" alt="Responsive image">
  </section>



     <section class="tekstproject">
       <p>
    <?php the_field('beschrijvingproject3'); ?>
         </p>
       </section>

       <div class="jumbotron jumbotron-fluid portfoliojumbo projecttitels">
         <div class="container">
           <h1 class="display-4"><?php the_field('bouwentitel'); ?></h1>
           <p class="lead portfoliobeschrijving2"><?php the_field('bouwenbeschrijving'); ?></p>
         </div>
       </div>

       <section class="portfoliogrid">
       <div class="griditem1"> <img src= <?php echo (get_field('bouwenfoto1')['url'] );?> class="portfoliofoto">
       </div>

       <div class="griditem2">
       <img <img src= <?php echo (get_field('bouwenfoto2')['url'] );?> class="portfoliofoto">

       </div>
        </section>


       <section class="tekstproject">
         <p>
  <?php the_field('bouwenomschrijving1'); ?>
           </p>
         </section>


       <section>
         <img src= <?php echo (get_field('bouwenfoto3')['url'] );?> class="img-fluid projectgroot" alt="Responsive image">
         </section>

         <section class="tekstproject">
           <p>
            <?php the_field('bouwenomschrijving2'); ?>
             </p>
           </section>

         <section class="portfoliogrid tussenproject">
         <div class="griditem1"> <img src= <?php echo (get_field('bouwenfoto4')['url'] );?> class="portfoliofoto">
         </div>

         <div class="griditem2">
         <img src= <?php echo (get_field('bouwenfoto5')['url'] );?> class="portfoliofoto">

         </div>
          </section>

          <section class="tekstproject">
            <p>
 <?php the_field('bouwenomschrijving3'); ?>
              </p>
            </section>

            <div class="jumbotron jumbotron-fluid portfoliojumbo projecttitels">
              <div class="container">
                <h1 class="display-4"><?php the_field('eindresultaat'); ?></h1>
                <p class="lead portfoliobeschrijving2">
<?php the_field('eindresultaatbeschrijving'); ?>
                </p>
              </div>
            </div>

            <section class="portfoliogrid tussenproject">
            <div class="griditem1"> <img src= <?php echo (get_field('eindfoto1')['url'] );?> class="portfoliofoto">
            </div>

            <div class="griditem2">
            <img src= <?php echo (get_field('eindfoto2')['url'] );?>  class="portfoliofoto">

            </div>
             </section>

             <section class="portfoliogrid tussenproject">
             <div class="griditem1"> <img src= <?php echo (get_field('eindfoto3')['url'] );?> class="portfoliofoto">
             </div>

             <div class="griditem2">
             <img src= <?php echo (get_field('eindfoto4')['url'] );?>  class="portfoliofoto">

             </div>
              </section>

              <div class="jumbotron jumbotron-fluid portfoliojumbo projecttitels">
                <div class="container">
                  <h1 class="display-4"><?php the_field('reflectietitel'); ?></h1>
                  <p class="lead portfoliobeschrijving2"><?php the_field('eindomschrijving'); ?></p>
                </div>
              </div>









 </section>


<?php  endwhile;?>
<?php endif; ?>


<?php get_footer(); ?>
