<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Green_Pig_Pub
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">

  <!-- <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/styles.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/sub_nav.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/index.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/scrolling_nav.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/menu_options.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/menu_item.css"> -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/fontawesome-free-5.0.4/web-fonts-with-css/css/fontawesome-all.min.css">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="page" class="site">
    <a class="skip-link screen-reader-text"
      href="#content"><?php esc_html_e( 'Skip to content', 'the-green-pig-pub' ); ?></a>

    <!-- =========== MAIN NAV ====================== -->
    <header>

      <nav class="nav-bar">

        <div id="mobile-nav" class="overlay">
          <div class="overlay-content">
            <div class="container">

              <a href="about">About</a>
              <a href="menus">Menus</a>
              <a class="sub-class" href="food">Food</a>
              <a class="sub-class" href="drinks">Drinks</a>
              <a href="events">Events</a>
              <a href="contact">Contact</a>

            </div>
          </div>

        </div> <!-- mobile-nav -->

        <div class="mobile-icon" onclick="toggleNav()">
          <div class="fade-up">
            <div class="toggle-button">
              <div class="menu-bar menu-bar-top"></div>
              <div class="menu-bar menu-bar-middle"></div>
              <div class="menu-bar menu-bar-bottom"></div>
            </div>
          </div>
        </div>

        <a href="home"><img class="logo logo-mobile" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="The Green Pig Pub Logo"></a>

        <div class="main-nav fade-down">

          <ul class="nav-items">
            <li class="nav-item"><a href="about">About</a></li>
            <li class="dropdown-btn nav-item">
              <a href="menus">Menus <i class="fas fa-caret-down"></i></a>
              <ul class="dropdown">
                <li><a href="food">Food</a></li>
                <li><a href="drinks">Drinks</a></li>
              </ul>
            </li>
            <a href="home"><img class="logo logo-main" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png"
                alt="The Green Pig Pub Logo"></a>
            <li class="nav-item hide-home"><a href="home">Home</a></li>
            <li class="nav-item"><a href="events">Events</a></li>
            <li class="nav-item"><a href="contact">Contact</a></li>
          </ul>

        </div> <!-- main-nav -->

      </nav>

    </header>