<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Espinoza Brothers Construction LLC</title>

  <link rel="icon" href="images/EspoConstruction-Icon.png">

  <link rel="stylesheet" href="css/index.css">


  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

  <script>
    $(document).ready(function() {

      if (window.innerWidth <= 426) {

        $('#pageContentContainer').css('height', (window.innerHeight - 161) + 'px');

      } else {
        $('#pageContentContainer').css('height', (window.innerHeight - 89) + 'px');
      }
      //functionality for the button to open up the users email service
      $("#contactSend").on("click", function() {
        $("#frm").trigger("submit");
      });
      //variable to track the users current page
      var currentPage = '';

      $(".navButton").on("click", function() {
        //close burger menu when an option is selected if the menu is open
        if (window.innerWidth <= 700 && isOpen == true) {

          toggle();

        }

        if ($(this).text() != currentPage && $(this).text() != 'Contact Us') {

          if (currentPage == 'Portfolio') {
            togglePortfolio();
          }

          toggleInitialMenu();

          switch ($(this).text()) {
            case 'Our Services':
              pageChange("services.html");
              break;
            case 'About Us':
              pageChange("about.html");
              break;
            case 'Portfolio':
              togglePortfolio();
              break;
            default:

          }

          currentPage = $(this).text();

        }

        if (window.innerWidth <= 700 && $("#burger").css('visibility').toLowerCase() != 'visible') {

          $("#burger").css('visibility', 'visible');

        }

      });

      $(window).resize(function() {

        if ($(".navigationButtonHolder").hasClass("navigationButtonHolderChange") == true && window.innerWidth <= 700 && $("#burger").css('visibility').toLowerCase() != 'visible') {

          $("#burger").css('visibility', 'visible');

        } else if ($(".navigationButtonHolder").hasClass("navigationButtonHolderChange") == true && window.innerWidth > 700 && $("#burger").css('visibility').toLowerCase() == 'visible') {

          $("#burger").css('visibility', 'hidden');
          if (isOpen == true) {

            toggle();

          }

        }

      });
      //function to get and display the selected pages content without refreshing using ajax
      function pageChange(page) {

        //initial request to get the home page
        $.ajax({
          type: "GET",
          url: page,
          data: {},
          success: function(data) {
            $('#pageContentContainer').empty();
            $('#pageContentContainer').html(data);
          },
          error: function() {
            console.log("Error!");
          },
        });

      }

    });
  </script>

</head>

<body>

  <div class="navigationMenu" id="navigationMenu">
    <img src="images/EspoConstruction-Logo.png" alt="" class="navImage" id="navImage">

    <div class="navigationButtonHolder navigationButtonHolderClose" id="navigationButtonHolder">

      <div>
        <h3 class="navButton">Our Services</h3>
        <h3 class="navButton">About Us</h3>
      </div>
      <div>
        <h3 class="navButton">Portfolio</h3>
        <h3 class="navButton" id="contact">Contact Us</h3>
      </div>

    </div>

    <div class="burger" id="burger">
      <span></span>
      <span></span>
    </div>

    <div class="burgerMenu" id="burgerMenu"></div>
  </div>

  <div class="pageContentContainer" id="pageContentContainer">


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

  <!-- 
  
Start of Contact Modal 

-->
  <dialog class="contactModal" id="contactModal">

    <div class="closeContactModal" id="closeContactModal"><ion-icon name="close-circle-outline"></ion-icon></div>

    <form class="frm" id="frm" method="dialog" onsubmit="return submitMail(this)">
      <div class="infoBlock">

        <p><b>Mobile:</b> </p>
        <p><b>Email:</b> </p>

      </div>

      <h1>Contact Us</h1>

      <div class="allInp">
        <div class="inp">
          <input type="text" name="name" id="name" required />
          <label>Name</label>
        </div>
        <div class="inp">
          <input type="text" name="subject" id="subject" required />
          <label>Subject</label>
        </div>
        <div class="inp">
          <textarea class="inpTextArea" name="message" id="message" cols="50" rows="4" required></textarea>
          <label>What would you like us to do?</label>
        </div>
      </div>

      <div class="contactButtonContainer" id="contactSend">
        <div class="contactButton">Send</div>
        <input type="submit" style="display: none">
      </div>

    </form>

  </dialog>
  <!-- 
  
End of Contact Modal 

-->

  <script src="js/gallery.js"></script>
  <script src="js/index.js"></script>
  <script src="js/burger.js"></script>
  <script src="js/contactModal.js"></script>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>