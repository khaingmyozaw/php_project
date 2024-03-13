
<?php

    include("vendor/autoload.php");

    use Libs\Database\MySQL;
    use Libs\Database\UsersTable;
    use Helpers\Auth;

    $auth = Auth::check();

    $table = new UsersTable(new MySQL);
    $users = $table->getAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>

	<!-- datatables -->
	<link rel="stylesheet" href="https://cdn.datatables.net/2.0.1/css/dataTables.dataTables.min.css">
    
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark"">
        <div class="container">
            <a href="#" class="navbar-brand">Admin</a>

            <ul class="navbar-nav">

                <li class="nav-item">
                    <a href="profile.php" class="nav-link text-white me-3">
                        <?= $auth->name ?>
                    </a>
                </li>

                <li class="nav-item">
                <a href="_actions/logout.php" class="nav-link text-danger">Logout</a>
                </li>
            </ul>
        </div>
    </nav>


    <!-- restrict from deleting self  -->
    <?php if(isset($_GET['delete'])): ?>
        <div class="alert alert-danger text-center" role="alert">
            Can't delete yourself!
        </div>
    <?php endif ?>

    <!-- restrict from banning self  -->
    <?php if(isset($_GET['suspend'])): ?>
        <div class="alert alert-warning text-center" role="alert">
            Can't ban yourself!
        </div>
    <?php endif ?>

    <!-- when trying to delete adimin and if there is no admin anymore this error message will be work  -->
    <?php if(isset($_GET['change_role'])): ?>
        <div class="alert alert-danger text-center" role="alert">
            You can't change because there is no admin anymore!
        </div>
    <?php endif ?>

    <div class="container">
        
        <table id="myTable" class="table table-strip table-dark my-4">

            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Role</th>
                    <th></th>           
                </tr>
            </thead>

            <tbody>
                <?php foreach($users as $user): ?>
                    <tr>
                        <td><?= $user -> id ?></td>
                        <td><?= $user -> name ?></td>
                        <td><?= $user -> email ?></td>
                        <td><?= $user -> phone ?></td>
                        <td>
                            <?php if($user->role_id == 3): ?>
                                <span class="badge bg-success">Admin</span>
                            <?php elseif($user->role_id == 2): ?>
                                <span class="badge bg-primary">Manager</span>
                            <?php else: ?>
                                <span class="badge bg-secondary">user</span>
                            <?php endif ?>
    
                        </td>
                        <td>
                            <div class="btn-group">
                                
                                <?php if($auth->role_id > 2): ?>

                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">Role</button>
        
                                        <ul class="dropdown-menu">
                                            <li><a href="_actions/roles.php?id=<?= $user->id ?>&role=3" class="dropdown-item">Admin</a></li>
                                            <li><a href="_actions/roles.php?id=<?= $user->id ?>&role=2" class="dropdown-item">Manager</a></li>
                                            <li><a href="_actions/roles.php?id=<?= $user->id ?>&role=1" class="dropdown-item">User</a></li>
                                        </ul>
        
                                    </div>

                                <?php endif ?>
                                
                                <?php if($auth->role_id >= 2): ?>

                                    <?php if($user -> suspended): ?>
                                        <a href="_actions/unsuspend.php?id=<?= $user->id ?>" class="btn btn-warning">Ban user</a>
                                    <?php else: ?>
                                        <a href="_actions/suspend.php?id=<?= $user->id ?>" class="btn btn-outline-warning">Ban user</a>
                                    <?php endif ?>

                                <?php endif ?>

                                <?php if($auth->role_id > 2): ?>
                                    <a href="_actions/delete.php?id=<?= $user->id ?>" class="btn btn-outline-danger">Delete</a>
                                <?php endif ?>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>

        </table>

    </div>


    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- jquery -->
	<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    
	<script src="https://cdn.datatables.net/2.0.1/js/dataTables.min.js"></script>
    <script>

        $(document).ready(function(){
			// console.log('hi');

			$('#myTable').DataTable();
		})

    </script>
</body>
</html>