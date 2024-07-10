//JS file for the style changes on the homepage

var initialSelect = false;

function toggleInitialMenu(){

    if (initialSelect != true) {

        //document.getElementById('navigationMenu').className += ' navigationMenuChange';
        document.getElementById('navImage').className += ' navImageChange';
        document.getElementById('navigationButtonHolder').className += ' navigationButtonHolderChange';
        /* document.querySelectorAll('.navButton').forEach((button)  => {

            button.style.border = "1px solid black";

        }); */
        selectedOnce = true;

    }

}

function togglePortfolio(){

    //document.getElementById('navigationMenu').className += ' navigationMenuChange';
    document.getElementById('navigationMenu').classList.toggle('navigationMenuChange');
    document.querySelectorAll('.galleryArrow').forEach((arrow) => {

        arrow.classList.toggle('show');

    });
    document.getElementById('navImage').classList.toggle('navImageGallery');

}