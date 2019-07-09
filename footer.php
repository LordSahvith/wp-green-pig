<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Green_Pig_Pub
 */

?>


<?php wp_footer(); ?>

<!-- ======= FOOTER ========================== -->
<div class="fade-up">
  <footer>
    <div class="container">
      <div class="row">
        <div class="col col-md-4">
          <h4>Hours</h4>
          <ul class="hours">
            <li><i class="fa fa-clock-o"></i> Mon-Sat 11:00a - 2:00a</li>
            <li><i class="fa fa-tv"></i> Sun 10:00a - 2:00a</li>
            <li><i class="fa fa-phone"></i> Phone : <a href="tel:801-532-7441">(801)532-7441</a></li>
            <li><i class="fa fa-address-book"></i> <a target="_blank"
                href="https://www.google.com/maps/place/The+Green+Pig+Pub/@40.7609285,-111.8920536,17z/data=!3m1!4b1!4m5!3m4!1s0x8752f51053a20201:0x854e30471263b928!8m2!3d40.7609285!4d-111.8898649">31
                East 400 South,<br>Salt Lake City, UT</a></li>
          </ul>
        </div>

        <div class="col col-md-4">
          <h4>Follow Us</h4>
          <div class="row social">
            <div class="col col-xs-4">
              <a class="social-badge facebook" href=""><i class="fab fa-facebook-f"></i></a>
            </div> <!-- col -->

            <div class="col col-xs-4">
              <a class="social-badge instagram" href=""><i class="fab fa-instagram"></i></a>
            </div> <!-- col -->

            <div class="col col-xs-4">
              <a class="social-badge twitter" href=""><i class="fab fa-twitter"></i></a>
            </div> <!-- col -->
          </div> <!-- row -->
        </div> <!-- col -->

        <div class="col col-md-4">
          <h4>Location</h4>
          <div id="map-footer"></div>
        </div>
      </div> <!-- row -->

      <div class="copyright">
        <p>Site Creator: <a href="http://www.calebmckays.com" target="_blank">Caleb Anderson</a></p>
        <p>&copy; <span id="year"></span> - The Green Pig Pub</p>
      </div>
    </div> <!-- container -->
  </footer>
</div>

<!-- ======= JAVASCRIPT ========================== -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4eaFIZjEFVyTS2IqNtCbIL4960EfhByw&callback=initMap">
</script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/mobile_nav.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/sub-nav.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/scrolling_nav.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/map-footer.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/fade_on_scroll.js"></script>

</body>

</html>