<?php /* Template Name: allpost */ ?>
<?php get_header(); ?>


  <section class="fitbody">
  <div class="jumbotron jumbotron-fluid portfoliojumbo">
    <div class="container">
      <h1 class="display-4"><?php echo the_field('alleberichten_titel'); ?></h1>
      <p class="lead portfoliobeschrijving"><?php the_field('alleberichten_beschrijving'); ?></p>
    </div>
  </div>
  </section>


<div class="fitbody">

    <?php if($posts = get_posts($args = array( 'numberposts' => 16))): ?>
    <div class="portfoliogrid ">
        <?php foreach($posts as $post): ?>
        <div class="col  ">
            <div class="">
                <div class="gridborder4">
                    <img alt="thumbnail" <?php if ( has_post_thumbnail() ) {
    the_post_thumbnail('medium',array('class' => 'foto_post'));
}
?> <div class="alleberichten_tekst" onclick="window.location.href = '<?php the_permalink();?>';"><?php the_excerpt(); ?></div>


                </div>
            </div>
        </div>

        <?php endforeach; ?>
    </div>
    <?php endif; ?>
</div>



<?php get_footer(); ?>
