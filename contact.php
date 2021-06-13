<?php get_header(); ?>
<?php /* Template Name: contact */ ?>




<!-- begin contactpagina -->
<section class="intro fitbody">
  <div class="jumbotron jumbointro2">
    <div class="container jumbocontainer2 containercontact">


          <div class="container container-contact">
            <p class="titelcontact"> Contact </p>
              <p class="contactbeschrijving">
            <?php the_field('contact_beschrijving'); ?>
                </p>
            <div class="formstyling">
              <?php if(have_posts()): while(have_posts()): the_post(); ?>

                <?php the_content();?>
            </div>
</div>
          <!--  <p class="titelcontact"> Contact </p>
            <p class="contactbeschrijving">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            <div class="row ustify-content-md-center">
              <div class="col-sm">
                <form>
                  <div class="form-row ">
                    <div class="form-group col-md-6 col-styling">
                      <label for="inputEmail4"></label>
                      <input type="text" class="form-control contact-styling" id="inputEmail4" placeholder="Voornaam">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4"></label>
                      <input type="text" class="form-control contact-styling" id="inputPassword4" placeholder="Achternaam">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputAddress"></label>
                    <input type="email" class="form-control contact-styling" id="inputAddress" placeholder="Je Email">
                  </div>
                  <div class="form-group">
                    <label for="inputAddress2"></label>
                    <textarea rows="3" class="form-control contact-styling" id="inputAddress2"
                      placeholder="Type hier je bericht"></textarea>
                  </div>

                  <button type="submit" class="btn btn-primary contact-button btn-styling">Verstuur</button>
                </form>

              </div>
            </div>
          </div>


  </div>
    </div>
</section>





-->


</section>

<!-- begin footer -->
<?php get_footer(); ?>
<?php  endwhile;?>
<?php endif; ?>
