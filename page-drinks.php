<?php
/*
  Template Name: Drinks Page
 */

 // ADVANCED CUSTOM FIELDS
 // intro
 $hero_image   = get_field('drinks_hero');
 $hero_title   = get_field('drinks_hero_title');
 $intro_body   = get_field('drinks_intro_body');
 // content
 $content_body = get_field('drinks_content');
 // gallery
 $gallery_image_1 = get_field('drinks_gallery_1');
 $gallery_image_2 = get_field('drinks_gallery_2');
 $gallery_image_3 = get_field('drinks_gallery_3');
 $gallery_image_4 = get_field('drinks_gallery_4');
 $gallery_image_5 = get_field('drinks_gallery_5');
 $gallery_image_6 = get_field('drinks_gallery_6');

get_header(); ?>

  <!-- ======= HERO ========================== -->
  <div class="fade-down">
  <!-- if user uploaded image -->
  <?php 
    if(!empty($hero_image) ) { 
  ?>
    <section class="hero hero-drinks" style="background: url(<?php echo $hero_image['url']; ?>) center center no-repeat; background-size: cover;">
    <?php } else {?>
    <section class="hero hero-drinks">
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
        <div class="row">
          <div class="col col-sm-12">
            <?php echo $intro_body; ?>
          </div>
        </div>
      </div>

      <div class="fade-in">
        <div class="divider"></div>
      </div>

      <div class="fade-left intro-content" style="max-width: 960px; margin: 0 auto;">
        <p><?php echo $content_body; ?></p>
      </div>

      <script>instafeed('greenpigdrinks');</script>

      <div class="row">
        <div class="fade-up-3">
          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
            <!-- if user uploaded image -->
            <?php if(!empty($gallery_image_1) ) { ?>
              <img id="greenpigdrinks0" src="<?php echo $gallery_image_1['url'] ?>" alt="<?php echo $gallery_image_1['alt'] ?>">
            <?php } else {?>
              <img id="greenpigdrinks0" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/drinks/featured_cocktails_banner.jpg" alt="Tray of cocktails">
            <?php } ?>
            </div>
          </div>

          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
            <!-- if user uploaded image -->
            <?php if(!empty($gallery_image_2) ) { ?>
              <img id="greenpigdrinks2" src="<?php echo $gallery_image_2['url'] ?>" alt="<?php echo $gallery_image_2['alt'] ?>">
            <?php } else {?>
              <img id="greenpigdrinks2" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/beer_line_up_1.jpg" alt="Local beers">
            <?php } ?>
            </div>
          </div>

          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
            <!-- if user uploaded image -->
            <?php if(!empty($gallery_image_3) ) { ?>
              <img id="greenpigdrinks3" src="<?php echo $gallery_image_3['url'] ?>" alt="<?php echo $gallery_image_3['alt'] ?>">
            <?php } else {?>
              <img id="greenpigdrinks3" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/drinks/daily_specials_banner.jpg" alt="Tallboy beer">
            <?php } ?>
            </div>
          </div>

          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
            <!-- if user uploaded image -->
            <?php if(!empty($gallery_image_4) ) { ?>
              <img id="greenpigdrinks1" src="<?php echo $gallery_image_4['url'] ?>" alt="<?php echo $gallery_image_4['alt'] ?>">
            <?php } else {?>
              <img id="greenpigdrinks1" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/drinks/wine_red_banner.jpg" alt="Red wine">
            <?php } ?>
            </div>
          </div>

          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
            <!-- if user uploaded image -->
            <?php if(!empty($gallery_image_5) ) { ?>
              <img id="greenpigdrinks5" src="<?php echo $gallery_image_5['url'] ?>" alt="<?php echo $gallery_image_5['alt'] ?>">
            <?php } else {?>
              <img id="greenpigdrinks5" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/patio_bar_out.JPG" alt="Patio bar">
            <?php } ?>
            </div>
          </div>

          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
            <!-- if user uploaded image -->
            <?php if(!empty($gallery_image_6) ) { ?>
              <img id="greenpigdrinks4" src="<?php echo $gallery_image_6['url'] ?>" alt="<?php echo $gallery_image_6['alt'] ?>">
            <?php } else {?>
              <img id="greenpigdrinks4" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/drinks/wine_white_banner.jpg" alt="White wine">
            <?php } ?>
            </div>
          </div>
        </div>
      </div> <!-- row -->
    </div>
  </section>

<?php
get_footer();
