<?php
/**
 * Created by PhpStorm.
 * User: Polina, Matei
 * Date: 20.03.2018
 * Time: 22:46
 */

if (isset($_GET['page'])) {
    include $_GET['page'] . ".html";
} else {
    include "404.html";
}