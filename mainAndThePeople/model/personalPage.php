<?php
/**
 * Created by PhpStorm.
 * User: Polina
 * Date: 28.03.2018
 * Time: 13:55
 */
session_start();
function loadPerson()
{
    $conn = new PDO('mysql:host=studmysql01.fhict.local;dbname=dbi395873','dbi395873','peoplefontys123');
    // NO WORKEY
    //

//    function validate_data ($data){
//        $data = trim($data);
//        $data = stripslashes($data);
//        $data = htmlspecialchars($data);
//        return $data;
//    }
//    $email = validate_data($_POST["inputEmail"]);


    //do things
    $emailq = $_SESSION["useremail"];
    $sql = "SELECT name, image, status, address, aboutmyself, studies, experience, skills, interests FROM people WHERE email = '".$emailq."'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $users = $stmt->fetchAll();
    foreach ($users as $user) {
        $image = base64_encode($user['image']);
        echo "
    <a href=\"../php/logout.php\" class=\"logout\"> Log out</a>
    <div class=\"row\">
        <div class=\"col-sm-2\">
            <div class=\"person-circle text-center justify-content-md-center\">
                <img src=\"data:image/jpeg;base64, {$image}\" alt=\"Person photo\">
            </div>
        </div>
        <div class=\"col-sm-8\">
            <div class=\"mypage-top-text\">
                <div class=\"display-5 mb-1\" id=\"person-name\">{$user['name']}</div>
                <div class=\"lead mb-3\">Status: {$user['status']}</div>
                <div><Strong>About myself: </Strong>
                    {$user['aboutmyself']}
                </div>
            </div>
        </div>
        <div class=\"col-sm-2\">
            <div id=\"contact-info\"><p class='lead'>Address</p>{$user['address']}</div>
        </div>
    </div>
    <hr>
    <div class=\"mypage-bottom-info\">
        <h3> Studies </h3>
        <p id=\"mypage-studies-content\">
            {$user['studies']}
        </p>
        <hr>
        <h3> Experience </h3>
        <p id=\"mypage-experience-content\">
            {$user['experience']}
        </p>
        <hr>
        <h3> Skills </h3>
        <p id=\"mypage-skill-content\">
            {$user['skills']}
        </p>
        <hr>
        <h3> Interests</h3>
        <p id=\"mypage-interests-content\">
            {$user['interests']}
        </p>
    </div>
";
    }
//disconnect
    $conn = null;
}
?>