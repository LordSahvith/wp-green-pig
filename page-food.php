<?php
/*
  Template Name: Food Page
 */

// ADVANCED CUSTOM FIELDS
// intro
$hero_image   = get_field('food_hero');
$hero_title   = get_field('food_hero_title');
$intro_body   = get_field('food_intro_body');
// menus
$menu_title        = get_field('food_menu_title');
$classic_button    = get_field('classic_button');
$vegan_button      = get_field('vegan_button');
$late_night_button = get_field('late_night_button');
$breakfast_button  = get_field('breakfast_button');
// starters banners
$starters_button     = get_field('banner_starters_button');
$starters_title      = get_field('banner_starters_title');
$starters_body       = get_field('banner_starters_body');
$starters_banner     = get_field('banner_starters_image');
$specialties_button  = get_field('banner_specialties_button');
$specialties_title   = get_field('banner_specialties_title');
$specialties_body    = get_field('banner_specialties_body');
$specialties_banner  = get_field('banner_specialties_image');
$sandwiches_button   = get_field('banner_sandwiches_button');
$sandwiches_title    = get_field('banner_sandwiches_title');
$sandwiches_body     = get_field('banner_sandwiches_body');
$sandwiches_banner   = get_field('banner_sandwiches_image');
$burgers_button      = get_field('banner_burgers_button');
$burgers_title       = get_field('banner_burgers_title');
$burgers_body        = get_field('banner_burgers_body');
$burgers_banner      = get_field('banner_burgers_image');
$bowls_button        = get_field('banner_bowls_button');
$bowls_title         = get_field('banner_bowls_title');
$bowls_body          = get_field('banner_bowls_body');
$bowls_banner        = get_field('banner_bowls_image');
$bowls_soups_title   = get_field('bowls_title_copy');
$bowls_soups_body    = get_field('bowls_title_body');
$cup_name            = get_field('cup_name');
$cup_price           = get_field('cup_price');
$bowl_name           = get_field('bowl_name');
$bowl_price          = get_field('bowl_price');
$daily_button        = get_field('banner_daily_button');
$daily_title         = get_field('banner_daily_title');
$daily_body          = get_field('banner_daily_body');
$daily_banner        = get_field('banner_daily_image');
$lunch_body          = get_field('lunch_body');
$lunch_name          = get_field('lunch_name');
$lunch_price         = get_field('lunch_price');
$all_day_copy        = get_field('all_day_copy');
$all_day_price_1     = get_field('all_day_price_1');
$all_day_price_2     = get_field('all_day_price_2');
// vegan banners
$vegan_title      = get_field('banner_vegan_title');
$vegan_banner     = get_field('banner_vegan_image');
$vegan_body       = get_field('banner_vegan_body');
// late night banners
$late_night_title      = get_field('banner_late_night_title');
$late_night_banner     = get_field('banner_late_night_image');
$late_night_body     = get_field('banner_late_night_body');
// breakfast banners
$breakfast_title      = get_field('banner_breakfast_title');
$breakfast_banner     = get_field('banner_breakfast_image');
$breakfast_body       = get_field('banner_breakfast_body');
// breakfast banners
$brunch_title      = get_field('banner_brunch_title');
$brunch_banner     = get_field('banner_brunch_image');
$brunch_intro_body       = get_field('banner_brunch_intro_body');
$brunch_main_body       = get_field('banner_brunch_main_body');

get_header(); ?>

<!-- ======= HERO ========================== -->
<div class="fade-down">

  <!-- if user uploaded image -->
  <?php
  if (!empty($hero_image)) {
    ?>
    <section class="hero hero-food" style="background: url(<?php echo $hero_image['url']; ?>) center center no-repeat; background-size: cover;">
    <?php } else { ?>
      <section class="hero hero-food">
      <?php } ?>
      <div class="hero-container">
        <h2><?php echo $hero_title; ?></h2>
      </div>
    </section>
</div>


<!-- =========== PAGE WELCOME ====================== -->
<section class="welcome food-welcome">
  <div class="container">
    <div class="fade-left">
      <p><?php echo $intro_body; ?></p>
    </div>

    <div class="fade-right">
      <h4 class="header-gap-top"><?php echo $menu_title; ?></h4>
    </div>
  </div>
</section>



<!-- =========== SUB MENU ====================== -->

