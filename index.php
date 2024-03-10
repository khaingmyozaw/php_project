<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
    <div class="container my-5 p-3 border" style="max-width: 500px;">

        <h3 class="mb-3">Login</h3>

        <!-- if login fail, this code will be worked  -->
        <?php if(isset($_GET['incorrect'])): ?>
            <div class="alert alert-warning" role="alert">
                Invalid email or password!
            </div>
        <?php endif ?>

        <!-- if register success, this code will be worked  -->
        <?php if(isset($_GET['register'])): ?>
            <div class="alert alert-success" role="alert">
                Account created successfully.
            </div>
        <?php endif ?>

        <form action="_actions/login.php" method="post">
            <div class="form-group mb-3">
                <input type="email" id="email" class="form-control" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group mb-3">
                <input type="password" id="password" class="form-control" name="password" placeholder="Enter your password" required>
            </div>

            <button type="submit" class="btn btn-primary w-100 mb-3">Login</button>
            <p>Don't have an account? <a href="register.php">Register</a></p>
        </form>
    </div>
</body>
</html>