<?php

include("../vendor/autoload.php");

use Helpers\HTTP;
use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\Auth;

$auth = Auth::check();
$id = $_GET['id'];

if($auth->id!=$id) {
    
    $table = new UsersTable(new MySQL);
    $table->deleteUser($id);
    HTTP::headTo("admin.php");
}else {
    HTTP::headTo("admin.php", "delete=error");
}