<?php
if (isset($_POST["inputEmail"]) && isset($_POST["inputPassword"])) {
    if ($_POST["inputEmail"] === "w@w" && $_POST["inputPassword"] === "a") {
        if (isset($_POST["rememberme"])){
            setcookie("userid", "admin", 2147483647, "/");
        }
        else{
            setcookie("userid", "admin", 0, "/");
        }
        header("Location: ../pagesPHP/mypage.php");
        exit();
    }
    else{
        header("Location: ../pagesPHP/mypage.php");
        exit();
    }
}
else{
    header("Location: ../pagesPHP/mypage.php");
    exit();
}