<nav class="sub-menu">
  <div id="mobile-menu" class="overlay">
    <div class="overlay-content">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <div class="container">
        <li><button id="menu-classic-btn" class="sub-menu-btn sub-menu-food-btn" onclick="closeNav()"><?php echo $classic_button; ?></button>
        </li>
        <li><button id="menu-vegan-btn" class="sub-menu-btn sub-menu-food-btn" onclick="closeNav()"><?php echo $vegan_button; ?></button>
        </li>
        <li><button id="menu-late-night-btn" class="sub-menu-btn sub-menu-food-btn" onclick="closeNav()"><?php echo $late_night_button; ?></button></li>
        <li><button id="menu-breakfast-btn" class="sub-menu-btn sub-menu-food-btn" onclick="closeNav()"><?php echo $breakfast_button; ?></button></li>
      </div>
    </div>
  </div> <!-- mobile-nav -->

  <div class="mobile-icon menu-icon" onclick="toggleMenu()">
    <div class="fade-up">
      <i class="fas fa-utensils"></i>
    </div>
  </div>

  <ul class="main-nav main-menu">
    <div class="fade-up">
      <li><button id="menu-classic-btn" class="sub-menu-btn sub-menu-food-btn"><?php echo $classic_button; ?></button>
      </li>
      <li><button id="menu-vegan-btn" class="sub-menu-btn sub-menu-food-btn"><?php echo $vegan_button; ?></button></li>
      <li><button id="menu-late-night-btn" class="sub-menu-btn sub-menu-food-btn"><?php echo $late_night_button; ?></button></li>
      <li><button id="menu-breakfast-btn" class="sub-menu-btn sub-menu-food-btn"><?php echo $breakfast_button; ?></button></li>
    </div>
  </ul>
</nav>



<!-- =========== SCROLLING MENU ====================== -->

<nav id="scrolling-food-menu" class="scrolling-menu hide slide">
  <div class="scroll-hide">
    <i class="fas fa-angle-double-left scroll-hide-btn scroll-hide-food-btn"></i>
  </div>

  <ul>
    <li><button id="starters-btn" class="scrolling-btn"><?php echo $starters_button; ?></button></li>
    <li><button id="specialties-btn" class="scrolling-btn"><?php echo $specialties_button; ?></button></li>
    <li><button id="sandwiches-btn" class="scrolling-btn"><?php echo $sandwiches_button; ?></button></li>
    <li><button id="burgers-btn" class="scrolling-btn"><?php echo $burgers_button; ?></button></li>
    <li><button id="greens-btn" class="scrolling-btn"><?php echo $bowls_button; ?></button></li>
    <li><button id="specials-btn" class="scrolling-btn"><?php echo $daily_button; ?></button></li>
  </ul>
</nav>



<!-- =========== CLASSIC MENU ====================== -->

