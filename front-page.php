<?php get_header(); ?>


<section class="intro fitbody">
  <div class="jumbotron jumbointro">
    <div class="container jumbocontainer">
    <h1 class="display-4 introtitel"><?php the_field('page_titel'); ?></h1>
    <p class="lead introbeschrijf">Ik ben <span id="spin"></span></p>
  </div>
    </div>
</section>

<!--einde intro -->

<!-- omschrijving content  -->

<section class="contentintro">
    <div class="contentcontainer">
      <div class="left"><img src= <?php echo (get_field('foto_blok')['url'] );?> class="img-fluid responsive"></div>
      <div class="right">
        <div class="content">
          <h1 class="contentitel" ><?php the_field('eerste_blok'); ?></h1>
          <p class="contentbeschrijving">
      <?php the_field('blokomschrijving_een'); ?>
          </p>
        <a href= '<?php echo site_url('/some-path/portfolio'); ?>' class="btn"> Meer lezen</a>
        </div>
      </div>
    </div>
</section>


<!-- moeilijke stuk -->

<section class="voorpaginaintro">
  <div class="contentbeschrijving">
    <div class="middenlinks">
      <h1 class="contentitel" ><?php the_field('blok_titel2'); ?></h1>
      <p class="contentbeschrijving">
<?php the_field('blokomschrijving_twee'); ?>
      </p>
 <a href= '<?php echo site_url('/some-path/alle-berichten'); ?>' class="btn"> Meer lezen</a>
    </div>
      <div class="middenrechts">
<div class="fotomidden"><img src= <?php echo (get_field('foto_blok2')['url'] );?> class="img-fluid responsive"></div>
</div>

  </div>
</section>

<!-- einde moeiljke stuk -->




<section class="contentintro voorpaginaintro">
    <div class="contentcontainer">
      <div class="left"><img src= <?php echo (get_field('foto_blok3')['url'] );?> class="img-fluid responsive"></div>
      <div class="right">
        <div class="content">
          <h1 class="contentitel" ><?php the_field('blok_titel3'); ?></h1>
          <p class="contentbeschrijving">
      <?php the_field('blokomschrijving_drie'); ?>
          </p>
     <a href= '<?php echo site_url('/some-path/about-me'); ?>' class="btn"> Meer lezen</a>
        </div>
      </div>
    </div>
</section>

<?php get_footer(); ?>
