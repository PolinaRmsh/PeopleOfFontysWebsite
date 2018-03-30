<?php
/**
 * Created by PhpStorm.
 * User: Polina
 * Date: 29.03.2018
 * Time: 10:22
 */
session_start();
if (isset($_POST["btnSend"])) {
    $conn = new PDO('mysql:host=studmysql01.fhict.local;dbname=dbi395873','dbi395873','peoplefontys123');
    $emailp = $_SESSION["useremail"];
    if (isset($_POST["inputChange"])){
        $change = htmlspecialchars(addslashes($_POST['inputChange']));
        $sql = "UPDATE people SET studies='".$change."' WHERE email='".$emailp."'";
    }
    elseif (isset($_POST["inputChangeExp"])){
        $change = htmlspecialchars(addslashes($_POST['inputChangeExp']));
        $sql = "UPDATE people SET experience='".$change."' WHERE email='".$emailp."'";
    }
    elseif (isset($_POST["inputChangeSkill"])){
        $change = htmlspecialchars(addslashes($_POST['inputChangeSkill']));
        $sql = "UPDATE people SET skills='".$change."' WHERE email='".$emailp."'";
    }
    elseif (isset($_POST["inputChangeInterest"])){
        $change = htmlspecialchars(addslashes($_POST['inputChangeInterest']));
        $sql = "UPDATE people SET interests='".$change."' WHERE email='".$emailp."'";
    }
    elseif (isset($_POST["inputChangeAbout"])){
        $change = htmlspecialchars(addslashes($_POST['inputChangeAbout']));
        $sql = "UPDATE people SET aboutmyself='".$change."' WHERE email='".$emailp."'";
    }
    elseif (isset($_POST["inputChangeAddress"])){
        $change = htmlspecialchars(addslashes($_POST['inputChangeAddress']));
        $sql = "UPDATE people SET address='".$change."' WHERE email='".$emailp."'";
    }

$stmt = $conn->prepare($sql);
$stmt->execute();
$conn = null;
    header("Location: ../pagesPHP/mypage.php");
    exit();

}
