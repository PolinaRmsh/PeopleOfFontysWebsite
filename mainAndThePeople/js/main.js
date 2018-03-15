// MAIN PAGE IMAGE CAROUSEL
$(document).ready(function () {
    showSlides(slideIndex);
});


var slideIndex = 1;
// showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
}
// ABOUT PAGE - OONTACT US - MAP
function myMap() {
    var mapCanvas = document.getElementById("map");
    var mapOptions = {
        center: new google.maps.LatLng(51.452251, 5.481973),
        zoom: 16
    };
    var map = new google.maps.Map(mapCanvas, mapOptions);
}

var coll = document.getElementsByClassName("person-circle");

for (var i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
        var content = this.children[1];
        if (content.style.display == "block") {
            content.style.display = "none";
        } else {
            content.style.display = "block";
        }
    });
}
