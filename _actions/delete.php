<?php

include("../vendor/autoload.php");

use Helpers\HTTP;
use Helpers\Auth;
use Libs\Database\MySQL;
use Libs\Database\UsersTable;

$id = $_GET['id'];
$table = new UsersTable(new MySQL);
$auth = Auth::check();

if($auth->id != $id)
{
    $table->deleteUser($id);
    HTTP::headTo("admin.php");
}else {
    HTTP::headTo("admin.php", "delete=error");
}