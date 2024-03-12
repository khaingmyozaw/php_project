<?php

include("../vendor/autoload.php");

use Helpers\HTTP;
use Libs\Database\MySQL;
use Libs\Database\UsersTable;

$id = $_GET['id'];
$table = new UsersTable(new MySQL);
$table->deleteUser($id);
HTTP::headTo("admin.php");