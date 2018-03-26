<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Bangers|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>Contact Us</title>
</head>
<body>
<?php $page = 'aboutcontact.php';
require('../templates/headerTemplate.inc'); ?>
<h1></h1>
<div class="about-navbar flag-turned-right flag-turned-left menu">
    <a id="about-navbar-left" href="about_news.php">News</a>
    <a href="about_idea.php">The Idea</a>
    <a id="about-navbar-right" class="active" href="about_contact.php">Contact Us</a>
</div>
<div class="websiteContents">
    <div class="text-center">
        <div class="display-5">We would enjoy to meet with anyone having ideas about our product!</div>
        <div>We are located at: Fontys UAS, Rachelsmolen 1, Eindhoven, The Netherlands</div>
        <div class="mb-3"></div>
        <div id="map"></div>
    </div>
    <div class="mb-3"></div>
    <div class="text-center form-size">
        <div class="display-5">You can also write us a letter!</div>
        <form role="form" action="../model/mail.php" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputName">Name</label>
                    <input type="text" class="form-control" id="inputName" name="inputName"
                           placeholder="Name" value="<?php if (isset($_POST['inputName'])) {
                        echo htmlspecialchars($_POST['inputName']);
                    } ?>">
                    <?php if (isset($errName)) {
                        echo "<p class='text-danger'>$errName</p>";
                    } ?>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" name="inputEmail"
                           placeholder="Email" value="<?php if (isset($_POST['inputEmail'])) {
                        echo htmlspecialchars($_POST['inputEmail']);
                    } ?>" required>
                    <?php if (isset($errEmail)) {
                        echo "<p class='text-danger'>$errEmail</p>";
                    } ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputSubject">Subject</label>
                <input type="text" class="form-control" id="inputSubject" name="inputSubject"
                       placeholder="Website idea">
            </div>
            <div class="form-group">
                <label for="inputMessage">Your message</label>
                <textarea class="form-control" rows="3" id="inputMessage" name="inputMessage"
                          placeholder="Hi, can you add this and this to the website?"
                          required><?php if (isset($_POST['inputMessage'])) {
                        echo htmlspecialchars($_POST['inputMessage']);
                    } ?></textarea>
            </div>
            <input id="btnSubmit" type="submit" name="btnSubmit" value="Send"
                   class="btn btn-primary contactbtn-color">
            <div class="form-group">
                <?php if (isset($result)) {
                    echo $result;
                } ?>
            </div>
        </form>
    </div>
</div>
<?php require('../templates/footerTemplate.inc'); ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="../js/main.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key= AIzaSyDrWJIcGAM2PErlLTBF4SqsMrRHa9RzU70&callback=myMap"></script>
</body>
</html>
