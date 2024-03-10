<?php

// this code is working for index.php file

include("../vendor/autoload.php");

use Helpers\HTTP;
use Libs\Database\UsersTable;
use Libs\Database\MySQL;

$table = new UsersTable(new MySQL());

$email = $_POST['email'];
$password = $_POST['password'];

$user = $table->find($email, $password);

if($user)
{
    session_start();

    $_SESSION['user'] = $user;
    HTTP::headTo("profile.php");
} else {
    HTTP::headTo("index.php", "incorrect=login");
}