<div id="menu-classic">

  <!-- =========== STARTERS BANNER ====================== -->
  <div class="fade-up">
    <!-- if user uploaded image -->
    <?php
    if (!empty($starters_banner)) {
      ?>
      <section id="starters" class="banner food-starters-banner sub-menu-banner-gap" style="background: url(<?php echo $starters_banner['url']; ?>) center center no-repeat; background-size: cover;">
      <? } else { ?>
        <section id="starters" class="banner food-starters-banner sub-menu-banner-gap">
        <?php } ?>
        <div class="banner-container">
          <h3><?php echo $starters_title; ?></h3>
        </div>
      </section>
  </div>


  <!-- =========== STARTERS SECT ====================== -->
  <section class="food-starters-section">
    <div class="container">

      <div class="fade-up">

        <!-- if user uploaded body copy -->
        <?php
        if (!empty($starters_body)) {
          ?>

          <p class="additions"><?php echo $starters_body; ?></p>

        <?php } ?>

      </div>

      <div class="fade-up-2 food-menu">

        <!-- start of loop for food item -->

        <?php $loop = new WP_Query(array('post_type' => 'starters_food_item', 'oderby' => 'post_id', 'order' => 'ASC')); ?>

        <?php while ($loop->have_posts()) : $loop->the_post(); ?>

          <div class="food-menu-item">
            <div class="food-description">
              <?php
              if (!empty(get_field('pig_favorite'))) {
                ?>
                <h4 class="pig-favorite"><?php the_title(); ?></h4>
              <?php } else { ?>
                <h4><?php the_title(); ?></h4>
              <?php } ?>
              <p><?php the_content(); ?></p>
            </div>
            <div class="price">
              <p><em><strong><?php echo get_field('food_menu_item_price'); ?></strong></em></p>
            </div>
          </div>

        <?php endwhile; ?>

      </div> <!-- food-menu -->

    </div> <!-- container -->

  </section> <!-- starters -->


  <!-- =========== SPECIALTIES BANNER ====================== -->

  <div class="fade-up">
    <!-- if user uploaded image -->
    <?php
    if (!empty($specialties_banner)) {
      ?>
      <section id="specialties" class="banner food-specialties-banner" style="background: url(<?php echo $specialties_banner['url']; ?>) center center no-repeat; background-size: cover;">
      <? } else { ?>
        <section id="specialties" class="banner food-specialties-banner">
        <?php } ?>

        <div class="banner-container">

          <h3><?php echo $specialties_title; ?></h3>

        </div>

      </section>

  </div>


  <!-- =========== SPECIALTIES SECT ====================== -->

  <section class="food-specialties-section">

    <div class="container">

      <div class="fade-up">

        <!-- if user uploaded body copy -->
        <?php
        if (!empty($specialties_body)) {
          ?>

          <p class="additions"><?php echo $specialties_body; ?></p>

        <?php } ?>

      </div>

      <div class="fade-up-2 food-menu">

        <!-- start of loop for food item -->

        <?php $loop = new WP_Query(array('post_type' => 'specialtys_food_item', 'oderby' => 'post_id', 'order' => 'ASC')); ?>

        <?php while ($loop->have_posts()) : $loop->the_post(); ?>

          <div class="food-menu-item">
            <div class="food-description">
              <?php
              if (!empty(get_field('pig_favorite'))) {
                ?>
                <h4 class="pig-favorite"><?php the_title(); ?></h4>
              <?php } else { ?>
                <h4><?php the_title(); ?></h4>
              <?php } ?>
              <p><?php the_content(); ?></p>
            </div>
            <div class="price">
              <p><em><strong><?php echo get_field('food_menu_item_price'); ?></strong></em></p>
            </div>
          </div>

        <?php endwhile; ?>

      </div> <!-- food-menu -->

    </div> <!-- container -->

  </section> <!-- specialties -->


  <!-- =========== SANDWICHES BANNER ====================== -->

  <div class="fade-up">
    <!-- if user uploaded image -->
    <?php
    if (!empty($sandwiches_banner)) {
      ?>
      <section id="sandwiches" class="banner food-sandwiches-banner" style="background: url(<?php echo $sandwiches_banner['url']; ?>) center center no-repeat; background-size: cover;">
      <? } else { ?>
        <section id="sandwiches" class="banner food-sandwiches-banner">
        <?php } ?>

        <div class="banner-container">

          <h3><?php echo $sandwiches_title; ?></h3>

        </div>

      </section>

  </div>



  <!-- =========== SANDWICHES SECT ====================== -->

  <section class="food-sandwiches-section">

    <div class="container">

      <div class="fade-up">

        <!-- if user uploaded body copy -->
        <?php
        if (!empty($sandwiches_body)) {
          ?>

          <p class="additions"><?php echo $sandwiches_body; ?></p>

        <?php } ?>

      </div>

      <div class="fade-up-2 food-menu">

        <!-- start of loop for food item -->

        <?php $loop = new WP_Query(array('post_type' => 'sandwiches_food_item', 'oderby' => 'post_id', 'order' => 'ASC')); ?>

        <?php while ($loop->have_posts()) : $loop->the_post(); ?>

          <div class="food-menu-item">
            <div class="food-description">
              <?php
              if (!empty(get_field('pig_favorite'))) {
                ?>
                <h4 class="pig-favorite"><?php the_title(); ?></h4>
              <?php } else { ?>
                <h4><?php the_title(); ?></h4>
              <?php } ?>
              <p><?php the_content(); ?></p>
            </div>
            <div class="price">
              <p><em><strong><?php echo get_field('food_menu_item_price'); ?></strong></em></p>
            </div>
          </div>

        <?php endwhile; ?>

      </div> <!-- food-menu -->

    </div> <!-- container -->

  </section> <!-- sandwiches -->


  <!-- =========== BURGERS BANNER ====================== -->

  <div class="fade-up">
    <!-- if user uploaded image -->
    <?php
    if (!empty($burgers_banner)) {
      ?>
      <section id="burgers" class="banner food-burgers-banner" style="background: url(<?php echo $burgers_banner['url']; ?>) center center no-repeat; background-size: cover;">
      <? } else { ?>
        <section id="burgers" class="banner food-burgers-banner">
        <?php } ?>


        <div class="banner-container">

          <h3><?php echo $burgers_title; ?></h3>

        </div>

      </section>

  </div>


  <!-- =========== BURGERS SECT ====================== -->

  <section class="food-burgers-section">

    <div class="container">

      <div class="fade-up">

        <!-- if user uploaded body copy -->
        <?php
        if (!empty($burgers_body)) {
          ?>

          <p class="additions"><?php echo $burgers_body; ?></p>

        <?php } ?>

      </div>

      <div class="fade-up-2 food-menu">

        <!-- start of loop for food item -->

        <?php $loop = new WP_Query(array('post_type' => 'burgers_food_item', 'oderby' => 'post_id', 'order' => 'ASC')); ?>

        <?php while ($loop->have_posts()) : $loop->the_post(); ?>

          <div class="food-menu-item">
            <div class="food-description">
              <?php
              if (!empty(get_field('pig_favorite'))) {
                ?>
                <h4 class="pig-favorite"><?php the_title(); ?></h4>
              <?php } else { ?>
                <h4><?php the_title(); ?></h4>
              <?php } ?>
              <p><?php the_content(); ?></p>
            </div>
            <div class="price">
              <p><em><strong><?php echo get_field('food_menu_item_price'); ?></strong></em></p>
            </div>
          </div>

        <?php endwhile; ?>

      </div> <!-- food-menu -->

    </div> <!-- container -->

  </section> <!-- burgers -->


  <!-- =========== GREENS BANNER ====================== -->

  <div class="fade-up">
    <!-- if user uploaded image -->
    <?php
    if (!empty($bowls_banner)) {
      ?>
      <section id="greens" class="banner food-greens-banner" style="background: url(<?php echo $bowls_banner['url']; ?>) center center no-repeat; background-size: cover;">
      <? } else { ?>
        <section id="greens" class="banner food-greens-banner">
        <?php } ?>

        <div class="banner-container">

          <h3><?php echo $bowls_title; ?></h3>

        </div>

      </section>

  </div>


  <!-- =========== GREENS SECT ====================== -->

  <section class="food-greens-section">

    <div class="container">

      <div class="fade-up">

        <!-- if user uploaded body copy -->
        <?php
        if (!empty($bowls_body)) {
          ?>

          <p class="additions"><?php echo $bowls_body; ?></p>

        <?php } ?>

      </div>

      <div class="fade-up-2 food-menu">

        <!-- start of loop for food item -->

        <?php $loop = new WP_Query(array('post_type' => 'bowls_food_item', 'oderby' => 'post_id', 'order' => 'ASC')); ?>

        <?php while ($loop->have_posts()) : $loop->the_post(); ?>

          <div class="food-menu-item">
            <div class="food-description">
              <?php
              if (!empty(get_field('pig_favorite'))) {
                ?>
                <h4 class="pig-favorite"><?php the_title(); ?></h4>
              <?php } else { ?>
                <h4><?php the_title(); ?></h4>
              <?php } ?>
              <p><?php the_content(); ?></p>
            </div>
            <div class="price">
              <p><em><strong><?php echo get_field('food_menu_item_price'); ?></strong></em></p>
            </div>
          </div>

        <?php endwhile; ?>

      </div> <!-- food-menu -->

      <div class="row menu-item">

        <div class="fade-up-2">

          <div class="col col-md-5 last-item">

            <h4><?php echo $bowls_soups_title; ?></h4>
            <p><?php echo $bowls_soups_body; ?></p>

            <div class="row">

              <div class="col col-md-6">

                <p><em><strong><?php echo $cup_name; ?></strong></em></p>

              </div>

              <div class="col col-md-6">

                <p><em><strong><?php echo $cup_price; ?></strong></em></p>

              </div>

              <div class="col col-md-6">

                <p><em><strong><?php echo $bowl_name; ?></strong></em></p>

              </div>

              <div class="col col-md-6">

                <p><em><strong><?php echo $bowl_price; ?></strong></em></p>

              </div>

            </div>

          </div>

        </div>

      </div> <!-- row -->

    </div> <!-- container -->

  </section> <!-- bowls n greens -->


  <!-- =========== DAILY SPECIALS BANNER ====================== -->

  <div class="fade-up">
    <!-- if user uploaded image -->
    <?php
    if (!empty($daily_banner)) {
      ?>
      <section id="specials" class="banner food-greens-banner" style="background: url(<?php echo $daily_banner['url']; ?>) center center no-repeat; background-size: cover;">
      <? } else { ?>
        <section id="specials" class="banner food-greens-banner">
        <?php } ?>

        <div class="banner-container">

          <h3><?php echo $daily_title; ?></h3>

        </div>

      </section>

  </div>

  <!-- =========== DAILY SPECIALS SECT ====================== -->

  <section class="daily-specials-section" style="margin-bottom: 60px;">
    <div class="container">

      <div class="fade-up">

        <!-- if user uploaded body copy -->
        <?php
        if (!empty($daily_body)) {
          ?>

          <p class="additions"><?php echo $daily_body; ?></p>

        <?php } ?>

      </div>
    </div>

    <div class="fade-in">
      <div class="divider" style="margin-top: 0px;"></div>
    </div>
    <div class="row">
      <div class="fade-up-2">
        <div class="col col-md-5 last-item">
          <p><?php echo $lunch_body; ?></p>

          <div class="row">
            <div class="col col-md-6">
              <p><em><strong><?php echo $lunch_name; ?></strong></em></p>
            </div>

            <div class="col col-md-6" style="text-align: right;">
              <p><em><strong><?php echo $lunch_price; ?></strong></em></p>
            </div>
          </div> <!-- row -->

          <p><?php echo $all_day_copy; ?></p>

          <div class="row">
            <div class="col col-md-6">
              <p><em><strong><?php echo $all_day_price_1; ?></strong></em></p>
            </div>

            <div class="col col-md-6" style="text-align: right;">
              <p><em><strong><?php echo $all_day_price_2; ?></strong></em></p>
            </div>
          </div> <!-- row -->
        </div> <!-- col -->
      </div> <!-- fade -->
    </div> <!-- row -->
