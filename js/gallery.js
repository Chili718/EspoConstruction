//JS file for the functionality of the gallery
var images = document.querySelectorAll(".galleryImage");
var current = 0;

//hiding all of the gallery images except for the first 
for(var i = 0; i < images.length; i++){
    images[i].style.display = 'none';
    images[i].className += ' fade-out';
}
//display the first image which will be the background
images[current].style.display = 'block';
images[current].className += ' fade-in';

//move to the next image in the gallery
function next(){

    images[current].style.display = 'none';
    images[current].classList.remove('fade-in');

    if(current == images.length-1){

        current = 0;

    }else{

        current++;

    }

    images[current].style.display = 'block';
    //created the fade out effect using the css transition
    window.setTimeout(function () {
        images[current].className += ' fade-in';
    }, 0);

}
//move to the previous image in the gallery
function previous(){

    images[current].style.display = 'none';
    images[current].classList.remove('fade-in');

    if (current == 0) {

        current = images.length-1;

    } else {

        current--;

    }
    
    images[current].style.display = 'block';
    //created the fade out effect using the css transition
    window.setTimeout(function () {
        images[current].className += ' fade-in';
    }, 0);


}