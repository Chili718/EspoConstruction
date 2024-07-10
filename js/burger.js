var burger = document.querySelector('.burger');
var spans = document.querySelectorAll('.burger span');

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

function toggle() {

    burger.classList.toggle("hideBurger");
    spans.forEach(span => {

        span.classList.toggle('showSpan');

    });

}