</div> <!-- container -->
</section>

</div> <!-- menu-classic -->



<!-- =========== VEGAN MENU ====================== -->
<div id="menu-vegan">

  <!-- =========== VEGAN BANNER ====================== -->
  <!-- if user uploaded image -->
  <?php
  if (!empty($vegan_banner)) {
    ?>
    <section class="banner food-vegan-banner sub-menu-banner-gap" style="background: url(<?php echo $vegan_banner['url']; ?>) center center no-repeat; background-size: cover;">
    <? } else { ?>
      <section class="banner food-vegan-banner sub-menu-banner-gap">
      <?php } ?>
      <div class="banner-container">
        <h3><?php echo $vegan_title; ?></h3>
      </div>
    </section>

    <!-- =========== VEGAN SECT ====================== -->
    <section class="food-vegan-section">
      <div class="container">

        <div class="fade-up">

          <!-- if user uploaded body copy -->
          <?php
          if (!empty($vegan_body)) {
            ?>

            <p class="additions"><?php echo $vegan_body; ?></p>

          <?php } ?>

        </div>

        <div class="fade-up-2 food-menu">

          <!-- start of loop for food item -->

          <?php $loop = new WP_Query(array('post_type' => 'vegan_food_item', 'oderby' => 'post_id', 'order' => 'ASC')); ?>

          <?php while ($loop->have_posts()) : $loop->the_post(); ?>

            <div class="food-menu-item">
              <div class="food-description">
                <?php
                if (!empty(get_field('pig_favorite'))) {
                  ?>
                  <h4 class="pig-favorite"><?php the_title(); ?></h4>
                <?php } else { ?>
                  <h4><?php the_title(); ?></h4>
                <?php } ?>
                <p><?php the_content(); ?></p>
              </div>
              <div class="price">
                <p><em><strong><?php echo get_field('food_menu_item_price'); ?></strong></em></p>
              </div>
            </div>

          <?php endwhile; ?>

        </div> <!-- food-menu -->

      </div> <!-- container -->

    </section> <!-- vegan -->

