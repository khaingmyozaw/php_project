<?php

include("../vendor/autoload.php");

use Helpers\HTTP;
use Libs\Database\UsersTable;
use Libs\Database\MySQL;

$id = $_GET['id'];
$table = new UsersTable(new MySQL);
$table->suspendUser($id);
HTTP::headTo("admin.php");