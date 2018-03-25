<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Bangers|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <title>The Fontys People</title>
</head>
<body>
<!--HEADER-->
<?php $page = 'index.php'; require('headerTemplate.inc'); ?>
<div class="websiteContents">
    <div class="slideshow-container">

        <div class="mySlides fade-in">
            <div class="numbertext">1 / 3</div>
            <img src="img/one.jpg" alt="an image">
            <div class="caption">
                Let&nbsp;us show you the amazing people of&nbsp;Fontys&nbsp;&mdash; both students and staff.
                Just click on&nbsp;The People section!
            </div>
        </div>

        <div class="mySlides fade-in">
            <div class="numbertext">2 / 3</div>
            <img src="img/two.jpg" alt="an image">
            <div class="caption">
                Caption Two
            </div>
        </div>

        <div class="mySlides fade-in">
            <div class="numbertext">3 / 3</div>
            <img src="img/three.jpg" alt="an image">
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
        <a class="btn button3" href="old%20html/thePeople.html"> Our Heroes</a>
    </div>
    <p class="m-1"></p>
    <div class="jumbotron bg-white mb-0">
        <div class="row ml-2 mr-2">
            <div class="col-sm-3 mb-3 justify-content-center text-center left"><img src="img/iron-man.jpg" alt="Person Of The Day"></div>
            <div class="col-sm-9 justify-content-center">
                <h1 class="display-5"><strong>The Person Of the Day</strong></h1>
                <p class="lead">Tony Stark is&nbsp;a&nbsp;teacher at&nbsp;Fontys University Of&nbsp;Applied Sciences.</p>
                <p class="lead">This gentleman has graduated MIT and has worked in&nbsp;Stark Industries Inc.
                    In&nbsp;2001&nbsp;he has decided to&nbsp;become a&nbsp;teacher and joined the team
                    of&nbsp;Fontys. </p>
                <p class="lead">Tony is skilled at electrical engineering and physics.
                    In&nbsp;his free time Tony builds robots and helps saving the world.</p>
            </div>
        </div>
    </div>
    <p class="m-1"></p>
    <div class="container">
        <div class="row ml-2 mr-2 justify-content-md-end">
            <div class="col-sm-2 justify-content-center">
                <h1 class="display-5 also-color"><strong>See also</strong></h1>
            </div>
            <div class="col-sm-2 justify-content-center person-circle text-center">
                <img src="img/black-widow.jpg" alt="Another person">
                <div class="collapsible-content">this is black widow</div>
            </div>
            <div class="col-sm-2 justify-content-center person-circle text-center">
                <img src="img/cookie-monster.jpg" alt="Another person">
            </div>
            <div class="col-sm-2 justify-content-center person-circle text-center">
                <img src="img/hulk.jpg" alt="Another person">
            </div>
        </div>
    </div>
</div>

<!--FOOTER-->
<?php require('footerTemplate.inc'); ?>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="js/main.js"></script>
</body>
</html>
