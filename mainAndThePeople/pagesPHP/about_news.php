<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Bangers|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>News</title>
</head>
<body>
<?php $page = 'aboutnews.php'; require('../templates/headerTemplate.inc'); ?>
<h1></h1>
<div class="about-navbar flag-turned-right flag-turned-left menu">
    <a id="about-navbar-left" class="active" href="about_news.php">News</a>
    <a href="about_idea.php">The Idea</a>
    <a id="about-navbar-right" href="about_contact.php">Contact Us</a>
</div>
<div class="websiteContents">
    <div class="row">
    <div class="col-sm" id="about-news-content-text">
        <div class="display-5">Feb 2018 - website creation kickoff</div>
        <p>
            The website was started in the beginning of February by two Fontys University students from ICT and Software
            stream - Polina Rymshina and Matei Voicu. The website is the assignment for the course WEB1. It is planned
            as a database of the teachers and students of Fontys University, helping them find each other and each
            others contact credentials. In the future the website is planned to be a platform for communication as well,
            however on early stages of development it is meant just to look up a person.
        </p>
        <hr>
        <div class="display-5">Feb 2018 - learning to use HTML and CSS</div>
        <p>
            The first assignment for the course WEB1 - making the layout of the website with HTML and CSS. First we have created
            a design document, planning how the website should look wireframe-wise. We have divided all the work half for each person.
             For the styling we have used plain CSS first, but on later stages of the project turned to Bootstrap, to make the website
            responsive.
            It took less than two weeks to finish the layout and styling, and the next task is to create the actions on the website
            using JavaScript!
        </p>
        <hr>
        <div class="display-5">More news coming soon!</div>
        <p>
           We are still working on the website and constantly improving it. You can send us your ideas for the website using the
            contact form on the Contact Us page. Stay tuned for more news!
        </p>
    </div>
    <div class="col-sm" id="about-news-content-picture">
        <figure>
            <img class="img-fluid" src="../img/three.jpg"
                 alt="Placeholder text">
        </figure>
    </div>
    </div>
</div>
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
