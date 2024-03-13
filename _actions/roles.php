<?php

include("../vendor/autoload.php");

use Helpers\HTTP;
use Libs\Database\UsersTable;
use Libs\Database\MySQL;

$id = $_GET['id'];
$role = $_GET['role'];
$table = new UsersTable(new MySQL);

if($role < 3) {
    if($table->getAdmins() === 1)
    {
        HTTP::headTo("admin.php", "change_role=error");
    }else {
        $table->changeRole($id, $role);
        HTTP::headTo("admin.php");
    }
} else {
    $table->changeRole($id, $role);
    HTTP::headTo("admin.php");
}