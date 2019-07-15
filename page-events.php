<?php
/*
  Template Name: Events Page
 */

 // ADVANCED CUSTOM FIELDS
 // intro
 $hero_image       = get_field('events_hero');
 $hero_title       = get_field('events_hero_title');
 $intro_body       = get_field('events_intro_body');
 $upcoming_heading = get_field('upcoming_heading');
 $upcoming_url     = get_field('upcoming_url');
 $upcoming_name    = get_field('upcoming_name');
 // monday
 $mon_banner = get_field('banner_mon_image');
 $mon_title  = get_field('banner_mon_title');
 $mon_body   = get_field('mon_body');
 // monday gallery
 $mon_gallery_image_1 = get_field('mon_gallery_1');
 $mon_gallery_image_2 = get_field('mon_gallery_2');
 $mon_gallery_image_3 = get_field('mon_gallery_3');
 $mon_gallery_image_4 = get_field('mon_gallery_4');
 $mon_gallery_image_5 = get_field('mon_gallery_5');
 $mon_gallery_image_6 = get_field('mon_gallery_6');
 // tuesday
 $tue_banner = get_field('banner_tue_image');
 $tue_title  = get_field('banner_tue_title');
 $tue_body   = get_field('tue_body');
 // tuesday gallery
 $tue_gallery_image_1 = get_field('tue_gallery_1');
 $tue_gallery_image_2 = get_field('tue_gallery_2');
 $tue_gallery_image_3 = get_field('tue_gallery_3');
 $tue_gallery_image_4 = get_field('tue_gallery_4');
 $tue_gallery_image_5 = get_field('tue_gallery_5');
 $tue_gallery_image_6 = get_field('tue_gallery_6');
 // wednesday
 $wed_banner          = get_field('banner_wed_image');
 $wed_title           = get_field('banner_wed_title');
 $wed_body            = get_field('wed_body');
 $first_question_url  = get_field('first_question_url');
 $first_question_name = get_field('first_question_name');
 // wednesday gallery
 $wed_gallery_image_1 = get_field('wed_gallery_1');
 $wed_gallery_image_2 = get_field('wed_gallery_2');
 $wed_gallery_image_3 = get_field('wed_gallery_3');
 $wed_gallery_image_4 = get_field('wed_gallery_4');
 $wed_gallery_image_5 = get_field('wed_gallery_5');
 $wed_gallery_image_6 = get_field('wed_gallery_6');
 // thursday
 $thur_banner = get_field('banner_thur_image');
 $thur_title  = get_field('banner_thur_title');
 $thur_body   = get_field('thur_body');
 // thursday gallery
 $thur_gallery_image_1 = get_field('thur_gallery_1');
 $thur_gallery_image_2 = get_field('thur_gallery_2');
 $thur_gallery_image_3 = get_field('thur_gallery_3');
 $thur_gallery_image_4 = get_field('thur_gallery_4');
 $thur_gallery_image_5 = get_field('thur_gallery_5');
 $thur_gallery_image_6 = get_field('thur_gallery_6');
 // friday
 $fri_banner = get_field('banner_fri_image');
 $fri_title  = get_field('banner_fri_title');
 $fri_body   = get_field('fri_body');
 // friday gallery
 $fri_gallery_image_1 = get_field('fri_gallery_1');
 $fri_gallery_image_2 = get_field('fri_gallery_2');
 $fri_gallery_image_3 = get_field('fri_gallery_3');
 $fri_gallery_image_4 = get_field('fri_gallery_4');
 $fri_gallery_image_5 = get_field('fri_gallery_5');
 $fri_gallery_image_6 = get_field('fri_gallery_6');
 // saturday
 $sat_banner = get_field('banner_sat_image');
 $sat_title  = get_field('banner_sat_title');
 $sat_body   = get_field('sat_body');
 // saturday gallery
 $sat_gallery_image_1 = get_field('sat_gallery_1');
 $sat_gallery_image_2 = get_field('sat_gallery_2');
 $sat_gallery_image_3 = get_field('sat_gallery_3');
 $sat_gallery_image_4 = get_field('sat_gallery_4');
 $sat_gallery_image_5 = get_field('sat_gallery_5');
 $sat_gallery_image_6 = get_field('sat_gallery_6');
 // sunday
 $sun_banner = get_field('banner_sun_image');
 $sun_title  = get_field('banner_sun_title');
 $sun_body   = get_field('sun_body');
 // sunday gallery
 $sun_gallery_image_1 = get_field('sun_gallery_1');
 $sun_gallery_image_2 = get_field('sun_gallery_2');
 $sun_gallery_image_3 = get_field('sun_gallery_3');
 $sun_gallery_image_4 = get_field('sun_gallery_4');
 $sun_gallery_image_5 = get_field('sun_gallery_5');
 $sun_gallery_image_6 = get_field('sun_gallery_6');

