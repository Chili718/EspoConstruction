//JS file for the page changes on the homepage

//bool for checking if the intial screen has been moved or not
var initialSelect = false;

function toggleInitialMenu(){

    if (initialSelect != true) {

 
        document.getElementById('navImage').className += ' navImageChange';
        document.getElementById('navigationButtonHolder').className += ' navigationButtonHolderChange';

        initialSelect = true;

    }

}
//show the portfolio page
function togglePortfolio(){

    document.getElementById('navigationMenu').classList.toggle('navigationMenuChange');
    document.querySelectorAll('.galleryArrow').forEach((arrow) => {

        arrow.classList.toggle('show');

    });
    document.getElementById('navImage').classList.toggle('navImageGallery');

}