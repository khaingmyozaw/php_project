<?php

include("../vendor/autoload.php");

use Helpers\Auth;
use Helpers\HTTP;
use Libs\Database\UsersTable;
use Libs\Database\MySQL;

$auth = Auth::check();
$id = $_GET['id'];

if($auth->id != $id) {
    $table = new UsersTable(new MySQL);
    $table->suspendUser($id);
    HTTP::headTo("admin.php");
}else {
    HTTP::headTo("admin.php", "suspend=error");
}