<?php
/**
 * potd = person of the day
 */

$conn = new PDO('mysql:host=studmysql01.fhict.local;dbname=dbi395873','dbi395873','peoplefontys123');

$sql = "SELECT * FROM people WHERE email = 'p.rymshina@student.fontys.nl'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$potd = $stmt->fetchAll();
$image = base64_encode($potd[0]["image"]);

echo "<div class=\"col-sm-3 mb-3 justify-content-center text-center left\"><img src=\"data:image/jpeg;base64, {$image}\" alt=\"Person Of The Day\">
            </div>
            <div class=\"col-sm-9 justify-content-center\">
                <h1 class=\"display-5\"><strong>The Person Of the Day</strong></h1>
                <p class=\"lead\">{$potd[0]["name"]} is&nbsp;a&nbsp;{$potd[0]["status"]} at&nbsp;Fontys University Of&nbsp;Applied Sciences.</p>
                <p class=\"lead\">Polina is an exchange student hailing from Russia. When asked abut herself, she said: {$potd[0]["aboutmyself"]}</p>
                <p class=\"lead\">Her previous studies are {$potd[0]["studies"]}</p>
            </div>";
$conn = null;