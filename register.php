<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
    <div class="container my-5 p-3 border" style="max-width: 500px;">

        <h3 class="mb-3">Register</h3>

        <form action="_actions/create.php" method="post">
            <div class="form-group mb-4">
                <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name" required>
            </div>
            <div class="form-group mb-4">
                <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
            </div>
            <div class="form-group mb-4">
                <input type="text" id="phone" name="phone" class="form-control" placeholder="Enter your phone" required>
            </div>
            <div class="form-group mb-4">
                <input type="text" id="address" name="address" class="form-control" placeholder="Enter your address" required>
            </div>
            <div class="form-group mb-4">
                <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
            </div>
            
            <button class="btn btn-primary mb-4 w-100" type="submit">Register</button>
            <p>Already have an account? <a href="index.php">Login</a></p>
        </form>
    </div>
</body>
</html>