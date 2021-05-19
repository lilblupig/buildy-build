<!DOCTYPE html>

<html lang="en">

  <!-- Get head info from universal page -->
  <?php
    include "estimator.php";
    include "head.php";
  ?>

  <body>
    <!-- Get nav from universal page -->
    <?php
      include "nav.php";
    ?>

    <!-- Splash image & tagline -->
    <div class="container-fluid hero-container">
      <div class="row">
        <div class="hero-overlay">&nbsp</div>
        <div class="col-12 hero-text">
          <h1>Buildy Build</h1>
          <p>Need something building?  We can build it.</p>
        </div>
      </div>
    </div>

    <!-- About the company -->
    <div id="about-section" class="container py-4 scroll-top">
      <h1>About Buildy Build</h1>
      <p class="lead">We are a no nonsense building company, you tell us what you want, we tell you how much it will cost, and how long it will take.  Simple!</p>
      <p>We undertake all aspects of general building work, including, but not limited to:</p>
      <ul>
        <li>Groundworks</li>
        <li>Footings</li>
        <li>Block/brickwork</li>
        <li>Windows</li>
        <li>Doors</li>
        <li>Roofs</li>
        <li>Chimneys</li>
      </ul>
      <p>Use our simple, easy calculator to get an idea of what we think your job will cost, and how long it will take.  Prices include all materials and labour, and we are industry accredited and fully insured for your peace of mind.</p>
      <hr>
    </div>

    <!-- Estimator data entry area -->
    <div id="estimator" class="container pb-4 scroll-top">
      <h1>Buildy Build Estimator</h1>
      <p>Things Buildy Build can build for you, just enter your requirements below, and get an instant estimate of time and cost!</p>
      <form action="index.php" method="post">
        <div class="pb-2">
          <input name="bricks" type="number" placeholder="0" required />
          <label for="bricks">Bricks</label>
        </div>
        <div class="pb-2">
          <input name="doors" type="number" placeholder="0" required />
          <label for="doors">Doors</label>
        </div>
        <div class="pb-2">
          <input name="windows" type="number" placeholder="0" required />
          <label for="windows">Windows</label>
        </div>
        <input type="submit" value="Get Estimate!" />
      </form>
    </div>

    <!-- Estimator results area - table called when form posted above -->
    <div class="container py-4">
      <h2>Specification received:</h2>

        <!-- Open PHP -->
        <?php
          // Test to see if form submitted yet
          if (!empty($_POST["bricks"])) {
            // If form submitted (field not empty), build a table with the results
            build_table($things, num_wanted());
          } else {
            // If form not submitted (field empty), tell the user to input data
            echo "
            <hr>
            <p class=\"lead text-center\">Enter your requirements above for an estimate to appear here.</lead>
            ";
          };
        ?>

      <hr>
    </div>

    <!-- Testimonials and reviews -->
    <div id="testimonials" class="container py-4 text-center scroll-top">
      <h1>Buildy Build Reviews</h1>
      <p>"Buildy Build are great! We knew exactly what we had to pay, and how long it would take for the devastation to end."</p>
      <i class="fas fa-check tick-icon"></i>
      <p>"Buildy Build built some things for us, and we love them!".</p>
      <i class="fas fa-check tick-icon"></i>
      <p>"Buildy Build built most of our house, and what wasn't on the estimator they quoted and completed especially for us, on time and in budget."</p>
    </div>

    <!-- Get footer from universal page -->
    <?php
      include "footer.php";
    ?>

  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.1/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta2/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
