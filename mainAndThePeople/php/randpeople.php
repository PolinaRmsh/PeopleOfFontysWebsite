<?php
$conn = new PDO('mysql:host=studmysql01.fhict.local;dbname=dbi395873','dbi395873','peoplefontys123');

$sql = "SELECT COUNT(*) FROM people";
$stmt = $conn->prepare($sql);
$stmt->execute();
$count = $stmt->fetchColumn(0) - 2;

$sql = "SELECT name, image, email FROM people WHERE email != 'p.rymshina@student.fontys.nl'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$people = $stmt->fetchAll();

if ($count >= 3){
    $rands = array(0,0,0);
    while ($rands[0] == $rands[1] || $rands[0] == $rands[2] || $rands[1] == $rands[2]) {
            $rands[0] = rand(0, $count );
            $rands[1] = rand(0, $count );
            $rands[2] = rand(0, $count );
    }
    for ($i=0; $i<3; $i++){
        $image = base64_encode($people[$rands[$i]]["image"]);
        $name = $people[$rands[$i]]["name"];
        echo "<div class=\"col-sm-2 justify-content-center person-circle text-center\">
                <img src=\"data:image/jpeg;base64, {$image}\" alt=\"Another person\">
                <div class=\"collapsible-content lead\">This is
                <span id=\"collapsible-name\">
                       {$name}
                </span>
                </div>
            </div>";
    }
}
$conn = null;
