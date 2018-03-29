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
    $conn = new PDO('mysql:host=localhost;dbname=peoplefontys', 'root', '');
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
    $sql = "SELECT name, image, status, address, aboutmyself, studies, experience, skills, interests FROM people WHERE email = '" . $emailq . "'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $users = $stmt->fetchAll();
    if (!isset($_POST['inputChange'])){$_POST['inputChange']="";}
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
    <br>
    <form id='changepic' action='../php/upload.php' method='post' enctype=\"multipart/form-data\">
        <input type='file' id='changepic-input' name='newPic'><br>JPEG/JPG files only</input>
        <button type='submit' id='changepic-button'>Submit</button>
    </form>
    <hr>
    <div class=\"mypage-bottom-info\">
        <div class='container'>
         <div class='row '>
        <h3 class='col-1 pl-0'> Studies </h3>
        <button type=\"button\" class='btn btn-outline-secondary btn-sm lead col-1 h-25'
        data-toggle=\"collapse\" href=\"#collapseExample\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseExample\">Edit</button>
        <div class=\"collapse\" id=\"collapseExample\">
        <div class=\"card card-body\">
        <form role=\"form\" action=\"../model/changesMyPage.php\" method=\"post\">
        <label for=\"inputChange\">Your changes</label>
        <input type=\"text\" class=\"form-control\" id=\"inputChange\" name=\"inputChange\" placeholder=\"Change\" 
        value=\"{$_POST['inputChange']}\" >
        <div class='mb-3'></div>
        <input id=\"btnSend\" type=\"submit\" name=\"btnSend\" value=\"Send\"
                   class=\"btn btn-primary contactbtn-color\">
        </form>
        </div>
        </div>
        </div>
        </div>
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