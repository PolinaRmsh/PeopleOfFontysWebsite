<?php
if ($_FILES["newPic"]["type"] === "image/jpg" || $_FILES["newPic"]["type"] === "image/jpeg") {
    session_start();
    $email = $_SESSION["useremail"];
    $conn = new PDO('mysql:host=localhost;dbname=peoplefontys','root','');
    $img = addslashes(file_get_contents($_FILES["newPic"]["tmp_name"], true));
    $sql = "UPDATE people SET image='".$img."' WHERE email = '".$email."'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $conn = null;

    header("Location: ../pagesPHP/mypage.php");
    exit();
}

