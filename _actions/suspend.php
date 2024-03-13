<?php

include("../vendor/autoload.php");

use Helpers\HTTP;
use Helpers\Auth;
use Libs\Database\UsersTable;
use Libs\Database\MySQL;

$id = $_GET['id'];
$table = new UsersTable(new MySQL);
$auth = Auth::check();

if($auth->id != $id) 
{
    $table->suspendUser($id);
    HTTP::headTo("admin.php");
} else {
    HTTP::headTo("admin.php", "ban=error");
}
