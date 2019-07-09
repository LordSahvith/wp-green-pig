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
 // events
 $banner_events_image = get_field('banner_events_image');
 $banner_events_title = get_field('banner_events_title');
 $events_title        = get_field('events_title');
 $events_body         = get_field('events_body');
 // outro
 $outro_body   = get_field('outro_body');
 $outro_button = get_field('outro_button');

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
  <section class="banner banner-shrink home-menu-banner"
    style="background: #333 url(<?php echo $banner_menu_image['url']; ?>) center center no-repeat;">
    <?php } else {?>
    <section class="banner banner-shrink home-menu-banner">
      <?php }  ?>

      <div class="banner-container">

        <a href="menus.html">
          <h3><?php echo $banner_menu_title; ?></h3>
        </a>

      </div>

    </section>

</div>


<!-- ======= MENU SECTION ========================== -->

<section class="home-menu-options">

  <div class="container">

    <div class="fade-right">

      <h3><?php echo $menu_title; ?></h3>

    </div>

    <div class="fade-up">

      <div class="divider"></div>

    </div>


    <div class="row fade-up-2">

      <div class="col col-sm-6">
        <!-- if user uploads image -->
        <?php 
          if(!empty($menu_food_image) ) { 
        ?>

        <div class="menu-opt food"
          style="background: #333 url(<?php echo $menu_food_image['url']; ?>) center center no-repeat;">
          <?php } else {?>

          <div class="menu-opt food">
            <?php }  ?>

            <a href="food.html">
              <h4><?php echo $menu_food_copy; ?></h4>
            </a>

          </div>

        </div>


        <div class="col col-sm-6">
          <!-- if user uploads image -->
          <?php 
            if(!empty($menu_drink_image) ) { 
          ?>

          <div class="menu-opt drinks"
            style="background: #333 url(<?php echo $menu_drink_image['url']; ?>) center center no-repeat;">
            <?php } else {?>

            <div class="menu-opt drinks">
              <?php }  ?>

              <a href="drinks.html">
                <h4><?php echo $menu_drink_copy; ?></h4>
              </a>

            </div>


          </div>

        </div>

      </div>

</section>


<!-- ======= EVENTS BANNER ========================== -->

<div class="fade-up">
  <!-- if user uploads image -->
  <?php 
  if(!empty($banner_events_image) ) { 
?>
  <section class="banner banner-shrink home-events-banner"
    style="background: #333 url(<?php echo $banner_events_image['url']; ?>) center center no-repeat;">
    <?php } else {?>
    <section class="banner banner-shrink home-events-banner">
      <?php }  ?>

      <div class="banner-container">

        <a href="events.html">
          <h3><?php echo $banner_events_title; ?></h3>
        </a>

      </div>

    </section>

</div>


<!-- ======= EVENTS SECTION ========================== -->

<section class="home-events-section">

  <div class="container">

    <div class="fade-right">

      <h3><?php echo $events_title; ?></h3>

    </div>

    <div class="fade-left">

      <p><?php echo $events_body; ?></p>

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

      <p class="bottom-gap"><?php echo $outro_body; ?></p>

      <div>

        <a href="contact.html" id="contact-us" class="button"><?php echo $outro_button; ?></a>

      </div>


    </div>


  </div> <!-- container -->

</section>

<?php get_footer(); ?>