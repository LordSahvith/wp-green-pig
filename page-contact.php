<?php
/*
  Template Name: Contact Page
 */

// ADVANCED CUSTOM FIELDS
// intro
$page_title          = get_field('contact_page_title');
$hours_title         = get_field('contact_hours_title');
$hours_body          = get_field('contact_hours_body');
$events_title        = get_field('daily_events_title');
$events_body         = get_field('daily_events_body');
$form_title          = get_field('form_title');
$general_button      = get_field('general_email_button');
$general_email       = get_field('general_email');
$general_form        = get_field('general_form');
$band_button         = get_field('band_email_button');
$band_email          = get_field('band_email');
$band_form           = get_field('band_form');
$resvervation_button = get_field('reservation_email_button');
$resvervation_email  = get_field('reservation_email');
$reservation_form    = get_field('reservation_form');

get_header(); ?>

<!-- ======= HERO ========================== -->

<div class="fade-down">

  <section id="map-contact" class="hero hero-contact">

    <div class="hero-container">

      <h2>Contact</h2>

    </div>

  </section>

</div>



<!-- =========== CONTACT US ====================== -->

<section>

  <div class="container">

    <div class="fade-down">

      <h3><?php echo $page_title; ?></h3>

    </div>

    <div class="fade-in">

      <div class="divider"></div>

    </div>


    <div class="row">

      <div class="fade-right">

        <div class="col col-md-6">

          <div class="hours">

            <h4 style="padding-bottom: 0;"><?php echo $hours_title; ?></h4>

            <ul>
              <?php echo $hours_body; ?>
            </ul>

          </div>

          <div class="divider" style="padding-bottom: 0;"></div>

          <div class="events">

            <h4 style="padding-bottom: 0;"><?php echo $events_title; ?></h4>

            <ul>
              <?php echo $events_body; ?>
            </ul>

          </div> <!-- events -->

        </div> <!-- col -->

      </div>

      <div class="fade-left">

        <div class="col col-md-6 contact-form">
          <h3><?php echo $form_title; ?></h3>

          <!-- =========== SUB MENU ====================== -->

          <nav class="sub-menu">
            <div id="mobile-menu" class="overlay">
              <div class="overlay-content" style="top: 0; margin-top: 0;">
                <a href="javascript:void(0)" class="closebtn" style="top: 0; margin-top: 0;" onclick="closeNav()">&times;</a>
                <div class="container">
                  <li><button id="general-email-btn" class="sub-menu-btn form-btn" onclick="closeNav()"><?php echo $general_button; ?></button>
                  </li>
                  <li><button id="band-email-btn" class="sub-menu-btn form-btn" onclick="closeNav()"><?php echo $band_button; ?></button>
                  </li>
                  <li><button id="reservation-email-btn" class="sub-menu-btn form-btn" onclick="closeNav()"><?php echo $resvervation_button; ?></button></li>
                </div>
              </div>
            </div> <!-- mobile-nav -->

            <div class="mobile-icon menu-icon" style="width: 95%; margin-top: 0;" onclick="toggleMenu()">
              <div class="fade-up">
                <i class="fa fa-book" aria-hidden="true"></i>
              </div>
            </div>

            <ul class="main-nav main-menu form-menu">
              <div class="fade-up" style="display: flex; justify-content: space-between;">
                <li><button id="general-email-btn" class="sub-menu-btn form-btn form-choice"><?php echo $general_button; ?></button></li>
                <li><button id="band-email-btn" class="sub-menu-btn form-btn"><?php echo $band_button; ?></button></li>
                <li><button id="reservation-email-btn" class="sub-menu-btn form-btn"><?php echo $resvervation_button; ?></button></li>
              </div>
            </ul>
          </nav>

          <div id="general-email" style="margin-top: 80px;">
            <?php echo $general_form; ?>
          </div>

          <div id="band-email" style="margin-top: 80px;">
            <?php echo $band_form; ?>
          </div>

          <div id="reservation-email" style="margin-top: 80px;">
            <?php echo $reservation_form; ?>
          </div>

          </div> <!-- col -->

        </div> <!-- fade -->

      </div> <!-- row -->

    </div> <!-- container -->

</section>

<?php
get_footer();
