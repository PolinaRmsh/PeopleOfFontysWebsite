<?php
$errName="";
$errEmail="";
if (isset($_POST["btnSubmit"])) {
    $name = $_POST['inputName'];
    $email = $_POST['inputEmail'];
    $message = $_POST['inputMessage'];
    $subject = $_POST['inputSubject'];
    $headers =  'MIME-Version: 1.0' . "\r\n";
    $headers .= 'From: '. $email . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $to = 'p.rymshina@student.fontys.nl';

    $body = "From: $name\n Subject: $subject\n E-Mail: $email\n Message:\n $message";

    if (!$name) {
        $errName = 'Please enter your name';
    }
    if (!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errEmail = 'Please enter a valid email address';
    }
    if (!$errName && !$errEmail ) {
        if (mail ($to, $subject, $body, $headers)) {
            $result='<div class="alert alert-success">Thank You! We will be in touch</div>';
        } else {
            $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
        }
        header('Location: ../pagesPHP/about_contact.php');
        exit;
    }
}
?>