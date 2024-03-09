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

        <form action="_actions" method="post" enctype="multipart/form-data">
            <div class="input-group mt-5">
                <input type="file" name="photo" id="photo" class="form-control">
                <button type="submit" class="btn btn-secondary">Upload</button>
            </div>
        </form>

        <div class="list-group my-1">

            <div class="list-item w-100 border">
                <div class="row align-middle p-2">
                    <div class="col-3 border-end border-2 fw-bold">Name:</div>
                    <div class="col-9">Jhon Cena</div>
                </div>
            </div>

            <div class="list-item w-100 border">
                <div class="row my-auto align-middle p-2">
                    <div class="col-3 border-end border-2 fw-bold">Email:</div>
                    <div class="col-9">jhoncena@gmail.com</div>
                </div>
            </div>

            <div class="list-item w-100 border">
                <div class="row my-auto align-middle p-2">
                    <div class="col-3 border-end border-2 fw-bold">Phone:</div>
                    <div class="col-9">09100200300</div>
                </div>
            </div>

            <div class="list-item w-100 border">
                <div class="row my-auto align-middle p-2">
                    <div class="col-3 border-end border-2 fw-bold">Address:</div>
                    <div class="col-9">Jhon Cena's House</div>
                </div>
            </div>

        </div>
        
        <div class="row g-0">
            <a href="index.php" class="btn btn-secondary float-end">Logout</a>
        </div>

    </div>
</body>
</html>