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
 $starters_banner     = get_field('banner_starters_image');
 $specialties_button  = get_field('banner_specialties_button');
 $specialties_title   = get_field('banner_specialties_title');
 $specialties_banner  = get_field('banner_specialties_image');
 $sandwiches_button   = get_field('banner_sandwiches_button');
 $sandwiches_title    = get_field('banner_sandwiches_title');
 $sandwiches_banner   = get_field('banner_sandwiches_image');
 $burgers_button      = get_field('banner_burgers_button');
 $burgers_title       = get_field('banner_burgers_title');
 $burgers_banner      = get_field('banner_burgers_image');
 $bowls_button        = get_field('banner_bowls_button');
 $bowls_title         = get_field('banner_bowls_title');
 $bowls_banner        = get_field('banner_bowls_image');
 $daily_button        = get_field('banner_daily_button');
 $daily_title         = get_field('banner_daily_title');
 $daily_banner        = get_field('banner_daily_image');

get_header(); ?>

<!-- ======= HERO ========================== -->
<div class="fade-down">

  <!-- if user uploaded image -->
  <?php 
  if(!empty($hero_image) ) { 
?>
  <section class="hero hero-food" style="background: url(<?php echo $hero_image['url']; ?>) center center no-repeat;">
    <?php } else {?>
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
        <li><button id="menu-classic-btn" class="sub-menu-btn sub-menu-food-btn"
            onclick="closeNav()"><?php echo $classic_button;?></button>
        </li>
        <li><button id="menu-vegan-btn" class="sub-menu-btn sub-menu-food-btn"
            onclick="closeNav()"><?php echo $vegan_button;?></button>
        </li>
        <li><button id="menu-late-night-btn" class="sub-menu-btn sub-menu-food-btn"
            onclick="closeNav()"><?php echo $late_night_button;?></button></li>
        <li><button id="menu-breakfast-btn" class="sub-menu-btn sub-menu-food-btn"
            onclick="closeNav()"><?php echo $breakfast_button;?></button></li>
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
      <li><button id="menu-classic-btn" class="sub-menu-btn sub-menu-food-btn"><?php echo $classic_button;?></button>
      </li>
      <li><button id="menu-vegan-btn" class="sub-menu-btn sub-menu-food-btn"><?php echo $vegan_button;?></button></li>
      <li><button id="menu-late-night-btn"
          class="sub-menu-btn sub-menu-food-btn"><?php echo $late_night_button;?></button></li>
      <li><button id="menu-breakfast-btn"
          class="sub-menu-btn sub-menu-food-btn"><?php echo $breakfast_button;?></button></li>
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
      if(!empty($starters_banner) ) { 
    ?>
    <section id="starters" class="banner food-starters-banner sub-menu-banner-gap"
      style="background: url(<?php echo $starters_banner['url']; ?>) center center no-repeat;">
      <? } else {?>
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
      <div class="row menu-item">
        <div class="fade-up-2">
          <div class="col col-md-5">
            <h4 class="pig-favorite">Chile Verde Nachos*</h4>
            <p>House cut tortilla chips smothered in chile verde and melted cheddar jack cheese then topped with
              jalapeno,
              red onion, olives, tomato, green onion, salsa, sour cream and cilantro. Vegetarian option
              <em><strong>$8.99</strong></em>.</p>
          </div>

          <div class="col col-sm-1">
            <p><em><strong>$11.99</strong></em></p>
          </div>

          <div class="col col-md-5">
            <h4>House Wings*</h4>
            <p>Ten jumbo wings tossed with your choice of traditional Buffalo hot sauce, honey Sriracha sauce, house
              BBQ
              sauce, or blackened, served with carrots, celery and ranch or bleu cheese dressing. Half order
              <em><strong>$6.99</strong></em>.</p>
          </div>

          <div class="col col-md-1">
            <p><em><strong>$12.99</strong></em></p>
          </div>
        </div> <!-- fade -->
      </div> <!-- row -->

      <div class="row menu-item">
        <div class="fade-up-2">
          <div class="col col-md-5">
            <h4>Angus Beef Sliders*</h4>
            <p>3 Hand pressed 2 oz. Angus beef patties topped with caramelized onions, bacon bits, and chipotle aioli.
            </p>
          </div>

          <div class="col col-md-1">
            <p><em><strong>$8.99</strong></em></p>
          </div>

          <div class="col col-md-5">
            <h4 class="pig-favorite">The Green Pig Quesadilla</h4>
            <p>Grilled Chipotle tortilla stuffed with cheddar jack cheese, black beans, onion and tomato, finshed with
              roasted red pepper sauce and sour cream. Add chile verde or chicken for <em><strong>$3.00</strong></em>
              or
              marinated steak for <em><strong>$4.00</strong></em> more</p>
          </div>

          <div class="col col-md-1">
            <p><em><strong>$8.99</strong></em></p>
          </div>
        </div> <!-- fade -->
      </div> <!-- row -->

      <div class="row menu-item">
        <div class="fade-up-2">
          <div class="col col-md-5">
            <h4>The 31st East Avocado Rolls</h4>
            <p>House made eggrolls filled with chicken, bacon, black beans, avocado, tomato and cheddar jack cheese,
              served
              with jalapeno ranch or chipotle ranch.</p>
          </div>

          <div class="col col-md-1">
            <p><em><strong>$9.99</strong></em></p>
          </div>

          <div class="col col-md-5">
            <h4>Chicken Tender Basket</h4>
            <p>3 large battered chicken tenders, served with hand cut, house fries and your choice of dipping sauce:
              chipotle ranch, jalapeno ranch, house BBQ or buffalo.</p>
          </div>

          <div class="col col-md-1">
            <p><em><strong>$9.99</strong></em></p>
          </div>
        </div> <!-- fade -->
      </div> <!-- row -->

      <div class="row menu-item">
        <div class="fade-up-2">
          <div class="col col-md-5">
            <h4>Chicken Chicharrons*</h4>
            <p>Bites sized pieces of skin and moist thigh meat lightly dusted with rice flour &amp; chilito salt, deep
              fried, served with fresh lime wedges, chipotle ranch and roasted tomato salsa.</p>
          </div>

          <div class="col col-md-1">
            <p><em><strong>$8.99</strong></em></p>
          </div>

          <div class="col col-md-5">
            <h4>Shimp Basket</h4>
            <p>Jumbo butterflied shirimp, fried golden brown, house fries, cocktail sauce, fry sauce and a lemon
              wedge.</p>
          </div>

          <div class="col col-md-1">
            <p><em><strong>$10.99</strong></em></p>
          </div>
        </div> <!-- fade -->
      </div> <!-- row -->

      <div class="row menu-item">

        <div class="fade-up-2">

          <div class="col col-md-5">

            <h4>House Fries*</h4>
            <p>Fresh Idaho potatoes, hand cut, double fried and tossed in house seasoning, served with Utah Fry Sauce.
              Add
              cheese and bacon crumbles <em><strong>$3.00</strong></em></p>

          </div>

          <div class="col col-md-1">

            <p><em><strong>$5.99</strong></em></p>

          </div>

          <div class="col col-md-5">

            <h4>Bavarian Pretzel &amp; Beer Cheese</h4>
            <p>2 soft pretzels served hot with Fat Tire Ale Beer Cheese and whole grain mustard.</p>

          </div>

          <div class="col col-md-1">

            <p><em><strong>$4.99</strong></em></p>

          </div>

        </div>

      </div> <!-- row -->

      <div class="row menu-item">

        <div class="fade-up-2">

          <div class="col col-md-5 last-item">

            <h4>Chips &amp; Salsa*</h4>
            <p>House cut tortilla chips served with salsa fresca. Add Guacamole <em><strong>3.50</strong></em></p>

          </div>

          <div class="col col-md-1">

            <p><em><strong>$4.99</strong></em></p>

          </div>

        </div>

      </div> <!-- row -->

    </div> <!-- container -->

  </section> <!-- starters -->


  <!-- =========== SPECIALTIES BANNER ====================== -->

  <div class="fade-up">
    <!-- if user uploaded image -->
    <?php 
      if(!empty($specialties_banner) ) { 
    ?>
      <section id="specialties" class="banner food-specialties-banner"
      style="background: url(<?php echo $specialties_banner['url']; ?>) center center no-repeat;">
      <? } else {?>
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

      <div class="row menu-item">

        <div class="fade-up-2">

          <div class="col col-md-5">

            <h4 class="pig-favorite">Blackend Salmon Tacos*</h4>
            <p>Blackend salmon served in 3 warm flour tortillas, topped with chipotle aioli, coleslaw, green and red
              onion,
              tomato, queso fresco and cilantro, served with fresh lime wedges and blackberry jalapeno sauce.</p>

          </div>

          <div class="col col-md-1">

            <p><em><strong>$12.99</strong></em></p>

          </div>

          <div class="col col-md-5">

            <h4>Carne Asada Tacos*</h4>
            <p>Tender, thinly sliced, marinated steak served in 3 corn tortillas topped with cabbage, green and red
              onion,
              tomato and queso fresco with sour cream and salsa on the side.</p>

          </div>

          <div class="col col-md-1">

            <p><em><strong>$12.99</strong></em></p>

          </div>

        </div>

      </div> <!-- row -->

      <div class="row menu-item">

        <div class="fade-up-2">

          <div class="col col-md-5">

            <h4>Carnitas Street Tacos</h4>
            <p>Marinated shredded pork served in 3 tortillas topped with diced onion, cilantro, avocado and lime crema
              served with chips and salsa &amp; traditional salsa verde on the side.</p>

          </div>

          <div class="col col-md-1">

            <p><em><strong>$10.99</strong></em></p>

          </div>

          <div class="col col-md-5">

            <h4 class="pig-favorite">Fish Tacos</h4>
            <p>Cod hand battered in Pig pilsner beer batter, fried and served in 3 flour tortillas, served with
              chipotle
              aioli, coleslaw, green and red onion, tomato, queso fresco and cilantro with blackberry jalapeno sauce
              on the
              side.</p>

          </div>

          <div class="col col-md-1">

            <p><em><strong>$12.99</strong></em></p>

          </div>

        </div>

      </div> <!-- row -->

      <div class="row menu-item">

        <div class="fade-up-2">

          <div class="col col-md-5 last-item">

            <h4 class="pig-favorite">Fish &amp; Chips</h4>
            <p>Cod hand battered in Pig pilsner beer batter, fried and served with hand cut, house fries, tartar
              sauce, malt
              vinegar and lemon wedges.</p>

          </div>

          <div class="col col-md-1">

            <p><em><strong>$13.99</strong></em></p>

          </div>

        </div>

      </div> <!-- row -->

    </div> <!-- container -->

  </section> <!-- specialties -->


  <!-- =========== SANDWICHES BANNER ====================== -->

  <div class="fade-up">

    <section id="sandwiches" class="banner food-sandwiches-banner">

      <div class="banner-container">

        <h3>Sandwiches</h3>

      </div>

    </section>

  </div>



  <!-- =========== SANDWICHES SECT ====================== -->

  <section class="food-sandwiches-section">

    <div class="container">

      <div class="fade-up">

        <p class="additions">All sandwiches are served with your choice of house fries, soup de jour, green salad or
          pasta
          salad.</p>

      </div>

      <div class="row menu-item">

        <div class="fade-up-2">

          <div class="col col-md-5">

            <h4 class="pig-favorite">Cubano*</h4>
            <p>Marinated shredded pork with grilled ham, Swiss cheese and pickles, with roasted garlic mayo on a
              toasted
              baguette.</p>

          </div>

          <div class="col col-md-1">

            <p><em><strong>$11.99</strong></em></p>

          </div>

          <div class="col col-md-5">

            <h4 class="pig-favorite">Pig-A-Delphia Cheese Steak*</h4>
            <p>Thinly sliced top round saut&eacute;ed with Anaheim peppers and onions topped with melted pepper jack
              cheese
              and piled high on a toasted ambassador roll served with a side of jalapeno ranch.</p>

          </div>

          <div class="col col-md-1">

            <p><em><strong>$11.99</strong></em></p>

          </div>

        </div>

      </div> <!-- row -->

      <div class="row menu-item">

        <div class="fade-up-2">

          <div class="col col-md-5">

            <h4 class="pig-favorite">Angus Corned Beef Reuben*</h4>
            <p>Melt in your mouth, house sliced corned beef, sauerkraut, Swiss cheese piled high with 1000 island
              dressing
              on toasted marbled rye.</p>

          </div>

          <div class="col col-md-1">

            <p><em><strong>$12.99</strong></em></p>

          </div>

          <div class="col col-md-5">

            <h4>BBQ Pulled Pork*</h4>
            <p>Marinated shredded pork smothered in BBQ sauce, topped with coleslaw and a pickle spear on a toasted
              ambassador roll.</p>

          </div>

          <div class="col col-md-1">

            <p><em><strong>$11.99</strong></em></p>

          </div>

        </div>

      </div> <!-- row -->

      <div class="row menu-item">

        <div class="fade-up-2">

          <div class="col col-md-5">

            <h4>Salmon Sandwich</h4>
            <p>Grilled Atlantic salmon patty, tomato basil aioli, dressed arugula, tomato, onion, on a grilled brioche
              bun.</p>

          </div>

          <div class="col col-md-1">

            <p><em><strong>$12.99</strong></em></p>

          </div>

          <div class="col col-md-5">

            <h4>Chicken Parmesan Sandwich</h4>
            <p>Chicken breast cutlet dredged in seasoned parmesan panko breading, pan fried, topped with homemade
              marinara, melted fresh mozzarella, dressed arugula and garlic aioli, served on a grilled ciabatta bun.
            </p>

          </div>

          <div class="col col-md-1">

            <p><em><strong>$11.99</strong></em></p>

          </div>

        </div>

      </div> <!-- row -->

    </div> <!-- container -->

  </section> <!-- sandwiches -->


  <!-- =========== BURGERS BANNER ====================== -->

  <div class="fade-up">

    <section id="burgers" class="banner food-burgers-banner">

      <div class="banner-container">

        <h3>Burgers</h3>

      </div>

    </section>

  </div>


  <!-- =========== BURGERS SECT ====================== -->

  <section class="food-burgers-section">

    <div class="container">

      <div class="fade-up-2">

        <p class="additions">
          <strong>Additions</strong><em>
            <br>
            <strong>1.00</strong> </em>| cheddar, provolone, pepper jack, Swiss, mushrooms, jalapenos
          <br>
          <em><strong>2.00</strong></em> | avocado, blue cheese, white cheddar, green chillies, fried egg
          <br>
          <em><strong>3.00</strong> </em>| Applewood smoked bacon, Cajun bacon
        </p>

      </div>

      <div class="row menu-item">

        <div class="fade-up-2">

          <div class="col col-md-5">

            <h4>House Burger*</h4>
            <p>Hand pressed 6 oz. ground Angus beef topped with lettuce, tomato, red onion and pickle served with 1000
              island dressing on a toasted challah bun.</p>

          </div>

          <div class="col col-md-1">

            <p><em><strong>$8.99</strong></em></p>

          </div>

          <div class="col col-md-5">

            <h4 class="pig-favorite">Denver Burger*</h4>
            <p>Hand pressed 6oz. ground Angus beef topped with caramelized onions, jalapeno cream cheese, Applewood
              smoked
              bacon served on a toasted ciabatta bun.</p>

          </div>

          <div class="col col-md-1">

            <p><em><strong>$12.99</strong></em></p>

          </div>

        </div>

      </div> <!-- row -->

      <div class="row menu-item">

        <div class="fade-up-2">

          <div class="col col-md-5">

            <h4>Jim Beam Bourbon Burger</h4>
            <p>Hand pressed 6 oz. ground Angus beef patty topped with bourbon & agave caramelized onions, white
              cheddar and garlic aioli served on a grilled brioche bun.</p>

          </div>

          <div class="col col-md-1">

            <p><em><strong>$14.99</strong></em></p>

          </div>

          <div class="col col-md-5">

            <h4 class="pig-favorite">The Angus Burger*</h4>
            <p>Hand pressed 8oz. ground, 100% grass fed Angus beef topped with Swiss cheese, white cheddar, lettuce,
              tomato,
              Vidalia onion and sweet ionion aioli served on a toasted ciabatta bun.</p>

          </div>

          <div class="col col-md-1">

            <p><em><strong>$13.99</strong></em></p>

          </div>

        </div>

      </div> <!-- row -->

      <div class="row menu-item">

        <div class="fade-up-2">

          <div class="col col-md-5">

            <h4>Magnolia Burger*</h4>
            <p>Hand pressed 6oz. ground Angus beef blackened and topped with Applewood smoked bleu cheese crumbles,
              Cajun
              bacon, lettuce, tomato, onion and chipotle aioli served on a toasted ciabatta bun.</p>

          </div>

          <div class="col col-md-1">

            <p><em><strong>$12.99</strong></em></p>

          </div>

          <div class="col col-md-5">

            <h4>Diner Double Cheese</h4>
            <p>Classic Double meat, double cheese, lettuce, tomato, onion, pickle, piled high on a grilled brioche
              bun.</p>

          </div>

          <div class="col col-md-1">

            <p><em><strong>$12.99</strong></em></p>

          </div>

        </div>

      </div> <!-- row -->

    </div> <!-- container -->

  </section> <!-- burgers -->


  <!-- =========== GREENS BANNER ====================== -->

  <div class="fade-up">

    <section id="greens" class="banner food-greens-banner">

      <div class="banner-container">

        <h3>Bowls and Greens</h3>

      </div>

    </section>

  </div>


  <!-- =========== GREENS SECT ====================== -->

  <section class="food-greens-section">

    <div class="container">

      <div class="fade-up-2">

        <p class="additions">
          <strong>Add protein to any salad</strong>
          <br>
          3.00 | Chicken
          <br>
          4.00 | Salmon
          <br>
          5.00 | Top Sirloin Coulotte
          <br>
          <strong>Dressings</strong> | balsamic vinaigrette, ranch, bleu cheese, Caesar, tequila lime or house
          vinaigrette
        </p>

      </div>

      <div class="row menu-item">

        <div class="fade-up-2">

          <div class="col col-md-5">

            <h4 class="pig-favorite">Salmon Salad</h4>
            <p>Fresh mixed greens topped with seared Atlantic salmon, oven roasted, marinated tomatoes, cucumber
              salad, red
              onion and radish sprouts, drizzled with olive oil and rasberry red wine vinegar.</p>

          </div>

          <div class="col col-md-1">

            <p><em><strong>$14.99</strong></em></p>

          </div>

          <div class="col col-md-5">

            <h4>Southwestern Cobb Salad</h4>
            <p>Fresh spinach tossed in tequila lime vinaigrette, topped with Applewood smoked bacon, sweet corn, black
              beans, red onion, heirloom cherry tomatoes, Applewood smoked bleu cheese, tortilla strips, hard boiled
              egg and
              sliced avocado.</p>

          </div>

          <div class="col col-md-1">

            <p><em><strong>$13.99</strong></em></p>

          </div>

        </div>

      </div> <!-- row -->

      <div class="row menu-item">

        <div class="fade-up-2">

          <div class="col col-md-5">

            <h4>Steak &amp; Arugula Salad</h4>
            <p>Fresh arugula topped with Top Sirloin Coulotte steak, heirloom cherry tomatoes, julienne red onion and
              pecorino cheese.</p>

          </div>

          <div class="col col-md-1">

            <p><em><strong>$14.99</strong></em></p>

          </div>

          <div class="col col-md-5">

            <h4>Smoked Buffalo Chicken Salad</h4>
            <p>Buttermilk marinated chicken breast, fried &amp; tossed in Buffalo sauce, on fresh romaine with
              Applewood
              smoked bacon, herloom cherry tomatoes, julienne red onion and Applewood smoked bleu cheese crumbles with
              Bleu
              Cheese dressing.</p>

          </div>

          <div class="col col-md-1">

            <p><em><strong>$9.99</strong></em></p>

          </div>

        </div>

      </div> <!-- row -->

      <div class="row menu-item">

        <div class="fade-up-2">

          <div class="col col-md-5">

            <h4>Classic Caesar Salad</h4>
            <p>Fresh romaine, house made croutons, shaved Parmesan and creamy Caesar dressing. Add chicken for
              <em><strong>$3.00</strong></em>
              or salmon for <em><strong>$6.00</strong></em> more</p>

          </div>

          <div class="col col-md-1">

            <p><em><strong>$9.99</strong></em></p>

          </div>

          <div class="col col-md-5">

            <h4>Dinner Salad</h4>
            <p>Fresh mesclun mixed greens, tomato wedge, julienne red onions, English cucumbers and house made
              croutons.</p>

          </div>

          <div class="col col-md-1">

            <p><em><strong>$9.99</strong></em></p>

          </div>

        </div>

      </div> <!-- row -->

      <div class="row menu-item">

        <div class="fade-up-2">

          <div class="col col-md-5 last-item">

            <h4>Soup of The Day</h4>
            <p>Soup prepared from scratch daily. Ask server for details.</p>

            <div class="row">

              <div class="col col-md-6">

                <p><em><strong>Cup</strong></em></p>

              </div>

              <div class="col col-md-6">

                <p><em><strong>$4.99</strong></em></p>

              </div>

              <div class="col col-md-6">

                <p><em><strong>Bowl</strong></em></p>

              </div>

              <div class="col col-md-6">

                <p><em><strong>$5.99</strong></em></p>

              </div>

            </div>

          </div>

        </div>

      </div> <!-- row -->

    </div> <!-- container -->

  </section> <!-- bowls n greens -->


  <!-- =========== GREENS BANNER ====================== -->

  <div class="fade-up">

    <section id="specials" class="banner food-greens-banner">

      <div class="banner-container">

        <h3>Daily Specials</h3>

      </div>

    </section>

  </div>

  <!-- =========== GREENS SECT ====================== -->

  <section class="daily-specials-section" style="margin-bottom: 60px;">
    <div class="container">

      <p class="additions">
        <strong>Specials change daily. Ask server for details.</strong>
      </p>
    </div>

    <div class="fade-in">
      <div class="divider" style="margin-top: 0px;"></div>
    </div>
    <div class="row">
      <div class="fade-up-2">
        <div class="col col-md-5 last-item">
          <p>Lunch Special M-F until 4:30 pm</p>

          <div class="row">
            <div class="col col-md-6">
              <p><em><strong>Lunch</strong></em></p>
            </div>

            <div class="col col-md-6" style="text-align: right;">
              <p><em><strong>$5.99</strong></em></p>
            </div>
          </div> <!-- row -->

          <p>Everyday is all day everyday</p>

          <div class="row">
            <div class="col col-md-6">
              <p><em><strong>$8.50</strong></em></p>
            </div>

            <div class="col col-md-6" style="text-align: right;">
              <p><em><strong>$10.00</strong></em></p>
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
  <section class="banner food-vegan-banner sub-menu-banner-gap">
    <div class="banner-container">
      <h3>Vegan</h3>
    </div>
  </section>

  <!-- =========== VEGAN SECT ====================== -->
  <section class="food-vegan-section">
    <div class="container">
      <div class="row menu-item">
        <div class="col col-md-5">
          <h4>Vegan Tiger Wings</h4>
          <p>A dozen vegan wings tossed in your choice of traditional Buffalo hot sauce, honey Sriracha sauce or house
            BBQ
            sauce, served with carrots, celery and vegan ranch or vegan bleu cheese dressing.</p>
        </div>

        <div class="col col-sm-1">
          <p><em><strong>$12.99</strong></em></p>
        </div>

        <div class="col col-md-5">
          <h4>Vegan Tacos</h4>
          <p>Saut&eacute;ed peppers and onions, black beans and sweet corn served in 3 corn tortillas topped with
            cabbage,
            green onions and tomato served with lime and salsa fresca.</p>
        </div>

        <div class="col col-md-1">
          <p><em><strong>$9.99</strong></em></p>
        </div>
      </div> <!-- row -->

      <div class="row menu-item">
        <div class="col col-md-5">
          <h4>Black Bean Burger</h4>
          <p>House made spicy black bean burger with lettuce, tomato, red onion and vegan chipotle aioli served on a
            toasted challah bun.</p>
        </div>

        <div class="col col-md-1">
          <p><em><strong>$9.99</strong></em></p>
        </div>

        <div class="col col-md-5">
          <h4>The Impossible Burger</h4>
          <p>Impossible patty, chao cheese, saut&#0233;ed onions, gegan mayo, spring mix, on a toasted ciabatta bun.
          </p>
        </div>

        <div class="col col-md-1">
          <p><em><strong>$13.99</strong></em></p>
        </div>
      </div> <!-- row -->

      <div class="row menu-item">
        <div class="col col-md-5">
          <h4>Angry Vegan Chick'n Sandwich</h4>
          <p>Vegan chick'n, saut&eacute;ed onion &amp; jalapenos, chao coconut cheese, Cajun vegan bacon, lettuce and
            tomato with vegan chipotle aioli on an ambassador roll.</p>
        </div>

        <div class="col col-md-1">
          <p><em><strong>$12.99</strong></em></p>
        </div>

        <div class="col col-md-5">
          <h4>Sweet Tiger Tacos</h4>
          <p>Tiger wings tossed in our traditional salsa verde served in 3 corn tortillas topped with shredded romaine
            lettuce, guacamole and vegan sour cream with salsa fresca.</p>
        </div>

        <div class="col col-md-1">
          <p><em><strong>$10.99</strong></em></p>
        </div>
      </div> <!-- row -->

      <div class="row menu-item">

        <div class="col col-md-5">

          <h4>Buffalo Tiger Wrap</h4>
          <p>Tiger wings tossed in buffalo sauce, wrapped in a warm spinach tortilla with fresh mixed mesclun greens,
            tomatoes, English cucumbers and served with a side of Vegan ranch dressing.</p>

        </div>

        <div class="col col-md-1">

          <p><em><strong>$10.99</strong></em></p>

        </div>

        <div class="col col-md-5">

          <h4>Vegan Avocado Rolls</h4>
          <p>Hand made eggrolls with chick'n, vegan bacon bits, black beans, avocado, vegan mozzarella and tomato,
            served
            with vegan ranch and agave blackberry jalapeno sauce.</p>

        </div>

        <div class="col col-md-1">

          <p><em><strong>$9.99</strong></em></p>

        </div>

      </div> <!-- row -->

    </div> <!-- container -->

  </section> <!-- vegan -->

</div> <!-- menu-vegan -->



<!-- =========== LATE NIGHT MENU ====================== -->

<div id="menu-late-night">


  <!-- =========== LATE NIGHT BANNER ====================== -->

  <section class="banner food-late-banner sub-menu-banner-gap">

    <div class="banner-container">

      <h3>Late Night</h3>

    </div>

  </section>


  <!-- =========== LATE NIGHT SECT ====================== -->

  <section class="food-late-section">

    <div class="container">

      <p class="additions">Late Night Menu starts at 10:00p and kitchen closes at 12:00a.</p>

      <div class="row menu-item">

        <div class="col col-md-5">

          <h4 class="pig-favorite">Chile Verde Nachos*</h4>
          <p>House cut tortilla chips smothered in chile verde and melted cheddar jack cheese then topped with
            jalapeno,
            red onion, olives, tomato, green onion, salsa, sour cream and cilantro.</p>

        </div>

        <div class="col col-sm-1">

          <p><em><strong>$11.99</strong></em></p>

        </div>

        <div class="col col-md-5">

          <h4>House Wings*</h4>
          <p>A dozen jumbo wings tossed with your choice of traditional Buffalo hot sauce, honey Sriracha sauce, house
            BBQ
            sauce, or blackened, served with carrots, celery and ranch or bleu cheese dressing.</p>

        </div>

        <div class="col col-md-1">

          <p><em><strong>$12.99</strong></em></p>

        </div>

      </div> <!-- row -->

      <div class="row menu-item">

        <div class="col col-md-5">

          <h4>Angus Beef Sliders*</h4>
          <p>3 Hand pressed 2 oz. Angus beef patties topped with caramelized onions, bacon bits, and chipotle aioli.
          </p>

        </div>

        <div class="col col-md-1">

          <p><em><strong>$8.99</strong></em></p>

        </div>

        <div class="col col-md-5">

          <h4 class="pig-favorite">The Green Pig Quesadilla</h4>
          <p>Grilled Chipotle tortilla stuffed with cheddar jack cheese, black beans, onion and tomato, finshed with
            roasted red pepper sauce and sour cream. Add chile verde or chicken for <em><strong>$3.00</strong></em> or
            marinated steak for <em><strong>$4.00</strong></em> more</p>

        </div>

        <div class="col col-md-1">

          <p><em><strong>$8.99</strong></em></p>

        </div>

      </div> <!-- row -->

      <div class="row menu-item">

        <div class="col col-md-5">

          <h4>Chicken Tender Basket</h4>
          <p>3 large battered chicken tenders, served with hand cut, house fries and your choice of dipping sauce:
            chipotle
            ranch, jalapeno ranch, house BBQ or buffalo.</p>

        </div>

        <div class="col col-md-1">

          <p><em><strong>$9.99</strong></em></p>

        </div>

        <div class="col col-md-5">

          <h4>The 31st East Avocado Rolls</h4>
          <p>House made eggrolls filled with chicken, bacon, black beans, avocado, tomato and cheddar jack cheese,
            served
            with jalapeno ranch or chipotle ranch.</p>

        </div>

        <div class="col col-md-1">

          <p><em><strong>$9.99</strong></em></p>

        </div>

      </div> <!-- row -->

      <div class="row menu-item">

        <div class="col col-md-5">

          <h4>Vegan Avocado Rolls</h4>
          <p>Hand made eggrolls with chick'n, vegan bacon bits, black beans, avocado, vegan mozzarella and tomato,
            served
            with vegan ranch and agave blackberry jalapeno sauce.</p>

        </div>

        <div class="col col-md-1">

          <p><em><strong>$9.99</strong></em></p>

        </div>

        <div class="col col-md-5">

          <h4>Vegan Tiger Wings</h4>
          <p>A dozen vegan wings tossed in your choice of traditional Buffalo hot sauce, honey Sriracha sauce or house
            BBQ
            sauce, served with carrots, celery and vegan ranch or vegan bleu cheese dressing.</p>

        </div>

        <div class="col col-md-1">

          <p><em><strong>$12.99</strong></em></p>

        </div>

      </div> <!-- row -->

      <div class="row menu-item">

        <div class="col col-md-5">

          <h4>Dinner Salad</h4>
          <p>Fresh mesclun mixed greens, tomato wedge, julienne red onions, English cucumbers and house made croutons.
          </p>

        </div>

        <div class="col col-md-1">

          <p><em><strong>$9.99</strong></em></p>

        </div>

        <div class="col col-md-5">

          <h4>House Fries*</h4>
          <p>Fresh Idaho potatoes, hand cut, double fried and tossed in house seasoning, served with Utah Fry Sauce.
            Add
            cheese and bacon crumbles <em><strong>$3.00</strong></em></p>

        </div>

        <div class="col col-md-1">

          <p><em><strong>$5.99</strong></em></p>

        </div>

      </div> <!-- row -->

      <div class="row menu-item">

        <div class="col col-md-5">

          <h4>Bavarian Pretzel &amp; Beer Cheese</h4>
          <p>2 soft pretzels served hot with Fat Tire Ale Beer Cheese and whole grain mustard.</p>

        </div>

        <div class="col col-md-1">

          <p><em><strong>$4.99</strong></em></p>

        </div>

        <div class="col col-md-5">

          <h4>Chips &amp; Salsa*</h4>
          <p>House cut tortilla chips served with salsa fresca. Add Guacamole <em><strong>3.50</strong></em></p>

        </div>

        <div class="col col-md-1">

          <p><em><strong>$4.99</strong></em></p>

        </div>

      </div> <!-- row -->

    </div> <!-- container -->

  </section> <!-- late night -->

</div> <!-- menu-late -->



<!-- =========== BREAKFAST MENU ====================== -->
<div id="menu-breakfast">

  <!-- =========== BREAKFAST BANNER ====================== -->
  <section class="banner food-breakfast-banner sub-menu-banner-gap">
    <div class="banner-container">
      <h3>Saturday Breakfast</h3>
    </div>
  </section>

  <!-- =========== BREAKFAST SECT ====================== -->
  <section class="food-breakfast-section">
    <div class="container">

      <p class="additions">Breakfast is served every Saturday between 11:00a - 2:00p.</p>
      <p class="additions">We got $3 Bloody Mary's & Mimosa's.</p>

      <div class="row menu-item">

        <div class="col col-md-5">

          <h4>Green Pig Breakfast</h4>
          <p>2 eggs cooked to order, sausage, bacon, hash browns and fresh fruit.</p>

        </div>

        <div class="col col-md-1">

          <p><em><strong>$8.50</strong></em></p>

        </div>

        <div class="col col-md-5">

          <h4>Breakfast Burrito</h4>
          <p>Scrambled eggs, sausage, bacon, potatoes, peppers &amp; cheese in a flour tortilla served with fruit.</p>

        </div>

        <div class="col col-md-1">

          <p><em><strong>$8.50</strong></em></p>

        </div>

      </div> <!-- row -->

      <div class="row menu-item">

        <div class="col col-md-5">

          <h4>French Toast</h4>
          <p>French toast with your choice of sausage or bacon served with fresh fruit.</p>

        </div>

        <div class="col col-md-1">

          <p><em><strong>$8.50</strong></em></p>

        </div>

        <div class="col col-md-5">

          <h4>Mac Pig Sandwich</h4>
          <p>Egg, cheese &amp; your choice of ham, bacon, sausage or corned beef served with hash browns and fresh
            fruit.</p>

        </div>

        <div class="col col-md-1">

          <p><em><strong>$7.50</strong></em></p>

        </div>

      </div> <!-- row -->

      <div class="row menu-item">

        <div class="col col-md-5 last-item">

          <h4>Huevos Rancheros</h4>
          <p>3 fried eggs with black beans, ranchero salsa on corn tortillas with avocado &amp; queso fresco.</p>

        </div>

        <div class="col col-md-1">

          <p><em><strong>$8.50</strong></em></p>

        </div>

      </div> <!-- row -->

    </div> <!-- container -->

  </section> <!-- breakfast -->

  <!-- =========== SUNDAY - BREAKFAST BUFFET BANNER ====================== -->
  <section class="banner events-sun-banner sub-menu-banner-gap">
    <div class="banner-container">
      <h3>Sunday Brunch Buffet</h3>
    </div>
  </section>

  <!-- =========== BREAKFAST SECT ====================== -->
  <section class="food-breakfast-section">
    <div class="container">
      <p class="additions">Brunch is served every Sunday between 10:00a - 2:00p.</p>
      <p class="additions">We got $3 Bloody Mary's & Mimosa's.</p>

      <div class="fade-in">
        <div class="divider"></div>
      </div>

      <div class="fade-in">
        <p>All you can eat brunch buffet only $12. With a variety of breakfast items you won't be disappointed.
          Everything is made fresh each Sunday morning including omlets which are cooked to order. We also have maple
          bacon, french toast, fresh fruit and much more,
          including an assortment of vegan friendly options. Don't miss out this Sunday and come enjoy your last day
          before back
          to the&nbsp;grind.</p>
      </div>
    </div> <!-- container -->
  </section> <!-- breakfast -->
</div> <!-- menu-breakfast -->

<?php
get_footer();