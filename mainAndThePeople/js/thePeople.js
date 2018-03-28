// THE PEOPLE ONCLICK MODAL BOXES
// Get the modals
var modals = document.getElementsByClassName("myModal");

// Get the button that opens the modals
var butns = document.getElementsByClassName("myBtn");

// Get the <span> element that closes the modals
var spans = document.getElementsByClassName("close-modal-popup");

// When the user clicks on the button, open the modals
for (var i = 0; i < butns.length; i++) {
    const index = i;
    butns[index].onclick = function () {
        modals[index].style.display = "block";
    };
    spans[index].onclick = function() {
        modals[index].style.display = "none";
    };
}

// butns.onclick = function() {
//     modals.style.display = "block";
// };
//
// // When the user clicks on <span> (x), close the modals
// span.onclick = function() {
//     modals.style.display = "none";
// };

// When the user clicks anywhere outside of the modals, close it
window.onclick = function(event) {
    if (event.target === modals) {
        modals.style.display = "none";
    }
};
