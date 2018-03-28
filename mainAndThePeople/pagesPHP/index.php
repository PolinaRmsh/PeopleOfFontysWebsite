<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Bangers|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>The Fontys People</title>
    <link rel="stylesheet" type="text/css"
          href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css"/>
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
    <script>
        window.addEventListener("load", function () {
            window.cookieconsent.initialise({
                "palette": {
                    "popup": {
                        "background": "#303f9f"
                    },
                    "button": {
                        "background": "#ff5722",
                        "text": "#ffffff"
                    }
                },
                "theme": "classic",
                "position": "bottom-left"
            })
        });
    </script>
</head>
<body>
<!--HEADER-->
<?php $page = 'index.php';
require('../templates/headerTemplate.inc'); ?>
<div class="websiteContents">
    <div class="slideshow-container">

        <div class="mySlides fade-in">
            <div class="numbertext">1 / 3</div>
            <img src="../img/one.jpg" alt="an image">
            <div class="caption">
                Let&nbsp;us show you the amazing people of&nbsp;Fontys&nbsp;&mdash; both students and staff.
                Just click on&nbsp;The People section!
            </div>
        </div>

        <div class="mySlides fade-in">
            <div class="numbertext">2 / 3</div>
            <img src="../img/two.jpg" alt="an image">
            <div class="caption">
                Caption Two
            </div>
        </div>

        <div class="mySlides fade-in">
            <div class="numbertext">3 / 3</div>
            <img src="../img/three.jpg" alt="an image">
            <div class="caption">Caption Three</div>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
    <h1></h1>
    <div class="mainPeopleStart">
        <hr/>
        <div class="flagThing"></div>
        <a class="btn button3" href="thePeople.php?target=home"> Our Heroes</a>
    </div>
    <p class="m-1"></p>
    <div class="jumbotron bg-white mb-0">
        <div class="row ml-2 mr-2">
            <?php require("../php/potd.php") ?>
        </div>
    </div>
    <p class="m-1"></p>
    <div class="container">
        <div class="row ml-2 mr-2 justify-content-md-end">
            <div class="col-sm-2 justify-content-center">
                <h1 class="display-5 also-color"><strong>See also</strong></h1>
            </div>
            <?php require("../php/randpeople.php"); ?>

        </div>
    </div>
</div>

<!--FOOTER-->
<?php require('../templates/footerTemplate.inc'); ?>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="../js/main.js"></script>
</body>
</html>
