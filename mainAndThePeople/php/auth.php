<?php
function validate_data ($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if (isset($_POST["inputEmail"]) && isset($_POST["inputPassword"])) {
    $email = validate_data($_POST["inputEmail"]);
    $pwd = validate_data($_POST["inputPassword"]);
    $email = $_POST["inputEmail"];
    $pwd = $_POST["inputPassword"];
    $conn = new PDO('mysql:host=localhost;dbname=peoplefontys','root','');
    $sql = "SELECT password FROM people WHERE email = '".$email."'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    $conn = null;
    session_start();
    $_SESSION["useremail"]=$email;

    //THIS WILL BE CHANGED TO BCRYPT
    if (md5($pwd) === $result[0]['password']) {
        if (isset($_POST["rememberme"])) {
            setcookie("userid", "admin", 2147483647, "/");
        } else {
            setcookie("userid", "admin", 0, "/");
        }
    }
    elseif (password_verify($pwd, $result[0]['password'])){
        if (isset($_POST["rememberme"])) {
            setcookie("userid", "admin", 2147483647, "/");
        } else {
            setcookie("userid", "admin", 0, "/");
        }
    }
    header("Location: ../pagesPHP/mypage.php");
    exit();
}
else{
    header("Location: ../pagesPHP/mypage.php");
    exit();
}