</div> <!-- menu-vegan -->



<!-- =========== LATE NIGHT MENU ====================== -->

<div id="menu-late-night">


  <!-- =========== LATE NIGHT BANNER ====================== -->
  <!-- if user uploaded image -->
  <?php
  if (!empty($late_night_banner)) {
    ?>
    <section class="banner food-late-banner sub-menu-banner-gap" style="background: url(<?php echo $late_night_banner['url']; ?>) center center no-repeat; background-size: cover;">
    <? } else { ?>
      <section class="banner food-late-banner sub-menu-banner-gap">
      <?php } ?>

      <div class="banner-container">

        <h3><?php echo $late_night_title; ?></h3>

      </div>

    </section>


    <!-- =========== LATE NIGHT SECT ====================== -->

    <section class="food-late-section">

      <div class="container">

        <div class="fade-up">

          <!-- if user uploaded body copy -->
          <?php
          if (!empty($late_night_body)) {
            ?>

            <p class="additions"><?php echo $late_night_body; ?></p>

          <?php } ?>

        </div>

        <div class="fade-up-2 food-menu">

          <!-- start of loop for food item -->

          <?php $loop = new WP_Query(array('post_type' => 'late_food_item', 'oderby' => 'post_id', 'order' => 'ASC')); ?>

          <?php while ($loop->have_posts()) : $loop->the_post(); ?>

            <div class="food-menu-item">
              <div class="food-description">
                <?php
                if (!empty(get_field('pig_favorite'))) {
                  ?>
                  <h4 class="pig-favorite"><?php the_title(); ?></h4>
                <?php } else { ?>
                  <h4><?php the_title(); ?></h4>
                <?php } ?>
                <p><?php the_content(); ?></p>
              </div>
              <div class="price">
                <p><em><strong><?php echo get_field('food_menu_item_price'); ?></strong></em></p>
              </div>
            </div>

          <?php endwhile; ?>

        </div> <!-- food-menu -->

      </div> <!-- container -->

    </section> <!-- late night -->

