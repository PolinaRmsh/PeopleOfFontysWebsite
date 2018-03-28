<?php
setcookie("userid", "", -1, "/");
session_destroy();
header("Location: ../pagesPHP/mypage.php");
exit();
