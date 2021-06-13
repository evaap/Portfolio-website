<?php get_header(); ?>
<?php /* Template Name: overzichtgalerij */ ?>





<section class="fitbody">
<div class="jumbotron jumbotron-fluid portfoliojumbo">
  <div class="container">
    <h1 class="display-4"><?php echo the_field('overzicht_titel'); ?></h1>
    <p class="lead portfoliobeschrijving"><?php the_field('overzicht_beschrijving'); ?></p>
  </div>
</div>
</section>







<section class="fitbody">
<section class="portfoliogrid">
<div class="griditem1"> <img src= <?php echo (get_field('galerijfoto1')['url'] );?>  class="portfoliofoto">
<p class="gridborder"> <?php echo the_field('tekstgalerij1'); ?></p></div>

<div class="griditem2">
<img src= <?php echo (get_field('galerijfoto2')['url'] );?> class="portfoliofoto">
<p class="gridborder"> <?php echo the_field('tekstgalerij2'); ?> </p>
</div>
 </section>
 </section>




<section class="fitbody">
<section class="portfoliogrid ruimte">
<div class="griditem1"> <img src= <?php echo (get_field('galerijfoto3')['url'] );?> class="portfoliofoto">
<p class="gridborder2"> <?php echo the_field('tekstgalerij3'); ?> </p></div>

<div class="griditem2">
<img src= <?php echo (get_field('galerijfoto4')['url'] );?> class="portfoliofoto">
<p class="gridborder2"> <?php echo the_field('tekstgalerij4'); ?></p>
</div>
 </section>
</section>


<section class="fitbody">
<section class="portfoliogrid">
<div class="griditem1"> <img src= <?php echo (get_field('galerijfoto5')['url'] );?>  class="portfoliofoto">
<p class="gridborder"> <?php echo the_field('tekstgalerij5'); ?></p></div>

<div class="griditem2">
<img src= <?php echo (get_field('galerijfoto6')['url'] );?> class="portfoliofoto">
<p class="gridborder"> <?php echo the_field('tekstgalerij6'); ?> </p>
</div>
 </section>
 </section>



<section class="fitbody">
<section class="portfoliogrid ruimte">
<div class="griditem1"> <img src= <?php echo (get_field('galerijfoto7')['url'] );?> class="portfoliofoto">
<p class="gridborder2"> <?php echo the_field('portfolio_tekst3'); ?> </p></div>

<div class="griditem2">
<img src= <?php echo (get_field('galerijfoto8')['url'] );?> class="portfoliofoto">
<p class="gridborder2"> <?php echo the_field('tekstgalerij8'); ?></p>
</div>
 </section>
</section>



<section class="fitbody">
<section class="portfoliogrid">
<div class="griditem1"> <img src= <?php echo (get_field('galerijfoto9')['url'] );?>  class="portfoliofoto">
<p class="gridborder"> <?php echo the_field('tekstgalerij9'); ?></p></div>

<div class="griditem2">
<img src= <?php echo (get_field('galerijfoto10')['url'] );?> class="portfoliofoto">
<p class="gridborder"> <?php echo the_field('tekstgalerij10'); ?> </p>
</div>
 </section>
 </section>




<?php get_footer(); ?>