</div> <!-- menu-late -->



<!-- =========== BREAKFAST MENU ====================== -->
<div id="menu-breakfast">

  <!-- =========== BREAKFAST BANNER ====================== -->
  <!-- if user uploaded image -->
  <?php
  if (!empty($breakfast_banner)) {
    ?>
    <section class="banner food-breakfast-banner sub-menu-banner-gap" style="background: url(<?php echo $breakfast_banner['url']; ?>) center center no-repeat; background-size: cover;">
    <? } else { ?>
      <section class="banner food-breakfast-banner sub-menu-banner-gap">
      <?php } ?>
      <div class="banner-container">
        <h3><?php echo $breakfast_title; ?></h3>
      </div>
    </section>

    <!-- =========== BREAKFAST SECT ====================== -->
    <section class="food-breakfast-section">
      <div class="container">

        <div class="fade-up">

          <!-- if user uploaded body copy -->
          <?php
          if (!empty($breakfast_body)) {
            ?>

            <p class="additions"><?php echo $breakfast_body; ?></p>

          <?php } ?>

        </div>

        <div class="fade-up-2 food-menu">

          <!-- start of loop for food item -->

          <?php $loop = new WP_Query(array('post_type' => 'breakfast_food_item', 'oderby' => 'post_id', 'order' => 'ASC')); ?>

          <?php while ($loop->have_posts()) : $loop->the_post(); ?>

            <div class="food-menu-item">
              <div class="food-description">
                <?php
                if (!empty(get_field('pig_favorite'))) {
                  ?>
                  <h4 class="pig-favorite"><?php the_title(); ?></h4>
                <?php } else { ?>
                  <h4><?php the_title(); ?></h4>
                <?php } ?>
                <p><?php the_content(); ?></p>
              </div>
              <div class="price">
                <p><em><strong><?php echo get_field('food_menu_item_price'); ?></strong></em></p>
              </div>
            </div>

          <?php endwhile; ?>

        </div> <!-- food-menu -->

      </div> <!-- container -->

    </section> <!-- breakfast -->

    <!-- =========== SUNDAY - BREAKFAST BUFFET BANNER ====================== -->
    <!-- if user uploaded image -->
    <?php
    if (!empty($brunch_banner)) {
      ?>
      <section class="banner food-breakfast-banner sub-menu-banner-gap" style="background: url(<?php echo $brunch_banner['url']; ?>) center center no-repeat; background-size: cover;">
      <? } else { ?>
        <section class="banner events-sun-banner sub-menu-banner-gap">
        <?php } ?>
        <div class="banner-container">
          <h3><?php echo $brunch_title; ?></h3>
        </div>
      </section>

      <!-- =========== BREAKFAST SECT ====================== -->
      <section class="food-breakfast-section">
        <div class="container">

          <!-- if user uploaded body copy -->
          <?php
          if (!empty($brunch_intro_body)) {
            ?>

            <p class="additions"><?php echo $brunch_intro_body; ?></p>

          <?php } ?>


          <div class="fade-in">
            <div class="divider"></div>
          </div>

          <div class="fade-in">

            <!-- if user uploaded body copy -->
            <?php
            if (!empty($brunch_main_body)) {
              ?>

              <p><?php echo $brunch_main_body; ?></p>

            <?php } ?>
          </div>
        </div> <!-- container -->
      </section> <!-- breakfast -->
</div> <!-- menu-breakfast -->

<?php
get_footer();
