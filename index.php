<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Espinoza Brothers Construction LLC</title>

  <link rel="icon" href="images/">

  <link rel="stylesheet" href="css/index.css">


  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

  <script>
    $(document).ready(function() {

      var currentPage = '';

      $(".navButton").on("click", function() {

        toggleInitialMenu();

        //console.log($(this).text());

        if ($(this).text() != currentPage) {

          currentPage = $(this).text();

          console.log(currentPage);

        }

        if (window.innerWidth <= 700 && $("#burger").css('visibility').toLowerCase() != 'visible') {

          $("#burger").css('visibility', 'visible');

        }

      });

      $(window).resize(function() {
        //console.log($(".navigationButtonHolder").hasClass("navigationButtonHolderChange"));
        if ($(".navigationButtonHolder").hasClass("navigationButtonHolderChange") == true && window.innerWidth <= 700 && $("#burger").css('visibility').toLowerCase() != 'visible') {

          $("#burger").css('visibility', 'visible');

        } else if ($(".navigationButtonHolder").hasClass("navigationButtonHolderChange") == true && window.innerWidth > 700 && $("#burger").css('visibility').toLowerCase() == 'visible') {

          $("#burger").css('visibility', 'hidden');

        }

      });

    });
  </script>

</head>

<body>

  <div class="navigationMenu" id="navigationMenu">
    <img src="images/EspoConstruction-Logo.png" alt="" class="navImage" id="navImage">

    <div class="navigationButtonHolder" id="navigationButtonHolder">

      <div>
        <h3 class="navButton">Our Services</h3>
        <h3 class="navButton">About Us</h3>
      </div>
      <div>
        <h3 class="navButton">Portfolio</h3>
        <h3 class="navButton">Contact Us</h3>
      </div>
      <!-- <h3 class="navButton">Our Services</h3>
      <h3 class="navButton">About Us</h3>
      <h3 class="navButton">Portfolio</h3>
      <h3 class="navButton">Contact Us</h3> -->

    </div>

    <div class="burger" id="burger">
      <span></span>
      <span></span>
    </div>
  </div>

  <div class="portfolioGallery">

    <img src="images/portfolio_image_1.jpg" alt="" class="galleryImage">
    <img src="images/portfolio_image_2.png" alt="" class="galleryImage">
    <img src="images/portfolio_image_3.jpg" alt="" class="galleryImage">

    <div class="galleryArrow left" onclick="previous()">
      <ion-icon name="chevron-back-outline"></ion-icon>
    </div>

    <div class="galleryArrow right" onclick="next()">
      <ion-icon name="chevron-forward-outline"></ion-icon>
    </div>

  </div>

  <script src="js/gallery.js"></script>
  <script src="js/index.js"></script>
  <script src="js/burger.js"></script>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>