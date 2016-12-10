<?php
/**
 * La Verdad Christian College
 * Web Applications Development
 * @author Romack Natividad <romacknatividad@laverdad.edu.ph>
 * @since November 2016
 */
include_once('db-connection.php');
include_once('UserDAO.php');
$userDao = new UserDAO($pdo);
$users = $userDao->getAllUsers();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>USERS Table</title>
    <link rel="stylesheet" type="text/css" href="/libraries/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/libraries/bootstrap/css/bootstrap-theme.css">
</head>
<body>

<div class="container">

    <!-- Static navbar -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Web Applications Development 2</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>


    <!-- Main component for a primary marketing message or call to action -->
    <div class="row">
        <h1>
            <i class="glyphicon glyphicon-heart"></i>
            Users
        </h1>
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Date Created</th>
            </tr>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['id'];?></td>
                <td>
                    <?php
                    $full_name = $user['first_name'];
                    $full_name .= ' ' . $user['last_name'];
                    echo $full_name;
                    ?>
                </td>
                <td><?php echo $user['email'] ?></td>
                <td><?php echo $user['created_at'] ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>

</div> <!-- /container -->

<script type="text/javascript" src="/libraries/jquery/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="/libraries/bootstrap/js/bootstrap.js"></script>
</body>
</html>
