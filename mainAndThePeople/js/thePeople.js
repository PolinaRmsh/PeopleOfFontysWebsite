// THE PEOPLE ONCLICK MODAL BOXES
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var butn = document.getElementsByClassName("myBtn")[0];

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-modal-popup")[0];

// When the user clicks on the button, open the modal
butn.onclick = function() {
    modal.style.display = "block";
};

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target === modal) {
        modal.style.display = "none";
    }
};
