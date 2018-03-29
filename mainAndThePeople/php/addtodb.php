<?php
function validate_data ($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
try{
$avatar = addslashes((file_get_contents("../img/defaultavatar.jpeg", true)));
$email = validate_data($_POST["inputEmail"]);
$pwd = validate_data($_POST["inputPassword"]);
$pwd = password_hash($pwd, PASSWORD_BCRYPT);
$name = validate_data($_POST["inputName"]);
$address = validate_data($_POST["inputAddress"]);
$address .= ", " . validate_data($_POST["inputPostalcode"]);
$address .= ", " . validate_data($_POST["inputCity"]);
$status = validate_data($_POST["inputStatus"]);

    $conn = new PDO('mysql:host=studmysql01.fhict.local;dbname=dbi395873','dbi395873','peoplefontys123');
$sql = "INSERT INTO people (status, name, image, address, email, password) VALUES ('".$status."', '".$name."','".$avatar."' ,'".$address."', '".$email."', '".$pwd."')";
$stmt = $conn->prepare($sql);
$stmt->execute();
$conn = null;
}
catch(Exception $e){
    echo $e->getMessage();
}
//need to chane userid value to something else
setcookie("userid", "admin", 0, "/");

header("Location: ../pagesPHP/mypage.php");
exit();