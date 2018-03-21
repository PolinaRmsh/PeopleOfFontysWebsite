<?php
if ($_GET["target"] == "home"){
    $people = file_get_contents('./peoplePHP.html', true);
}
elseif ($_GET["target"] == "student"){
    $people = file_get_contents('./studentsPHP.html', true);
}
elseif ($_GET["target"] == "teacher"){
    $people = file_get_contents('./teachersPHP.html', true);
}
else {
    $people = file_get_contents('./peoplePHP.html', true);
}
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Bangers|Roboto" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/main.css" rel="stylesheet">
    <title>The People</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light navbar-bg-blue justify-content-between">
        <a class="logoImage" href="index.html">
            <img src="img/group(4).png" alt="Company logo">
        </a>
        <a class="logoBtn" href="index.html">The Fontys People </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <div class="navbar-nav navbar-right ml-auto">
                <a class="nav-item" href="index.html">Home</a>
                <a class="nav-item active" href="thePeople.php?target=home">The People</a>
                <a class="nav-item" href="mypage.html">My Page</a>
                <a class="nav-item" href="about_news.html">About</a>
            </div>
        </div>
    </nav>
</header>
<div class="websiteContents">
    <?php 
echo $people; 
?>
</div>
<footer class="navbar footer small navbar-expand-lg navbar-light navbar-bg-blue justify-content-between">
    <div class="navbar-text text-white">Copyright © 2018, Polina Rymshina, Matei Voicu</div>
</footer>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="js/thePeople.js"></script>
<script src="js/plugins.js"></script>
<script src="js/search.js"></script>
</body>
</html>
