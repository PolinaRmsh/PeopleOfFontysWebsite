<?php
/**
 * Created by PhpStorm.
 * User: Polina
 * Date: 26.03.2018
 * Time: 23:09
 */
//connect
$conn = new PDO('mysql:host=localhost;dbname=peoplefontys','root','');

//do things
$sql = "SELECT name, image, status, address, aboutmyself, studies, experience, skills, interests FROM people";
$stmt = $conn->prepare($sql);
$stmt->execute();
$user = $stmt->fetchAll();
foreach ($user as $name) {
    echo $name['name'] . '<br>';
}
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

//$name = "";

//disconnect
$conn = null;