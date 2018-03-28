<?php
$conn = new PDO('mysql:host=localhost;dbname=peoplefontys', 'root', '');

$sql = "SELECT COUNT(*) FROM people";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchColumn(0);
if ($result >= 3){
    $rands = array(0,0,0);
    while ($rands[0] == $rands[1] || $rands[0] == $rands[2] || $rands[1] == $rands[2]) {
        $rands[0] = rand(0, $result-1);
        $rands[1] = rand(0, $result-1);
        $rands[2] = rand(0, $result-1);
    }
    $sql = "SELECT name, image FROM people";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    for ($i=0; $i<3; $i++){
        $image = base64_encode($result[$rands[$i]]["image"]);
        $name = $result[$rands[$i]]["name"];
        echo "<div class=\"col-sm-2 justify-content-center person-circle text-center\">
                <img src=\"data:image/jpeg;base64, {$image}\" alt=\"Another person\">
                <div class=\"collapsible-content\">this is
                <span id=\"collapsible-name\">
                       {$name}
                </span>
                </div>
            </div>";
    }
}
$conn = null;
