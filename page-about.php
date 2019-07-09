<?php
/*
  Template Name: About Page
 */

 // ADVANCED CUSTOM FIELDS
 // intro
 $hero_image   = get_field('about_hero');
 $hero_title  = get_field('about_hero_title');
 $intro_title  = get_field('about_intro_title');
 $intro_body   = get_field('about_intro_body');

get_header(); ?>

  <!-- ======= HERO ========================== -->
  <div class="fade-down">
    <!-- if user uploaded image -->
    <?php 
      if(!empty($hero_image) ) { 
    ?>
    <section class="hero hero-about" style="background: url(<?php echo $hero_image['url']; ?>) center center no-repeat;">
      <?php } else {?>
    <section class="hero hero-about">
        <?php } ?>
      <div class="hero-container">
        <h2><?php echo $hero_title; ?></h2>
      </div>
    </section>
  </div>

  <!-- ======= THE STORY ========================== -->
  <section>
    <div class="container">
      <div class="fade-right">
        <h3 class="intro-title"><?php echo $intro_title; ?></h3>
      </div>

      <div class="fade-in">
        <div class="divider"></div>
      </div>

      <div class="fade-left intro-content">
        <p><?php echo $intro_body; ?></p>
      </div>
    </div>
  </section>



  <!-- ======= THE PUB BANNER ========================== -->
  <div class="fade-up">
    <section class="banner about-pub-banner">
      <div class="banner-container">
        <h3>Pig Pub</h3>
      </div>
    </section>
  </div>


  <!-- ======= THE PUB ========================== -->
  <section>

    <div class="container">

      <div class="fade-in">

        <p>Looking to sit down and enjoy the setting of a nice pub with some great food and drink? Searching for that
          place you and your friends can come enjoy some unique bar fun found no place else? You have found your place!
          The Green Pig offers an extensive food menu that can't be beat all the while bringing entertainment that gets
          the entire pub engaged making it an experience long to remember.</p>

      </div>

      <script>instafeed('greenpigpub');</script>

      <div class="row">

        <div class="fade-up-3">

          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
              <img id="greenpigpub0" src="" alt="something in the pub">
            </div>
          </div>

          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
              <img id="greenpigpub1" src="" alt="something in the pub">
            </div>
          </div>

          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
              <img id="greenpigpub2" src="" alt="something in the pub">
            </div>
          </div>

          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
              <img id="greenpigpub3" src="" alt="something in the pub">
            </div>
          </div>

          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
              <img id="greenpigpub4" src="" alt="something in the pub">
            </div>
          </div>

          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
              <img id="greenpigpub5" src="" alt="something in the pub">
            </div>
          </div>

        </div>

      </div>

    </div>

  </section>



  <!-- ======= THE PATIO BANNER ========================== -->

  <div class="fade-in">

    <section class="banner about-patio-banner">

      <!-- <img class="banner" src="./app/assets/img/patio.jpg" alt="">-->

      <div class="banner-container">

        <h3>Pig Patio</h3>

      </div>

    </section>

  </div>




  <!-- ======= THE PATIO ========================== -->

  <section>

    <div class="container">

      <div class="fade-in">

        <p>Wants some fresh air to go with that cocktail and nachos? The patio offers just that and more! With a sea of
          downtown's unique architecture can't be beat and to top it off the Rocky Mountains add a spectacular
          background you won't forget. There's a reason it's voted City weekly’s Best Patio.</p>

      </div>

      <script>instafeed('greenpigpatio');</script>

      <div class="row">

        <div class="fade-up-3">

          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
              <img id="greenpigpatio0" src="assets/img/patio_pub/patio_300w_1.jpg" alt="something in the pub">
            </div>
          </div>

          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
              <img id="greenpigpatio1" src="assets/img/patio_pub/patio_300w_2.jpg" alt="something in the pub">
            </div>
          </div>

          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
              <img id="greenpigpatio2" src="assets/img/patio_pub/patio_300w_1.jpg" alt="something in the pub">
            </div>
          </div>

          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
              <img id="greenpigpatio3" src="assets/img/patio_pub/patio_300w_2.jpg" alt="something in the pub">
            </div>
          </div>

          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
              <img id="greenpigpatio4" src="assets/img/patio_pub/patio_300w_1.jpg" alt="something in the pub">
            </div>
          </div>

          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
              <img id="greenpigpatio5" src="assets/img/patio_pub/patio_300w_2.jpg" alt="something in the pub">
            </div>
          </div>

        </div>

      </div>

    </div>

  </section>


<?php
get_footer();
