<?php
/*
  Template Name: Home Page
 */

 // ADVANCED CUSTOM FIELDS
 // intro
 $hero_image   = get_field('home_hero');
 $intro_title  = get_field('intro_title');
 $intro_body   = get_field('intro_body');
 $intro_button = get_field('intro_button');
 // menus
 $banner_menu_image = get_field('banner_menu_image');
 $banner_menu_title = get_field('banner_menu_title');
 $menu_title        = get_field('menu_title');
 $menu_food_image   = get_field('menu_food_image');
 $menu_food_copy    = get_field('menu_food_copy');
 $menu_drink_image  = get_field('menu_drink_image');
 $menu_drink_copy   = get_field('menu_drink_copy');

get_header(); ?>

<!-- ======= WELCOME ========================== -->
<!-- if user uploaded image -->
<?php 
  if(!empty($hero_image) ) { 
?>

<div class="fade-down">

  <section class="welcome-hero"
    style="background: #333 url(<?php echo $hero_image['url']; ?>) center center no-repeat;">

  </section>

</div>

<?php } else {?>

<div class="fade-down">

  <section class="welcome-hero">

  </section>

</div>

<?php } ?>


<!-- ======= THE PIG STORY ========================== -->

<section class="home-pig-story">

  <div class="container">

    <div class="pig-story">

      <div class="fade-in">

        <h2><?php echo $intro_title; ?></h2>

      </div> <!-- fade-in -->

      <div class="fade-up">

        <div class="divider"></div>

      </div> <!-- fade-up -->


      <div class="fade-left">

        <p><?php echo $intro_body; ?></p>

      </div> <!-- fade-left -->

    </div> <!-- pig-story -->

    <div class="fade-up">

      <div>

        <a href="about.html" id="more-story" class="fade-up button"><?php echo $intro_button; ?></a>

      </div>

    </div> <!-- fade-up -->

  </div> <!-- container -->

</section> <!-- pig-story -->



<!-- ======= MENU BANNER ========================== -->

<div class="fade-up">
  <!-- if user uploads image -->
<?php 
  if(!empty($banner_menu_image) ) { 
?>
  <section class="banner banner-shrink home-menu-banner" style="background: #333 url(<?php echo $banner_menu_image['url']; ?>) center center no-repeat;">
    <?php } else {?>
    <?php } 
  <section class="banner banner-shrink home-menu-banner">
  ?>

    <div class="banner-container">

      <a href="menus.html">
        <h3>Menus</h3>
      </a>

    </div>

  </section>

</div>


<!-- ======= MENU SECTION ========================== -->

<section class="home-menu-options">

  <div class="container">

    <div class="fade-right">

      <h3>Hungry...Parched?</h3>

    </div>

    <div class="fade-up">

      <div class="divider"></div>

    </div>


    <div class="row fade-up-2">

      <div class="col col-sm-6">

        <div class="menu-opt food">

          <a href="food.html">
            <h4>Food</h4>
          </a>

        </div>

      </div>


      <div class="col col-sm-6">

        <div class="menu-opt drinks">

          <a href="drinks.html">
            <h4>Drinks</h4>
          </a>

        </div>


      </div>

    </div>

  </div>

</section>


<!-- ======= EVENTS BANNER ========================== -->

<div class="fade-up">

  <section class="banner banner-shrink home-events-banner">

    <div class="banner-container">

      <a href="events.html">
        <h3>Events</h3>
      </a>

    </div>

  </section>

</div>


<!-- ======= EVENTS SECTION ========================== -->

<section class="home-events-section">

  <div class="container">

    <div class="fade-right">

      <h3>Come Play!</h3>

    </div>

    <div class="fade-left">

      <p>Come sit down and enjoy the game with some wings or any other fine food. Jam out with us every Monday with
        our Open Blues Jam @ 10. Test your wit Wednesdays with Trivia Factory's General Trivia or Sunday for Adult
        Trivia both start @ 7 hurry and claim your spot. Every Saturday @ 10 we got DJ Latu blasting away, so come
        dance your heart out!</p>

    </div>

    <div class="fade-up">

      <div class="divider"></div>

    </div>

    <div class="row home-gallery">

      <div class="fade-up-3">

        <div class="col col-sm-6 col-lg-4">

          <div class="gallery-item gallery-item-sm">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/blues_draggers_300w.jpg"
              alt="West Temple Tail Draggers. Drummer close up.">
            <p class="img-description">Monday - Open Blues Jam</p>
          </div>

        </div>

        <div class="col col-sm-6 col-lg-4">

          <div class="gallery-item gallery-item-sm">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/paint_nite-1_300w.jpg"
              alt="Paint Nite group.">
            <p class="img-description">Tuesday - $2 Tuesday</p>
          </div>

        </div>

        <div class="col col-sm-6 col-lg-4">

          <div class="gallery-item gallery-item-sm">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/trivia_group_300w.jpg"
              alt="Every trivia team.">
            <p class="img-description">Wednesday - General Trivia</p>
          </div>

        </div>

        <div class="col col-sm-6 col-lg-4">

          <div class="gallery-item gallery-item-sm">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/karaoke_group_sing_300w.jpg"
              alt="West Temple Tail Draggers. Vocalist close up.">
            <p class="img-description">Thursday - Karaoke</p>
          </div>

        </div>

        <div class="col col-sm-6 col-lg-4">

          <div class="gallery-item gallery-item-sm">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/live_music-2_300w.jpg" alt="Royal Bliss.">
            <p class="img-description">Friday - Live Music</p>
          </div>

        </div>

        <div class="col col-sm-6 col-lg-4">

          <div class="gallery-item gallery-item-sm">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/dj-latu_300w.jpg"
              alt="DJ Latu at the green pig.">
            <p class="img-description">Saturday - DJ Latu</p>
          </div>

        </div>

      </div>

    </div> <!-- row -->

    <div class="fade-up">

      <p class="bottom-gap">Feel free to contact us with any questions.</p>

      <div>

        <a href="contact.html" id="contact-us" class="button">Contact Us</a>

      </div>


    </div>


  </div> <!-- container -->

</section>

<?php get_footer(); ?>