get_header(); ?>

  <!-- ======= HERO ========================== -->
  <div class="fade-down">
    <!-- if user uploaded image -->
    <?php if(!empty($hero_image) ) { ?>
    <section class="hero hero-events" style="background: #333 url(<?php echo $hero_image['url']; ?>) center center no-repeat; background-size: cover;">
    <?php } else {?>
    <section class="hero hero-events">
    <?php } ?>
      <div class="hero-container">
      <!-- if user uploaded copy -->
      <?php if(!empty($hero_title) ) { ?>
        <h2><?php echo $hero_title; ?></h2>
      <?php } else {?>
        <h2>Events</h2>
      <?php } ?>
      </div>
    </section>
  </div>

  <!-- =========== PAGE WELCOME ====================== -->

  <section class="welcome events-welcome">
    <div class="container" style="padding-bottom: 15px;">
      <div class="fade-left intro-events">
        <!-- if user uploaded copy -->
        <?php if(!empty($intro_body) ) { ?>
          <p><?php echo $intro_body; ?></p>
        <?php } else {?>
          <p>History is being made every day. Trivia is humbling on Wednesdays, while blushing on Sundays. We got live music Mondays with our Open Blues Jam, Thursdays with karaoke, Fridays with live bands/artists of various genres and every Saturday is DJ Latu. Are you creating the correct&nbsp;history?</p>
        <?php } ?>
      </div>

      <div class="fade-right">
        <!-- if user uploaded copy -->
        <?php if(!empty($upcoming_heading) ) { ?>
        <h4 style="margin-bottom: 10px;"><?php echo $upcoming_heading; ?></h4>
        <?php } else {?>
        <h4 style="margin-bottom: 10px;">Check Out Our</h4>
        <?php } ?>
        <!-- if user uploaded copy -->
        <?php if(!empty($upcoming_url) ) { ?>
        <a href="<?php echo $upcoming_url; ?>" style="text-decoration: underline;" target="_blank">
        <?php } else {?>
        <a href="https://www.facebook.com/pg/greenpigpub/events/?ref=page_internal" style="text-decoration: underline;" target="_blank">
        <?php } ?>
        <!-- if user uploaded copy -->
        <?php if(!empty($upcoming_name) ) { ?>
          <h5><?php echo $upcoming_name; ?></h5>
        <?php } else {?>
          <h5>Upcoming Events</h5>
        <?php } ?>
        </a>
      </div>
    </div>
  </section>

  <!-- =========== SUB MENU ====================== -->
  <nav class="sub-menu sub-menu-event">
    <div id="mobile-menu" class="overlay">
      <div class="overlay-content">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <div class="container">
          <div class="col col-xs-6 col-md-4">
            <button id="event-mon-btn" class="event-menu-btn" onclick="closeNav()">Mon <span id="mon-date"
                class="date"></span></button>
          </div>

          <div class="col col-xs-6 col-md-4">
            <button id="event-tue-btn" class="event-menu-btn" onclick="closeNav()">Tue <span id="tue-date"
                class="date"></span></button>
          </div>

          <div class="col col-xs-6 col-md-4">
            <button id="event-wed-btn" class="event-menu-btn" onclick="closeNav()">Wed <span id="wed-date"
                class="date"></span></button>
          </div>

          <div class="col col-xs-6 col-md-4">
            <button id="event-thu-btn" class="event-menu-btn" onclick="closeNav()">Thu <span id="thu-date"
                class="date"></span></button>
          </div>

          <div class="col col-xs-6 col-md-4">
            <button id="event-fri-btn" class="event-menu-btn" onclick="closeNav()">Fri <span id="fri-date"
                class="date"></span></button>
          </div>

          <div class="col col-xs-6 col-md-4">
            <button id="event-sat-btn" class="event-menu-btn" onclick="closeNav()">Sat <span id="sat-date"
                class="date"></span></button>
          </div>
          <div class="col">
            <button id="event-sun-btn" class="event-menu-btn" onclick="closeNav()">Sun <span id="sun-date"
                class="date"></span></button>
          </div>
        </div>
      </div>
    </div>

    <div class="mobile-icon menu-icon" onclick="toggleMenu()">
      <div class="fade-up">
        <i class="fas fa-calendar-alt"></i>
      </div>
    </div> <!-- mobile-icon -->

    <div class="main-nav events-icon" onclick="toggleMenu()">
      <div class="fade-up">
        <i class="fas fa-calendar-alt"> <span class="pick-a-day">Daily Events</span></i>
      </div>
    </div> <!-- mobile-icon -->
  </nav>


  <!-- =========== MONDAY - BLUES JAM ====================== -->
  <div id="event-mon">

    <!-- =========== MONDAY - BLUES JAM BANNER ====================== -->
    <div class="fade-up">
    <!-- if user uploaded image -->
    <?php if(!empty($mon_banner) ) { ?>
      <section class="banner events-mon-banner sub-menu-banner-gap" style="background: #333 url(<?php echo $mon_banner['url']; ?>) center center no-repeat; background-size: cover;">
    <?php } else {?>
      <section class="banner events-mon-banner sub-menu-banner-gap">
    <?php } ?>
        <div class="banner-container">
      <!-- if user uploaded copy -->
      <?php if(!empty($mon_title) ) { ?>
        <h3><?php echo $mon_title; ?></h3>
      <?php } else {?>
          <h3>Open Blues Jam</h3>
      <?php } ?>
        </div>
      </section>
    </div>


    <!-- =========== MONDAY - BLUES JAM SECT ====================== -->
    <section class="events-mon-section">
      <div class="container">
        <div class="fade-left">
        <!-- if user uploaded copy -->
        <?php if(!empty($mon_body) ) { ?>
          <p><?php echo $mon_body; ?></p>
        <?php } else {?>
          <p>If you love playing, listening and dancing to blues then Monday nights at The Green Pig is the place for you. We have a live local blues band "West Temple Tail Draggers" that open up the night with a signup sheet for others to join so bring your instrument and sign up to show off your passion for&nbsp;blues.</p>
        <?php } ?>
        </div>

        <script>instafeed('greenpigbluesjam');</script>

        <div class="row">
          <div class="fade-up-3">
            <div class="col col-sm-6 col-lg-4">
              <div class="gallery-item gallery-item-sm">
              <!-- if user uploaded image -->
              <?php if(!empty($mon_gallery_image_1) ) { ?>
                <img id="greenpigbluesjam0" src="<?php echo $mon_gallery_image_1['url'] ?>" alt="<?php echo $mon_gallery_image_1['alt'] ?>">
              <?php } else {?>
                <img id="greenpigbluesjam0" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/blues_draggers_300w.jpg" alt="West Temple Tail Draggers.">
              <?php } ?>
              </div>
            </div>

            <div class="col col-sm-6 col-lg-4">
              <div class="gallery-item gallery-item-sm">
              <!-- if user uploaded image -->
              <?php if(!empty($mon_gallery_image_2) ) { ?>
                <img id="greenpigbluesjam1" src="<?php echo $mon_gallery_image_2['url'] ?>" alt="<?php echo $mon_gallery_image_2['alt'] ?>">
              <?php } else {?>
                <img id="greenpigbluesjam1" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/blues_jam_300w.jpg" alt="Open Blues Jam. Drummer close up.">
              <?php } ?>
              </div>
            </div>

            <div class="col col-sm-6 col-lg-4">
              <div class="gallery-item gallery-item-sm">
              <!-- if user uploaded image -->
              <?php if(!empty($mon_gallery_image_3) ) { ?>
                <img id="greenpigbluesjam2" src="<?php echo $mon_gallery_image_3['url'] ?>" alt="<?php echo $mon_gallery_image_3['alt'] ?>">
              <?php } else {?>
                <img id="greenpigbluesjam2" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/blues_draggers-1_300w.jpg" alt="West Temple Tail Draggers. Vocalist close up.">
              <?php } ?>
              </div>
            </div>

            <div class="col col-sm-6 col-lg-4">
              <div class="gallery-item gallery-item-sm">
              <!-- if user uploaded image -->
              <?php if(!empty($mon_gallery_image_4) ) { ?>
                <img id="greenpigbluesjam3" src="<?php echo $mon_gallery_image_4['url'] ?>" alt="<?php echo $mon_gallery_image_4['alt'] ?>">
              <?php } else {?>
                <img id="greenpigbluesjam3" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/blues_draggers_300w.jpg" alt="West Temple Tail Draggers. Drummer close up.">
              <?php } ?>
              </div>
            </div>

            <div class="col col-sm-6 col-lg-4">
              <div class="gallery-item gallery-item-sm">
              <!-- if user uploaded image -->
              <?php if(!empty($mon_gallery_image_5) ) { ?>
                <img id="greenpigbluesjam4" src="<?php echo $mon_gallery_image_5['url'] ?>" alt="<?php echo $mon_gallery_image_5['alt'] ?>">
              <?php } else {?>
                <img id="greenpigbluesjam4" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/blues_jam_300w.jpg" alt="Open Blues Jam.">
              <?php } ?>
              </div>
            </div>

            <div class="col col-sm-6 col-lg-4">
              <div class="gallery-item gallery-item-sm">
              <!-- if user uploaded image -->
              <?php if(!empty($mon_gallery_image_6) ) { ?>
                <img id="greenpigbluesjam5" src="<?php echo $mon_gallery_image_6['url'] ?>" alt="<?php echo $mon_gallery_image_6['alt'] ?>">
              <?php } else {?>
                <img id="greenpigbluesjam5" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/blues_draggers-1_300w.jpg" alt="West Temple Tail Draggers. Vocalist close up.">
              <?php } ?>
              </div>
            </div>
          </div> <!-- fade-up-3 -->
        </div> <!-- row -->
      </div> <!-- container -->
    </section> <!-- mon section -->
  </div> <!-- mon -->


  <!-- =========== TUESDAY - $2 TUESDAYS ====================== -->
  <div id="event-tue">

    <!-- =========== TUESDAY - $2 TUESDAYS BANNER ====================== -->
    <!-- if user uploaded image -->
    <?php if(!empty($tue_banner) ) { ?>
      <section class="banner events-tue-banner sub-menu-banner-gap" style="background: #333 url(<?php echo $tue_banner['url']; ?>) center center no-repeat; background-size: cover;">
    <?php } else {?>
      <section class="banner events-tue-banner sub-menu-banner-gap">
    <?php } ?>
        <div class="banner-container">
      <!-- if user uploaded copy -->
      <?php if(!empty($tue_title) ) { ?>
        <h3><?php echo $tue_title; ?></h3>
      <?php } else {?>
          <h3>$2 Tuesday's</h3>
      <?php } ?>
        </div>
      </section>

    <!-- =========== TUESDAY - $2 TUESDAYS SECT ====================== -->
    <section class="events-tue-section">
      <div class="container">
        <div class="intro">
        <!-- if user uploaded copy -->
        <?php if(!empty($tue_body) ) { ?>
          <p><?php echo $tue_body; ?></p>
        <?php } else {?>
          <p class="bottom-gap">It's $2 Tuesday! Grab some friends and come enjoy our $2 tacos with a $2 rotator draft beer. Or if you'd prefer just a plain 'ol tall boy or spirit, we've got $2 Tecate's &amp; Tequilla. Don't miss out on spicin' up your Tuesday night!</p>
        <?php } ?>
        </div>

        <script>instafeed('greenpiglocalsnight');</script>

        <div class="row">
          <div class="fade-up-3">
            <div class="col col-sm-6 col-lg-4">
              <div class="gallery-item gallery-item-sm">
              <!-- if user uploaded image -->
              <?php if(!empty($tue_gallery_image_1) ) { ?>
                <img id="greenpiglocalsnight0" src="<?php echo $tue_gallery_image_1['url'] ?>" alt="<?php echo $tue_gallery_image_1['alt'] ?>">
              <?php } else {?>
                <img id="greenpiglocalsnight0" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/paint_nite-1_300w.jpg" alt="Paint Nite painters.">
              <?php } ?>
              </div>
            </div>

            <div class="col col-sm-6 col-lg-4">
              <div class="gallery-item gallery-item-sm">
              <!-- if user uploaded image -->
              <?php if(!empty($tue_gallery_image_2) ) { ?>
                <img id="greenpiglocalsnight1" src="<?php echo $tue_gallery_image_2['url'] ?>" alt="<?php echo $tue_gallery_image_2['alt'] ?>">
              <?php } else {?>
                <img id="greenpiglocalsnight1" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/paint_nite-2_300w.jpg" alt="Paint Nite painters.">
              <?php } ?>
              </div>
            </div>

            <div class="col col-sm-6 col-lg-4">
              <div class="gallery-item gallery-item-sm">
              <!-- if user uploaded image -->
              <?php if(!empty($tue_gallery_image_3) ) { ?>
                <img id="greenpiglocalsnight2" src="<?php echo $tue_gallery_image_3['url'] ?>" alt="<?php echo $tue_gallery_image_3['alt'] ?>">
              <?php } else {?>
                <img id="greenpiglocalsnight2" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/paint_nite-3_300w.jpg" alt="Paint Nite painters.">
              <?php } ?>
              </div>
            </div>

            <div class="col col-sm-6 col-lg-4">
              <div class="gallery-item gallery-item-sm">
              <!-- if user uploaded image -->
              <?php if(!empty($tue_gallery_image_4) ) { ?>
                <img id="greenpiglocalsnight3" src="<?php echo $tue_gallery_image_4['url'] ?>" alt="<?php echo $tue_gallery_image_4['alt'] ?>">
              <?php } else {?>
                <img id="greenpiglocalsnight3" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/paint_nite-1_300w.jpg" alt="Paint Nite painters.">
              <?php } ?>
              </div>
            </div>

            <div class="col col-sm-6 col-lg-4">
              <div class="gallery-item gallery-item-sm">
              <!-- if user uploaded image -->
              <?php if(!empty($tue_gallery_image_5) ) { ?>
                <img id="greenpiglocalsnight4" src="<?php echo $tue_gallery_image_5['url'] ?>" alt="<?php echo $tue_gallery_image_5['alt'] ?>">
              <?php } else {?>
                <img id="greenpiglocalsnight4" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/paint_nite-2_300w.jpg" alt="Paint Nite painters.">
              <?php } ?>
              </div>
            </div>

            <div class="col col-sm-6 col-lg-4">
              <div class="gallery-item gallery-item-sm">
              <!-- if user uploaded image -->
              <?php if(!empty($tue_gallery_image_6) ) { ?>
                <img id="greenpiglocalsnight5" src="<?php echo $tue_gallery_image_6['url'] ?>" alt="<?php echo $tue_gallery_image_6['alt'] ?>">
              <?php } else {?>
                <img id="greenpiglocalsnight5" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/paint_nite-3_300w.jpg" alt="Paint Nite painters.">
              <?php } ?>
              </div>
            </div>
          </div> <!-- fade-left -->
        </div> <!-- row -->
      </div> <!-- container -->
    </section> <!-- tue section -->
  </div> <!-- tue -->


  <!-- =========== WEDNESDAY - GENERAL TRIVIA ====================== -->
  <div id="event-wed">

    <!-- =========== WEDNESDAY - GENERAL TRIVIA BANNER ====================== -->
    <!-- if user uploaded image -->
    <?php if(!empty($wed_banner) ) { ?>
      <section class="banner events-wed-banner sub-menu-banner-gap" style="background: #333 url(<?php echo $wed_banner['url']; ?>) center center no-repeat; background-size: cover;">
    <?php } else {?>
      <section class="banner events-wed-banner sub-menu-banner-gap">
    <?php } ?>
        <div class="banner-container">
      <!-- if user uploaded copy -->
      <?php if(!empty($wed_title) ) { ?>
        <h3><?php echo $wed_title; ?></h3>
      <?php } else {?>
        <h3>General Trivia</h3>
      <?php } ?>
        </div>
      </section>

    <!-- =========== WEDNESDAY - GENERAL TRIVIA SECT ====================== -->
    <section class="events-wed-section">
      <div class="container">
        <div class="intro">
        <!-- if user uploaded copy -->
        <?php if(!empty($wed_body) ) { ?>
          <p><?php echo $wed_body; ?></p>
          <a href="<?php echo $first_question_url; ?>" target="_blank" class="button"><?php echo $first_question_name; ?></a>
        <?php } else {?>
          <p class="bottom-gap">Think you’re a trivia wizard? Grab some witty friends and come test your knowledge against other teams for a chance to win a Green Pig Gift Certificate or just plain ol' bragging rights! Call to reserve your team's spot now. Oh, by the way...Daisy can be quite ferocious so if this isn't the first question, you'd better put your phone away...</p>
          <a href="https://www.facebook.com/trivianight" target="_blank" class="button">1st question</a>
        <?php } ?>
        </div>

        <script>instafeed('greenpigtrivia');</script>

        <div class="row">
          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
              <!-- if user uploaded image -->
              <?php if(!empty($wed_gallery_image_1) ) { ?>
                <img id="greenpigtrivia0" src="<?php echo $wed_gallery_image_1['url'] ?>" alt="<?php echo $wed_gallery_image_1['alt'] ?>">
              <?php } else {?>
              <img id="greenpigtrivia0" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/trivia/trivia_300w_1.jpg" alt="Paint Nite painters.">
              <?php } ?>
            </div>
          </div>

          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
              <!-- if user uploaded image -->
              <?php if(!empty($wed_gallery_image_2) ) { ?>
                <img id="greenpigtrivia1" src="<?php echo $wed_gallery_image_2['url'] ?>" alt="<?php echo $wed_gallery_image_2['alt'] ?>">
              <?php } else {?>
              <img id="greenpigtrivia1" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/trivia/trivia_300w_2.jpg" alt="Paint Nite painters.">
              <?php } ?>
            </div>
          </div>

          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
              <!-- if user uploaded image -->
              <?php if(!empty($wed_gallery_image_3) ) { ?>
                <img id="greenpigtrivia2" src="<?php echo $wed_gallery_image_3['url'] ?>" alt="<?php echo $wed_gallery_image_3['alt'] ?>">
              <?php } else {?>
              <img id="greenpigtrivia2" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/trivia/trivia_300w_3.jpg" alt="Paint Nite painters.">
              <?php } ?>
            </div>
          </div>

          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
              <!-- if user uploaded image -->
              <?php if(!empty($wed_gallery_image_4) ) { ?>
                <img id="greenpigtrivia3" src="<?php echo $wed_gallery_image_4['url'] ?>" alt="<?php echo $wed_gallery_image_4['alt'] ?>">
              <?php } else {?>
              <img id="greenpigtrivia3" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/trivia/trivia_300w_4.jpg" alt="Paint Nite painters.">
              <?php } ?>
            </div>
          </div>

          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
              <!-- if user uploaded image -->
              <?php if(!empty($wed_gallery_image_5) ) { ?>
                <img id="greenpigtrivia4" src="<?php echo $wed_gallery_image_5['url'] ?>" alt="<?php echo $wed_gallery_image_5['alt'] ?>">
              <?php } else {?>
              <img id="greenpigtrivia4" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/trivia/trivia_300w_5.jpg" alt="Paint Nite painters.">
              <?php } ?>
            </div>
          </div>

          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
              <!-- if user uploaded image -->
              <?php if(!empty($wed_gallery_image_6) ) { ?>
                <img id="greenpigtrivia5" src="<?php echo $wed_gallery_image_6['url'] ?>" alt="<?php echo $wed_gallery_image_6['alt'] ?>">
              <?php } else {?>
              <img id="greenpigtrivia5" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/trivia/trivia_300w_6.jpg" alt="Paint Nite painters.">
              <?php } ?>
            </div>
          </div>
        </div> <!-- row -->
      </div> <!-- container -->
    </section> <!-- wed section -->
  </div> <!-- wed -->


  <!-- =========== THURSDAY - KARAOKE ====================== -->
  <div id="event-thu">

    <!-- =========== THURSDAY - KARAOKE BANNER ====================== -->
    <!-- if user uploaded image -->
    <?php if(!empty($thur_banner) ) { ?>
      <section class="banner events-thur-banner sub-menu-banner-gap" style="background: #333 url(<?php echo $thur_banner['url']; ?>) center center no-repeat; background-size: cover;">
    <?php } else {?>
      <section class="banner events-thur-banner sub-menu-banner-gap">
    <?php } ?>
        <div class="banner-container">
      <!-- if user uploaded copy -->
      <?php if(!empty($thur_title) ) { ?>
        <h3><?php echo $thur_title; ?></h3>
      <?php } else {?>
        <h3>Karaoke</h3>
      <?php } ?>
        </div>
      </section>

    <!-- =========== THURSDAY - KARAOKE SECT ====================== -->
    <section class="events-thur-section">
      <div class="container">
        <!-- if user uploaded copy -->
        <?php if(!empty($thur_body) ) { ?>
          <p><?php echo $thur_body; ?></p>
        <?php } else {?>
          <p>Got the courage to sing your heart out before an audience? Come kick it with us and show everybody your impressive singing voice & give a shameless performance for all to enjoy! Singing starts @ 9 so come early to get your&nbsp;spot.</p>
        <?php } ?>

        <script>instafeed('greenpigkaraoke');</script>

        <div class="row">
          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
              <!-- if user uploaded image -->
              <?php if(!empty($thur_gallery_image_1) ) { ?>
                <img id="greenpigkaraoke0" src="<?php echo $thur_gallery_image_1['url'] ?>" alt="<?php echo $thur_gallery_image_1['alt'] ?>">
              <?php } else {?>
              <img id="greenpigkaraoke0" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/karaoke-1_300w.jpg" alt="Karaoke Singer.">
              <?php } ?>
            </div>
          </div>

          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
              <!-- if user uploaded image -->
              <?php if(!empty($thur_gallery_image_2) ) { ?>
                <img id="greenpigkaraoke1" src="<?php echo $thur_gallery_image_2['url'] ?>" alt="<?php echo $thur_gallery_image_2['alt'] ?>">
              <?php } else {?>
              <img id="greenpigkaraoke1" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/karaoke_group_sing_300w.jpg" alt="Karaoke group singing.">
              <?php } ?>
            </div>
          </div>

          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
              <!-- if user uploaded image -->
              <?php if(!empty($thur_gallery_image_3) ) { ?>
                <img id="greenpigkaraoke2" src="<?php echo $thur_gallery_image_3['url'] ?>" alt="<?php echo $thur_gallery_image_3['alt'] ?>">
              <?php } else {?>
              <img id="greenpigkaraoke2" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/karaoke-2_300w.jpg" alt="Karaoke Singer.">
              <?php } ?>
            </div>
          </div>

          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
              <!-- if user uploaded image -->
              <?php if(!empty($thur_gallery_image_4) ) { ?>
                <img id="greenpigkaraoke3" src="<?php echo $thur_gallery_image_4['url'] ?>" alt="<?php echo $thur_gallery_image_4['alt'] ?>">
              <?php } else {?>
              <img id="greenpigkaraoke3" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/karaoke-3_300w.jpg" alt="Karaoke Singer.">
              <?php } ?>
            </div>
          </div>

          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
              <!-- if user uploaded image -->
              <?php if(!empty($thur_gallery_image_5) ) { ?>
                <img id="greenpigkaraoke4" src="<?php echo $thur_gallery_image_5['url'] ?>" alt="<?php echo $thur_gallery_image_5['alt'] ?>">
              <?php } else {?>
              <img id="greenpigkaraoke4" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/karaoke-4_300w.jpg" alt="Karaoke Singer.">
              <?php } ?>
            </div>
          </div>

          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
              <!-- if user uploaded image -->
              <?php if(!empty($thur_gallery_image_6) ) { ?>
                <img id="greenpigkaraoke5" src="<?php echo $thur_gallery_image_6['url'] ?>" alt="<?php echo $thur_gallery_image_6['alt'] ?>">
              <?php } else {?>
              <img id="greenpigkaraoke5" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/karaoke-1_300w.jpg" alt="Karaoke Singer.">
              <?php } ?>
            </div>
          </div>
        </div> <!-- row -->
      </div> <!-- container -->
    </section> <!-- thur section -->
  </div> <!-- thur -->



  <!-- =========== FRIDAY - LIVE MUSIC ====================== -->
  <div id="event-fri">

    <!-- =========== FRIDAY - LIVE MUSIC BANNER ====================== -->
    <!-- if user uploaded image -->
    <?php if(!empty($fri_banner) ) { ?>
      <section class="banner events-fri-banner sub-menu-banner-gap" style="background: #333 url(<?php echo $fri_banner['url']; ?>) center center no-repeat; background-size: cover;">
    <?php } else {?>
      <section class="banner events-fri-banner sub-menu-banner-gap">
    <?php } ?>
        <div class="banner-container">
      <!-- if user uploaded copy -->
      <?php if(!empty($fri_title) ) { ?>
        <h3><?php echo $fri_title; ?></h3>
      <?php } else {?>
        <h3>Live Music</h3>
      <?php } ?>
        </div>
      </section>

    <!-- =========== FRIDAY - LIVE MUSIC SECT ====================== -->
    <section class="events-fri-section">
      <div class="container">
        <!-- if user uploaded copy -->
        <?php if(!empty($fri_body) ) { ?>
          <p><?php echo $fri_body; ?></p>
        <?php } else {?>
          <p>If you're looking for some good Friday night fun, look no further. Every Friday at 10pm we have live music from a range of genres. So, grab your friends and come have a night to&nbsp;remember.</p>
        <?php } ?>


        <script>instafeed('greenpiglive');</script>

        <div class="row">
          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
              <!-- if user uploaded image -->
              <?php if(!empty($fri_gallery_image_1) ) { ?>
                <img id="greenpiglive0" src="<?php echo $fri_gallery_image_1['url'] ?>" alt="<?php echo $fri_gallery_image_1['alt'] ?>">
              <?php } else {?>
              <img id="greenpiglive0" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/live_music/live_300w_6.jpg" alt="live music.">
              <?php } ?>
            </div>
          </div>

          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
              <!-- if user uploaded image -->
              <?php if(!empty($fri_gallery_image_2) ) { ?>
                <img id="greenpiglive1" src="<?php echo $fri_gallery_image_2['url'] ?>" alt="<?php echo $fri_gallery_image_2['alt'] ?>">
              <?php } else {?>
              <img id="greenpiglive1" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/live_music/live_300w_2.jpg" alt="live music.">
              <?php } ?>
            </div>
          </div>

          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
              <!-- if user uploaded image -->
              <?php if(!empty($fri_gallery_image_3) ) { ?>
                <img id="greenpiglive2" src="<?php echo $fri_gallery_image_3['url'] ?>" alt="<?php echo $fri_gallery_image_3['alt'] ?>">
              <?php } else {?>
              <img id="greenpiglive2" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/live_music/live_300w_3.jpg" alt="live music.">
              <?php } ?>
            </div>
          </div>

          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
              <!-- if user uploaded image -->
              <?php if(!empty($fri_gallery_image_4) ) { ?>
                <img id="greenpiglive3" src="<?php echo $fri_gallery_image_4['url'] ?>" alt="<?php echo $fri_gallery_image_4['alt'] ?>">
              <?php } else {?>
              <img id="greenpiglive3" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/live_music/live_300w_4.jpg" alt="live music.">
              <?php } ?>
            </div>
          </div>

          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
              <!-- if user uploaded image -->
              <?php if(!empty($fri_gallery_image_5) ) { ?>
                <img id="greenpiglive4" src="<?php echo $fri_gallery_image_5['url'] ?>" alt="<?php echo $fri_gallery_image_5['alt'] ?>">
              <?php } else {?>
              <img id="greenpiglive4" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/live_music/live_300w_5.jpg" alt="live music.">
              <?php } ?>
            </div>
          </div>

          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
              <!-- if user uploaded image -->
              <?php if(!empty($fri_gallery_image_6) ) { ?>
                <img id="greenpiglive5" src="<?php echo $fri_gallery_image_6['url'] ?>" alt="<?php echo $fri_gallery_image_6['alt'] ?>">
              <?php } else {?>
              <img id="greenpiglive5" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/live_music/live_300w_1.jpg" alt="live music.">
              <?php } ?>
            </div>
          </div>
        </div> <!-- row -->
      </div> <!-- container -->
    </section> <!-- fri section -->
  </div> <!-- fri -->


  <!-- =========== SATURDAY - DJ LATU ====================== -->
  <div id="event-sat">

    <!-- =========== SATURDAY - DJ LATU BANNER ====================== -->
    <!-- if user uploaded image -->
    <?php if(!empty($sat_banner) ) { ?>
      <section class="banner events-sat-banner sub-menu-banner-gap" style="background: #333 url(<?php echo $sat_banner['url']; ?>) center center no-repeat; background-size: cover;">
    <?php } else {?>
      <section class="banner events-sat-banner sub-menu-banner-gap">
    <?php } ?>
        <div class="banner-container">
      <!-- if user uploaded copy -->
      <?php if(!empty($sat_title) ) { ?>
        <h3><?php echo $sat_title; ?></h3>
      <?php } else {?>
        <h3>DJ Latu</h3>
      <?php } ?>
        </div>
      </section>


    <!-- =========== SATURDAY - DJ LATU SECT ====================== -->
    <section class="events-sat-section">
      <div class="container">
        <!-- if user uploaded copy -->
        <?php if(!empty($sat_body) ) { ?>
          <p><?php echo $sat_body; ?></p>
        <?php } else {?>
        <p>Say What?! DJ Latu? That's right. Come grab some drinks with your friends and dance the night away, while kicking with local sensation Latu!</p>
        <?php } ?>

        <script>instafeed('greenpigdjlatu');</script>

        <div class="row">
          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
              <!-- if user uploaded image -->
              <?php if(!empty($sat_gallery_image_1) ) { ?>
                <img id="greenpigdjlatu0" src="<?php echo $sat_gallery_image_1['url'] ?>" alt="<?php echo $sat_gallery_image_1['alt'] ?>">
              <?php } else {?>
              <img id="greenpigdjlatu0" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/dj_latu/latu_300w_1.jpg" alt="live music.">
              <?php } ?>
            </div>
          </div>

          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
              <!-- if user uploaded image -->
              <?php if(!empty($sat_gallery_image_2) ) { ?>
                <img id="greenpigdjlatu1" src="<?php echo $sat_gallery_image_2['url'] ?>" alt="<?php echo $sat_gallery_image_2['alt'] ?>">
              <?php } else {?>
              <img id="greenpigdjlatu1" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/dj_latu/latu_300w_2.jpg" alt="live music.">
              <?php } ?>
            </div>
          </div>

          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
              <!-- if user uploaded image -->
              <?php if(!empty($sat_gallery_image_3) ) { ?>
                <img id="greenpigdjlatu2" src="<?php echo $sat_gallery_image_3['url'] ?>" alt="<?php echo $sat_gallery_image_3['alt'] ?>">
              <?php } else {?>
              <img id="greenpigdjlatu2" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/dj_latu/latu_300w_3.jpg" alt="live music.">
              <?php } ?>
            </div>
          </div>

          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
              <!-- if user uploaded image -->
              <?php if(!empty($sat_gallery_image_4) ) { ?>
                <img id="greenpigdjlatu3" src="<?php echo $sat_gallery_image_4['url'] ?>" alt="<?php echo $sat_gallery_image_4['alt'] ?>">
              <?php } else {?>
              <img id="greenpigdjlatu3" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/dj_latu/latu_300w_4.jpg" alt="live music.">
              <?php } ?>
            </div>
          </div>

          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
              <!-- if user uploaded image -->
              <?php if(!empty($sat_gallery_image_5) ) { ?>
                <img id="greenpigdjlatu4" src="<?php echo $sat_gallery_image_5['url'] ?>" alt="<?php echo $sat_gallery_image_5['alt'] ?>">
              <?php } else {?>
              <img id="greenpigdjlatu4" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/dj_latu/latu_300w_5.jpg" alt="live music.">
              <?php } ?>
            </div>
          </div>

          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
              <!-- if user uploaded image -->
              <?php if(!empty($sat_gallery_image_6) ) { ?>
                <img id="greenpigdjlatu5" src="<?php echo $sat_gallery_image_6['url'] ?>" alt="<?php echo $sat_gallery_image_6['alt'] ?>">
              <?php } else {?>
              <img id="greenpigdjlatu5" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/dj_latu/latu_300w_6.jpg" alt="live music.">
              <?php } ?>
            </div>
          </div>
        </div> <!-- row -->
      </div> <!-- container -->
    </section> <!-- sat section -->
  </div> <!-- sat -->


  <!-- =========== SUNDAY - BREAKFAST BUFFET ====================== -->
  <div id="event-sun">

    <!-- =========== SUNDAY - BREAKFAST BUFFET BANNER ====================== -->
    <!-- if user uploaded image -->
    <?php if(!empty($sun_banner) ) { ?>
      <section class="banner events-sun-banner sub-menu-banner-gap" style="background: #333 url(<?php echo $sun_banner['url']; ?>) center center no-repeat; background-size: cover;">
    <?php } else {?>
      <section class="banner events-sun-banner sub-menu-banner-gap">
    <?php } ?>
        <div class="banner-container">
      <!-- if user uploaded copy -->
      <?php if(!empty($sun_title) ) { ?>
        <h3><?php echo $sun_title; ?></h3>
      <?php } else {?>
        <h3>Breakfast Buffet / Adult Trivia</h3>
      <?php } ?>
        </div>
      </section>


    <!-- =========== SUNDAY - BREAKFAST BUFFET SECT ====================== -->
    <section class="events-sun-section">
      <div class="container">
        <!-- if user uploaded copy -->
        <?php if(!empty($sun_body) ) { ?>
          <p><?php echo $sun_body; ?></p>
        <?php } else {?>
          <p>Our Breakfast Buffet starts at 10am and goes to 2pm so come grab some grub with a delicious Mimosa or Bloody Mary. We have omelets cooked to order and a variety of breakfast items including Vegan.</p>
        <?php } ?>

        <script>instafeed('greenpigbrunch');</script>

        <div class="row">
          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
              <!-- if user uploaded image -->
              <?php if(!empty($sun_gallery_image_1) ) { ?>
                <img id="greenpigbrunch0" src="<?php echo $sun_gallery_image_1['url'] ?>" alt="<?php echo $sun_gallery_image_1['alt'] ?>">
              <?php } else {?>
              <img id="greenpigbrunch0" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/bacon_300w.jpg" alt="Breakfast buffet - bacon.">
              <?php } ?>
            </div>
          </div>

          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
              <!-- if user uploaded image -->
              <?php if(!empty($sun_gallery_image_2) ) { ?>
                <img id="greenpigbrunch1" src="<?php echo $sun_gallery_image_2['url'] ?>" alt="<?php echo $sun_gallery_image_2['alt'] ?>">
              <?php } else {?>
              <img id="greenpigbrunch1" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/french_toast_300w.jpg" alt="Breakfast buffet - french toast.">
              <?php } ?>
            </div>
          </div>

          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
              <!-- if user uploaded image -->
              <?php if(!empty($sun_gallery_image_3) ) { ?>
                <img id="greenpigbrunch2" src="<?php echo $sun_gallery_image_3['url'] ?>" alt="<?php echo $sun_gallery_image_3['alt'] ?>">
              <?php } else {?>
              <img id="greenpigbrunch2" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/hashbrowns_300w.jpg" alt="Breakfast buffet - biscuits and hashbrowns.">
              <?php } ?>
            </div>
          </div>

          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
              <!-- if user uploaded image -->
              <?php if(!empty($sun_gallery_image_4) ) { ?>
                <img id="greenpigbrunch3" src="<?php echo $sun_gallery_image_4['url'] ?>" alt="<?php echo $sun_gallery_image_4['alt'] ?>">
              <?php } else {?>
              <img id="greenpigbrunch3" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/sweets_300w.jpg" alt="Breakfast buffet - fruits and muffins.">
              <?php } ?>
            </div>
          </div>

          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
              <!-- if user uploaded image -->
              <?php if(!empty($sun_gallery_image_5) ) { ?>
                <img id="greenpigbrunch4" src="<?php echo $sun_gallery_image_5['url'] ?>" alt="<?php echo $sun_gallery_image_5['alt'] ?>">
              <?php } else {?>
              <img id="greenpigbrunch4" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/omlets_300w.jpg" alt="Breakfast buffet - omlets.">
              <?php } ?>
            </div>
          </div>

          <div class="col col-sm-6 col-lg-4">
            <div class="gallery-item gallery-item-sm">
              <!-- if user uploaded image -->
              <?php if(!empty($sun_gallery_image_6) ) { ?>
                <img id="greenpigbrunch5" src="<?php echo $sun_gallery_image_6['url'] ?>" alt="<?php echo $sun_gallery_image_6['alt'] ?>">
              <?php } else {?>
              <img id="greenpigbrunch5" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/street_tacos_300w.jpg" alt="Breakfast buffet - carnitas street tacos.">
              <?php } ?>
            </div>
          </div>
        </div> <!-- row -->
      </div> <!-- container -->
    </section> <!-- sun section -->

  </div> <!-- sun -->

<?php
get_footer();
