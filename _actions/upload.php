<?php

include("../vendor/autoload.php");

use Helpers\HTTP;
use Helpers\Auth;
use Libs\Database\MySQL;
use Libs\Database\UsersTable;

// get some profile image information 
$name = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];
$error = $_FILES['photo']['error'];
$type = $_FILES['photo']['type'];

// print_r($_FILES['photo']); // check before whether photo is gotten

$user = Auth::check();

// And if no error is exited 
if(!$error) {

    if($type === "image/jpeg" || $type === "image/png")
    {
        move_uploaded_file($tmp_name, "photos/$name"); // move photo to a folder

        $table = new UsersTable(new MySQL);
        $table->uploadProfile($user->id, $name); // update photo by name

        $user->photo = $name; // update session 

        HTTP::headTo('profile.php', 'upload=success');
    } else {
        HTTp::headTo('profile.php', 'type=incorrect');
    }

} else{
    HTTP::headTo('profile.php', 'image_error=1');
}