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

    <!-- Main component for a primary marketing message or call to action -->
    <div class="row">
        <h1>
            <i class="glyphicon glyphicon-heart"></i>
            Users
            <a class="btn btn-primary" href="add-user-form.php">Add User</a>
        </h1>
<table class="table table-striped table-bordered table-hover">
<tr>
    <th>ID</th>
    <th>Full Name</th>
    <th>Email</th>
    <th>Type</th>
    <th>Date Created</th>
    <th>&nbsp;</th>
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
    <td><?php echo $user['type'] ?></td>
    <td><?php echo $user['created_at'] ?></td>
    <td>

        <a class="btn btn-xs btn-primary"
            href="edit-user.php?id=<?php echo $user['id']; ?>">
            Edit
        </a>

        <a class="btn btn-xs btn-danger delete-user"
            data-id="<?php echo $user['id']; ?>"
            href="#">
            Delete
        </a>

    </td>
</tr>
<?php endforeach; ?>
</table>
    </div>

</div> <!-- /container -->

<script type="text/javascript" src="/libraries/jquery/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="/libraries/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.delete-user').on('click', function() {
        var answer = confirm("Are you sure you want to delete this record?");
        if (answer == true) {
            var user_id = $(this).data('id');
            location.href = "delete-user.php?id=" + user_id;
        } else {
            return false;
        }
    });
});
</script>
</body>
</html>
