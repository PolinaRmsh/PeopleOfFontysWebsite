<?php
/**
 * Created by PhpStorm.
 * User: Polina
 * Date: 29.03.2018
 * Time: 10:22
 */
if (isset($_POST["btnSend"])) {
$conn = new PDO('mysql:host=localhost;dbname=peoplefontys','root','');
$change = htmlspecialchars($_POST['inputChange']);
$sql = "UPDATE people SET studies='".$change."'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$conn = null;
    header("Location: ../pagesPHP/mypage.php");
    exit();

}
