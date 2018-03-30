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
                <div class='row'>
                <div class='col-6'><Strong>About myself: </Strong>
                    {$user['aboutmyself']}
                </div>
                 <button type=\"button\" class='btn btn-colour btn-sm lead col-1 float-right btn-about'
                data-toggle=\"collapse\" href=\"#collapseAbout\" role=\"button\" aria-expanded=\"false\" 
                aria-controls=\"collapseAbout\"><i class=\"fas fa-edit\"></i></button>
                <div class=\"collapse\" id=\"collapseAbout\">
                 <div class=\"card card-body\">
                <form role=\"form\" action=\" ../model/changesMyPage.php\" method=\"post\">
                <label for=\"inputChange\">Your changes</label>
             <input type=\"text\" class=\"form-control\" id=\"inputChangeAbout\" name=\"inputChangeAbout\" placeholder=\"Change\" 
              value=\"{$_POST['inputChangeAbout']}\">
             <div class='mb-3'></div>
                <input id=\"btnSend\" type=\"submit\" name=\"btnSend\" value=\"Send\"
                   class=\"btn btn-primary contactbtn-color\">
            </form>
            </div>
            </div>
                
                </div>
                
            </div>
        </div>
        <div class=\"col-sm-2\">
            <div id=\"contact-info\">
            <p class='lead'>Address</p>
            {$user['address']}
            <div class='mb-3'></div>
            <button type=\"button\" class='btn btn-colour btn-sm lead h-25'
               data-toggle=\"collapse\" href=\"#collapseAddress\" role=\"button\" aria-expanded=\"false\" 
               aria-controls=\"collapseAddress\"><i class=\"fas fa-edit\"></i></button>
            <div class=\"collapse\" id=\"collapseAddress\">
        <div class=\"card card-body\">
        <form role=\"form\" action=\"../model/changesMyPage.php\" method=\"post\">
        <label for=\"inputChangeAddress\">Your changes</label>
        <input type=\"text\" class=\"form-control\" id=\"inputChangeAddress\" name=\"inputChangeAddress\" placeholder=\"Change\" 
        value=\"{$_POST['inputChangeAddress']}\">
        <div class='mb-3'></div>
        <input id=\"btnSend\" type=\"submit\" name=\"btnSend\" value=\"Send\"
                   class=\"btn btn-primary contactbtn-color\">
        </form>
        </div>
        </div>
            </div>
        </div>
    </div>
    <br>
    <form id='changepic' action='../php/upload.php' method='post' enctype=\"multipart/form-data\">
        <input type='file' id='changepic-input' name='newPic'><br>JPEG/JPG files only</input>
        <button class='btn' type='submit' id='changepic-button'>Submit</button>
    </form>
    <hr>
    <div class=\"mypage-bottom-info\">
        <div class='container container-position'>
         <div class='row '>
        <h3 class='col-sm pl-0'> Studies </h3>
        <button type=\"button\" class='btn btn-colour btn-sm lead col-1 float-right h-25'
        data-toggle=\"collapse\" href=\"#collapseExample\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseExample\"><i class=\"fas fa-edit\"></i></button>
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
        <div class='container container-position'>
         <div class='row '>
        <h3 class='col-sm pl-0'> Experience </h3>
        <button type=\"button\" class='btn btn-colour btn-sm lead col-1 float-right h-25'
        data-toggle=\"collapse\" href=\"#collapseExperience\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseExperience\">
        <i class=\"fas fa-edit\"></i>
        </button>
        <div class=\"collapse\" id=\"collapseExperience\">
        <div class=\"card card-body\">
        <form role=\"form\" action=\"../model/changesMyPage.php\" method=\"post\">
        <label for=\"inputChange\">Your changes</label>
        <input type=\"text\" class=\"form-control\" id=\"inputChangeExp\" name=\"inputChangeExp\" placeholder=\"Change\" 
        value=\"{$_POST['inputChangeExp']}\" >
        <div class='mb-3'></div>
        <input id=\"btnSend\" type=\"submit\" name=\"btnSend\" value=\"Send\"
                   class=\"btn btn-primary contactbtn-color\">
        </form>
        </div>
        </div>
        </div>
        </div>
        <p id=\"mypage-experience-content\">
            {$user['experience']}
        </p>
        <hr>
        <div class='container container-position'>
         <div class='row '>
        <h3 class='col-sm pl-0'> Skills </h3>
        <button type=\"button\" class='btn btn-colour btn-sm lead col-1 float-right h-25'
        data-toggle=\"collapse\" href=\"#collapseSkill\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseSkill\"><i class=\"fas fa-edit\"></i></button>
        <div class=\"collapse\" id = \"collapseSkill\" >
        <div class=\"card card-body\" >
        <form role = \"form\" action = \"../model/changesMyPage.php\" method = \"post\" >
        <label for=\"inputChange\" > Your changes </label >
        <input type = \"text\" class=\"form-control\" id = \"inputChangeSkill\" name = \"inputChangeSkill\" placeholder = \"Change\" 
        value = \"{$_POST['inputChangeSkill']}\" >
        <div class='mb-3' ></div >
        <input id = \"btnSend\" type = \"submit\" name = \"btnSend\" value = \"Send\"
                   class=\"btn btn-primary contactbtn-color\" >
        </form >
        </div >
        </div >
        </div >
        </div >
        <p id=\"mypage-skill-content\">
            {$user['skills']}
        </p>
        <hr>
        <div class='container container-position'>
         <div class='row '>
        <h3 class='col-sm pl-0'> Interests</h3>
        <button type=\"button\" class='btn btn-colour btn-sm lead col-1 float-right h-25'
        data-toggle=\"collapse\" href=\"#collapseInterest\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseInterest\"><i class=\"fas fa-edit\"></i></button>
        <div class=\"collapse\" id = \"collapseInterest\" >
        <div class=\"card card-body\" >
        <form role = \"form\" action = \"../model/changesMyPage.php\" method = \"post\" >
        <label for=\"inputChange\" > Your changes </label >
        <input type = \"text\" class=\"form-control\" id = \"inputChangeInterest\" name = \"inputChangeInterest\" placeholder = \"Change\" 
        value = \"{$_POST['inputChangeInterest']}\" >
        <div class='mb-3' ></div >
        <input id = \"btnSend\" type = \"submit\" name = \"btnSend\" value = \"Send\"
                   class=\"btn btn-primary contactbtn-color\" >
        </form >
        </div >
        </div >
        </div >
        </div >
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