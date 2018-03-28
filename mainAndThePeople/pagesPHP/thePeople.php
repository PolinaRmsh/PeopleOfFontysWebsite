<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Bangers|Roboto" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="../css/main.css" rel="stylesheet">
    <title>The People</title>
</head>
<body>
<?php $page = 'thepeople.php';
require('../templates/headerTemplate.inc'); ?>

<div class="websiteContents">
    <?php
    if ($_GET["target"] == "home") {
        require('./peoplePHP.php');
    } elseif ($_GET["target"] == "student") {
        require('./studentsPHP.php');
    } elseif ($_GET["target"] == "teacher") {
        require('./teachersPHP.php');
    } else {
        require('./peoplePHP.php');
    }
    ?>
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
<script src="../js/thePeople.js"></script>
<script src="../js/plugins.js"></script>
<script src="../js/search.js"></script>
</body>
</html>
