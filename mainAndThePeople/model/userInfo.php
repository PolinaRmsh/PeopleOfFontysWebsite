<?php
/**
 * Created by PhpStorm.
 * User: Polina
 * Date: 26.03.2018
 * Time: 23:09
 */
//connect
function loadUsers()
{
    $conn = new PDO('mysql:host=localhost;dbname=peoplefontys', 'root', '');

    //do things
    $sql = "SELECT name, image, status, address, aboutmyself, studies, experience, skills, interests, email FROM people";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $users = $stmt->fetchAll();
    foreach ($users as $user) {
        $image = base64_encode($user['image']);
        echo "<div class='user'>
            <img src=\"data:image/jpeg;base64, {$image}\" alt='Avatar' class='userImage'>
            <div class='overlay'>
                <div class='userInfo'>{$user['name']}</div>
                <button class='contactLink myBtn' href=''>Contact</button>
            </div>
        </div>
        <div class=\"modal-popup myModal\" >
            <div class=\"modal-popup-content\">
                <span class=\"close-modal-popup\">&times;</span>
                <div class='jumbotron bg-white'>
                <h1 class='display-5'>{$user['name']}, status: {$user['status']}</h1>
                <p class='lead'>{$user['aboutmyself']}</p>
                <hr class=\"my-4\">
                <p>{$user['email']}</p>               
                </div> 
            </div>
        </div>";
    }
//disconnect
    $conn = null;
}
?>