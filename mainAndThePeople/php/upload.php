<?php
if ($_FILES["newPic"]["type"] === "image/jpg" || $_FILES["newPic"]["type"] === "image/jpeg") {
    session_start();
    $email = $_SESSION["useremail"];
    $conn = new PDO('mysql:host=studmysql01.fhict.local;dbname=dbi395873','dbi395873','peoplefontys123');
    $img = addslashes(file_get_contents($_FILES["newPic"]["tmp_name"], true));
    $sql = "UPDATE people SET image='".$img."' WHERE email = '".$email."'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $conn = null;

    header("Location: ../pagesPHP/mypage.php");
    exit;
}

