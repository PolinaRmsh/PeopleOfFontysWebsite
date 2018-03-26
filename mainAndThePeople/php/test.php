<?php
if (isset($_POST["inputEmail"]) && isset($_POST["inputPassword"])) {
    if ($_POST["inputEmail"] === "w@w" && $_POST["inputPassword"] === "a") {
        setcookie("userid", "admin");
        header("Location: ../pagesPHP/mypage.php");
        exit();
    }
}
else{
    print_r($_POST);
}