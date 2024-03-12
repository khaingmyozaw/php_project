<?php

include("../vendor/autoload.php");

use Helpers\HTTP;
use Libs\Database\UsersTable;
use Libs\Database\MySQL;

$id = $_GET['id'];
$role = $_GET['role'];
$table = new UsersTable(new MySQL);
$table->changeRole($id, $role);
HTTP::headTo("admin.php");