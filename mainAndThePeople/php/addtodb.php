<?php
function validate_data ($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$email = validate_data($_POST["inputEmail"]);
$pwd = validate_data($_POST["inputPassword"]);
$pwd = password_hash($pwd, PASSWORD_BCRYPT);
$address = validate_data($_POST["inputAddress"]);
$address .= ", " . validate_data($_POST["inputPostalcode"]);
$address .= ", " . validate_data($_POST["inputCity"]);
$status = validate_data($_POST["inputStatus"]);

$conn = new PDO('mysql:host=localhost;dbname=peoplefontys','root','');
$sql = "INSERT INTO people (status, address, email, password) VALUES ('".$status."', '".$address."', '".$email."', '".$pwd."')";
$stmt = $conn->prepare($sql);
$stmt->execute();
$conn = null;

//need to chane userid value to something else
setcookie("userid", "admin", 0, "/");

header("Location: ../pagesPHP/mypage.php");
exit();