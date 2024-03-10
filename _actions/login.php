<?php

// this code is working for index.php file

include("../vendor/autoload.php");

use Helpers\HTTP;

$email = $_POST['email'];
$password = $_POST['password'];

if($email === "jhoncena@gmail.com" && $password === "password")
{
    HTTP::headTo("profile.php");
} else {
    HTTP::headTo("index.php", "incorrect=login");
}
