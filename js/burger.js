//
//JS file for the functionality of the burger menu 
//
var burger = document.querySelector('.burger');
var burgerMenu = document.getElementById('burgerMenu');
var spans = document.querySelectorAll('.burger span');
var isOpen = false;
var navButtons = document.getElementById('navigationButtonHolder');
var pageContent = document.getElementById('pageContentContainer');
var galleryArrows = document.querySelectorAll(".galleryArrow");
//toggle show/hide the burger menu
burger.addEventListener('click', () => {

    toggle();

});
//close menu when nav button is clicked
document.querySelectorAll('.navButton').forEach(navButton => {

    navButton.addEventListener('click', () => {

        if (burger.classList.contains('open')) {

            toggle();

        }

    });

});
//function to hide the burger menu
function toggle() {

    if (galleryArrows[0].classList.contains('show')) {

        galleryArrows.forEach(arrow => {

            arrow.classList.toggle("zToggle");

        });

    }

    pageContent.classList.toggle('pageContentContainerShift');
    burger.classList.toggle("hideBurger");
    burgerMenu.classList.toggle("burgerMenuOpen");
    spans.forEach(span => {

        span.classList.toggle('showSpan');

    });
    navButtons.classList.toggle('navigationButtonHolderOpen');

    //setting the bool for if the menu is open
    //purpose is to close the menu if the user shrinks the to a size where the menu does not exist
    //if they were to expand it again then the menu would be open
    if(isOpen == false){

        isOpen = true;

    }else{

        isOpen = false;

    }


}