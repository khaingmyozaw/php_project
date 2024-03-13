
<?php
    // checking authentication
    include("vendor/autoload.php");
    use Helpers\Auth;

    $user = Auth::check();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile.php</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
    <div class="container-fluid my-5 py-3" style="max-width:600px">
        <h3 class="mb-3">Profile</h3>

        <!-- if profile picture is exited image is showen  -->
        <?php if( $user->photo ): ?>
            <div class="mt-3 mx-auto" style="width: 200px;">
                <img src="_actions/photos/<?=$user->photo?>" alt="profile" style="width: 200px;" class="img-thumbnail">
            </div>
        <?php endif ?>

        <form action="_actions/upload.php" method="post" enctype="multipart/form-data">
            <div class="input-group mt-2">
                <input type="file" name="photo" id="photo" class="form-control">
                <button type="submit" class="btn btn-secondary">Upload</button>
            </div>
        </form>

        <div class="list-group my-1">

            <div class="list-item w-100 border">
                <div class="row align-middle p-2">
                    <div class="col-3 border-end border-2 fw-bold">Name:</div>
                    <div class="col-9"><?= $user->name ?></div>
                </div>
            </div>

            <div class="list-item w-100 border">
                <div class="row my-auto align-middle p-2">
                    <div class="col-3 border-end border-2 fw-bold">Email:</div>
                    <div class="col-9"><?= $user->email ?></div>
                </div>
            </div>

            <div class="list-item w-100 border">
                <div class="row my-auto align-middle p-2">
                    <div class="col-3 border-end border-2 fw-bold">Phone:</div>
                    <div class="col-9"><?= $user->phone ?></div>
                </div>
            </div>

            <div class="list-item w-100 border">
                <div class="row my-auto align-middle p-2">
                    <div class="col-3 border-end border-2 fw-bold">Address:</div>
                    <div class="col-9"><?= $user-> address ?></div>
                </div>
            </div>

        </div>
        <div class="float-end"> 
            <a href="admin.php" class="btn btn-info">Admin page</a>
            <a href="_actions/logout.php" class="btn btn-outline-danger">Logout</a>
        </div>

    </div>
</body>
</html>