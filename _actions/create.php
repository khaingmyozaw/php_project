<?php

include("../vendor/autoload.php");
use Helpers\HTTP;
use Libs\Database\UsersTable;
use Libs\Database\MySQL;

$table = new UsersTable(new MySQl);
$statement = $table->insert([
    "name" => $_POST["name"],
    "email" => $_POST["email"],
    "phone" => $_POST["phone"],
    "address" => $_POST["address"],
    "password" => $_POST["password"],
]);

HTTP::headTo("index.php", "register=success");

