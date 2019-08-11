<?php

//refresh the page after 5 seconds
// header('Refresh: '. $redirect_delay . ';url='. $redirect .'');
header( "Refresh: ". $redirect_delay . "; url=" . $redirect . "", true, 303);

?><?php
/*
  Template Name: Confirmation Page
 */

// ADVANCED CUSTOM FIELDS
// intro
$hero_image     = get_field('confirmation_hero');
$hero_title     = get_field('confirmation_hero_title');
$redirect       = get_field('confirmation_redirect');
$redirect_delay = get_field('confirmation_redirect_delay');
$intro_title    = get_field('confirmation_intro_title');
$intro_body     = get_field('confirmation_intro_body');

get_header(); ?>

<!-- ======= HERO ========================== -->

<div class="fade-down">

  <!-- if user uploaded image -->
  <?php
  if (!empty($hero_image)) { ?>

    <section class="hero confirmation-hero" style="background: url(<?php echo $hero_image['url']; ?>) center center no-repeat; background-size: cover;">

    <?php } else { ?>

      <section class="hero confirmation-hero">

      <?php } ?>

      <!-- if user uploaded image -->
      <?php if (!empty($hero_title)) { ?>

        <div class="hero-container">
          <h2><?php echo $hero_title; ?></h2>
        </div>

      <?php } ?>

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
  </div> <!-- container -->
</section>

<?php
get_footer();
