<?php
/*
  Template Name: About Page
 */

 // ADVANCED CUSTOM FIELDS
 // intro
 $hero_image   = get_field('about_hero');
 $hero_title   = get_field('about_hero_title');
 $intro_title  = get_field('about_intro_title');
 $intro_body   = get_field('about_intro_body');
 // pub
 $banner_pub_image = get_field('banner_pub_image');
 $banner_pub_title = get_field('banner_pub_title');
 $pub_body         = get_field('pub_body');
 // patio
 $banner_patio_image = get_field('banner_patio_image');
 $banner_patio_title = get_field('banner_patio_title');
 $patio_body         = get_field('patio_body');

get_header(); ?>

  <!-- ======= HERO ========================== -->
  <div class="fade-down">
    <!-- if user uploaded image -->
    <?php 
      if(!empty($hero_image) ) { 
    ?>
    <section class="hero hero-about" style="background: url(<?php echo $hero_image['url']; ?>) center center no-repeat; background-size: cover;">
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
    <!-- if user uploaded image -->
    <?php 
      if(!empty($banner_pub_image) ) { 
    ?>
    <section class="banner about-pub-banner" style="background: url(<?php echo $banner_pub_image['url']; ?>) center center no-repeat; background-size: cover;">
      <?php } else {?>
    <section class="banner about-pub-banner">
      <?php } ?>
      <div class="banner-container">
        <h3><?php echo $banner_pub_title; ?></h3>
      </div>
    </section>
  </div>


  <!-- ======= THE PUB ========================== -->
  <section>

    <div class="container">

      <div class="fade-in">

        <p><?php echo $pub_body; ?></p>

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
    <!-- if user uploaded image -->
    <?php 
      if(!empty($banner_patio_image) ) { 
    ?>

    <section class="banner about-patio-banner" style="background: url(<?php echo $banner_patio_image['url']; ?>) center center no-repeat; background-size: cover;">
      <?php } else {?>

<section class="banner about-patio-banner">
      <?php } ?>

      <div class="banner-container">

        <h3><?php echo $banner_patio_title; ?></h3>

      </div>

    </section>

  </div>




  <!-- ======= THE PATIO ========================== -->

  <section>

    <div class="container">

      <div class="fade-in">

        <p><?php echo $patio_body; ?></p>

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
