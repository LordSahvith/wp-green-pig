<?php
/*
  Template Name: Menus Page
 */

// ADVANCED CUSTOM FIELDS
// intro
$hero_image   = get_field('menus_hero');
$hero_title  = get_field('menus_hero_title');
$intro_title  = get_field('menus_intro_title');
$intro_body   = get_field('menus_intro_body');
// menus
$food_title = get_field('menus_food_title');
$food_image = get_field('menus_food_image');
$drinks_title = get_field('menus_drinks_title');
$drinks_image = get_field('menus_drinks_image');
// gallery copy
$gallery_title  = get_field('menus_gallery_title');
$gallery_body   = get_field('menus_gallery_body');
// gallery images
$menus_instagram = get_field('menus_instagram');
$gallery_image_1 = get_field('menus_gallery_1');
$gallery_image_2 = get_field('menus_gallery_2');
$gallery_image_3 = get_field('menus_gallery_3');
$gallery_image_4 = get_field('menus_gallery_4');
$gallery_image_5 = get_field('menus_gallery_5');
$gallery_image_6 = get_field('menus_gallery_6');
// gallery content
$gallery_content_1 = get_field('menus_gallery_1_content');
$gallery_content_2 = get_field('menus_gallery_2_content');
$gallery_content_3 = get_field('menus_gallery_3_content');
$gallery_content_4 = get_field('menus_gallery_4_content');
$gallery_content_5 = get_field('menus_gallery_5_content');
$gallery_content_6 = get_field('menus_gallery_6_content');

get_header(); ?>

<!-- ======= HERO ========================== -->

<div class="fade-down">

  <!-- if user uploaded image -->
  <?php
  if (!empty($hero_image)) {
    ?>
    <section class="hero hero-menu" style="background: url(<?php echo $hero_image['url']; ?>) center center no-repeat; background-size: cover;">

    <?php } else { ?>

      <section class="hero hero-menu">

      <?php } ?>

      <div class="hero-container">

        <h2><?php echo $hero_title; ?></h2>

      </div>

      </section>

</div>



<!-- ======= THE PIG WAY ========================== -->

