<?php
/*
  Template Name: Contact Page
 */

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

        <h3>Contact Us</h3>

      </div>

      <div class="fade-in">

        <div class="divider"></div>

      </div>


      <div class="row">

        <div class="fade-right">

          <div class="col col-md-6">

            <div class="hours">

              <h4 style="padding-bottom: 0;">Our Hours</h4>

              <ul>
                <li><i class="fa fa-clock-o"></i> Mon-Sat 11:00a - 2:00a</li>
                <li><i class="fa fa-tv"></i> Sun 10:00a - 2:00a</li>
              </ul>

            </div>

            <div class="divider" style="padding-bottom: 0;"></div>

            <div class="events">

              <h4 style="padding-bottom: 0;">Daily Events</h4>

              <ul>
                <li>Monday - Open Blues Jam 10pm</li>
                <li>Tuesday - $2 Tuesday</li>
                <li>Wednesday - General Trivia 7pm</li>
                <li>Thrusday - Karaoke 9pm</li>
                <li>Friday - Live Music 10pm</li>
                <li>Saturday - Breakfast 11am - 2pm<br>DJ Latu 10pm</li>
                <li>Sunday - Brunch Buffet 10am - 2pm<br>Adult Trivia 7pm</li>
              </ul>

            </div> <!-- events -->

          </div> <!-- col -->

        </div>

        <div class="fade-left">

          <div class="col col-md-6 contact-form">
            <h3>Looking for answers?</h3>

            <!-- =========== SUB MENU ====================== -->

            <nav class="sub-menu">
              <div id="mobile-menu" class="overlay">
                <div class="overlay-content" style="top: 0; margin-top: 0;">
                  <a href="javascript:void(0)" class="closebtn" style="top: 0; margin-top: 0;" onclick="closeNav()">&times;</a>
                  <div class="container">
                    <li><button id="general-email-btn" class="sub-menu-btn form-btn"
                        onclick="closeNav()">General</button>
                    </li>
                    <li><button id="band-email-btn" class="sub-menu-btn form-btn" onclick="closeNav()">Band</button>
                    </li>
                    <li><button id="reservation-email-btn" class="sub-menu-btn form-btn"
                        onclick="closeNav()">Reservation</button></li>
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
                  <li><button id="general-email-btn" class="sub-menu-btn form-btn form-choice">General</button></li>
                  <li><button id="band-email-btn" class="sub-menu-btn form-btn">Band</button></li>
                  <li><button id="reservation-email-btn" class="sub-menu-btn form-btn">Reservation</button></li>
                </div>
              </ul>
            </nav>



            <!-- [wpforms id="484" title="false" description="false"] -->




            <div id="general-email" style="margin-top: 80px;">
              <form class="form" action="MAILTO:gppgeneral@gmail.com" method="post">

                <input type="text" id="name" placeholder="Your name">
                <input type="text" id="email" placeholder="Your email">
                <input type="text" id="subject" placeholder="The Subject">
                <textarea id="message" placeholder="Your Message" rows="7"></textarea>

                <div class="col">

                  <input type="submit" value="Send" class="button button-form">

                </div>

              </form>
            </div>

            <div id="band-email" style="margin-top: 80px;">
              <form class="form" action="MAILTO:gppband@gmail.com" method="post">

                <input type="text" id="name" placeholder="Your name">
                <input type="text" id="email" placeholder="Your email">
                <input type="text" id="subject" placeholder="The Subject">
                <textarea id="message" placeholder="Your Message" rows="7"></textarea>

                <div class="col">

                  <input type="button" value="Send" class="button button-form">

                </div>

              </form>
            </div>

            <div id="reservation-email" style="margin-top: 80px;">
              <form class="form" action="MAILTO:gppreservation@gmail.com" method="post">

                <input type="text" id="name" placeholder="Your name">
                <input type="text" id="email" placeholder="Your email">
                <input type="text" id="subject" placeholder="The Subject">
                <textarea id="message" placeholder="Your Message" rows="7"></textarea>

                <div class="col">

                  <input type="button" value="Send" class="button button-form">

                </div>

              </form>
            </div>

          </div> <!-- col -->

        </div> <!-- fade -->

      </div> <!-- row -->

    </div> <!-- container -->

  </section>

<?php
get_footer();
