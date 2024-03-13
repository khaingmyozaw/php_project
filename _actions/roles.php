<?php

include("../vendor/autoload.php");

use Helpers\HTTP;
use Helpers\Auth;
use Libs\Database\UsersTable;
use Libs\Database\MySQL;

$table = new UsersTable(new MySQL);

$id = $_GET['id'];
$role = $_GET['role'];

if($role < 3)
{
    if($table->adminCount() == 1) {
        HTTP::headTo("admin.php", "change_role=error");
    }else {

        $table->changeRole($id, $role);
        HTTP::headTo("admin.php");
        
    }
}else {
    $table->changeRole($id, $role);
    HTTP::headTo("admin.php");
}