<section class="menu-welcome-section">

  <div class="container">

    <div class="fade-right">

      <h3><?php echo $intro_title; ?></h3>
    </div>
    <div class="fade-left">

      <p><?php echo $intro_body; ?></p>


    </div>

    <div class="fade-right">

      <div class="divider"></div>

    </div>


    <div class="row">

      <div class="fade-up-2">

        <div class="col col-sm-6">

          <!-- if user uploaded image -->
          <?php
          if (!empty($food_image)) {
            ?>

            <div class="menu-opt food" style="background: url(<?php echo $food_image['url']; ?>) center center no-repeat; background-size: cover;">

            <?php } else { ?>

              <div class="menu-opt food">

              <?php } ?>

              <a href="food">
                <h4><?php echo $food_title; ?></h4>
              </a>

              </div>

            </div>

            <div class="col col-sm-6">

              <!-- if user uploaded image -->
              <?php
              if (!empty($drinks_image)) {
                ?>

                <div class="menu-opt drinks" style="background: url(<?php echo $drinks_image['url']; ?>) center center no-repeat; background-size: cover;">

                <?php } else { ?>

                  <div class="menu-opt drinks">

                  <?php } ?>

                  <a href="drinks">
                    <h4><?php echo $drinks_title; ?></h4>
                  </a>

                  </div>

                </div>

            </div>

        </div> <!-- row -->

        <div class="fade-left">

          <h3 class="intro-title"><?php echo $gallery_title; ?></h3>

        </div>

        <div class="fade-right">

          <p><?php echo $gallery_body; ?></p>

        </div>
        <!-- if user uploaded image -->
        <?php
        if (!empty($menus_instagram)) {
          echo $menus_instagram;
        } else {
          ?>

          <div class="row">

            <div class="fade-up-3">

              <div class="col col-sm-6 col-lg-4">

                <div class="gallery-item gallery-item-sm">
                  <!-- if user uploaded image -->
                  <?php if (!empty($gallery_image_1)) { ?>
                    <img src="<?php echo $gallery_image_1['url'] ?>" alt="<?php echo $gallery_image_1['alt'] ?>">
                    <p class="img-description"><?php echo $gallery_content_1; ?></p>
                  <?php } else { ?>
                    <img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/angry_vegan_300w.jpg" alt="Angry Vegan Chick'n Sandwich.">
                    <p class="img-description">Angry Vegain Chick'n</p>
                  <?php } ?>
                </div>

              </div>

              <div class="col col-sm-6 col-lg-4">

                <div class="gallery-item gallery-item-sm">
                  <!-- if user uploaded image -->
                  <?php if (!empty($gallery_image_2)) { ?>
                    <img src="<?php echo $gallery_image_2['url'] ?>" alt="<?php echo $gallery_image_2['alt'] ?>">
                    <p class="img-description"><?php echo $gallery_content_2; ?></p>
                  <?php } else { ?>
                    <img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/cheesesteak_300w.jpg" alt="Pig-a-delphia Cheesesteak Sandwich.">
                    <p class="img-description">Pig-a-delphia Cheesesteak</p>
                  <?php } ?>
                </div>

              </div>

              <div class="col col-sm-6 col-lg-4">

                <div class="gallery-item gallery-item-sm">
                  <!-- if user uploaded image -->
                  <?php if (!empty($gallery_image_3)) { ?>
                    <img src="<?php echo $gallery_image_3['url'] ?>" alt="<?php echo $gallery_image_3['alt'] ?>">
                    <p class="img-description"><?php echo $gallery_content_3; ?></p>
                  <?php } else { ?>
                    <img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/salmon_salad_300w.jpg" alt="Salmon Salad.">
                    <p class="img-description">Salmon Salad</p>
                  <?php } ?>
                </div>

              </div>

              <div class="col col-sm-6 col-lg-4">

                <div class="gallery-item gallery-item-sm">
                  <!-- if user uploaded image -->
                  <?php if (!empty($gallery_image_4)) { ?>
                    <img src="<?php echo $gallery_image_4['url'] ?>" alt="<?php echo $gallery_image_4['alt'] ?>">
                    <p class="img-description"><?php echo $gallery_content_4; ?></p>
                  <?php } else { ?>
                    <img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/cubano_300w.jpg" alt="Cubano Sandwich.">
                    <p class="img-description">Cubano</p>
                  <?php } ?>
                </div>

              </div>

              <div class="col col-sm-6 col-lg-4">

                <div class="gallery-item gallery-item-sm">
                  <!-- if user uploaded image -->
                  <?php if (!empty($gallery_image_5)) { ?>
                    <img src="<?php echo $gallery_image_5['url'] ?>" alt="<?php echo $gallery_image_5['alt'] ?>">
                    <p class="img-description"><?php echo $gallery_content_5; ?></p>
                  <?php } else { ?>
                    <img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/nachos_300w.jpg" alt="Chili Verde Nachos.">
                    <p class="img-description">Chili Verde Nachos</p>
                  <?php } ?>
                </div>

              </div>

              <div class="col col-sm-6 col-lg-4">

                <div class="gallery-item gallery-item-sm">
                  <!-- if user uploaded image -->
                  <?php if (!empty($gallery_image_6)) { ?>
                    <img src="<?php echo $gallery_image_6['url'] ?>" alt="<?php echo $gallery_image_6['alt'] ?>">
                    <p class="img-description"><?php echo $gallery_content_6; ?></p>
                  <?php } else { ?>
                    <img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/angus_300w.jpg" alt="Angus Burger.">
                    <p class="img-description">Angus Burger</p>
                  <?php } ?>
                </div>

              </div>

            </div> <!-- col -->

          </div> <!-- fade-up -->
        <?php } ?>

      </div> <!-- row -->

</section>

<?php
get_footer();
