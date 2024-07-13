/* JS file for the functionality of the contact modals form */
const contactModal = document.getElementById('contactModal');
const openContactModal = document.getElementById('contact');
const closeContactModal = document.getElementById('closeContactModal');

openContactModal.addEventListener('click', () => {

    contactModal.showModal();

});

closeContactModal.addEventListener('click', () => {

    contactModal.close();

});
//functionality for closing the modal on interation of the darkened area
contactModal.addEventListener("click", e => {
    const dialogDimensions = contactModal.getBoundingClientRect();
    if (
        e.clientX < dialogDimensions.left ||
        e.clientX > dialogDimensions.right ||
        e.clientY < dialogDimensions.top ||
        e.clientY > dialogDimensions.bottom
    ) {
        contactModal.close();
    }
});

//mail function for form
function submitMail(form) {

    window.open("mailto:jacob@espobrosconstruction.com?subject=" + form.subject.value + "%20-%20 Name:%20" + form.name.value + "&body=" + form.message.value + "");

    contactModal.close();

    //alert("Your email has been sent!");

    return false;

}