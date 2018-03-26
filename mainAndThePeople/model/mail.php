<?php
if (isset($_POST["btnSubmit"])) {
    $name = $_POST['inputName'];
    $email = $_POST['inputEmail'];
    $message = $_POST['inputMessage'];
    $subject = $_POST['inputSubject'];
    $from = $email;
    $to = 'p.rymshina@student.fontys.nl';

    $body = "From: $name\n Subject: $subject\n E-Mail: $email\n Message:\n $message";

    if (!$_POST['inputName']) {
        $errName = 'Please enter your name';
    }
    if (!$_POST['inputEmail'] || !filter_var($_POST['inputEmail'], FILTER_VALIDATE_EMAIL)) {
        $errEmail = 'Please enter a valid email address';
    }
    if (!$errName && !$errEmail ) {
        if (mail ($to, $subject, $body, $from)) {
            $result='<div class="alert alert-success">Thank You! We will be in touch</div>';
        } else {
            $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
        }
    }
}
?>