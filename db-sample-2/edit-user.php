<?php
$user_id = $_GET['id'];

include_once('db-connection.php');
include_once('UserDAO.php');
$userDao = new UserDAO($pdo);

$user = $userDao->getUser($user_id);
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
    Edit User
</h1>

<form action="update-user.php" method="POST">
<input type="hidden" name="id" value="<?php echo $user['id']; ?>">

<label>First Name</label>
<input type="text" name="first_name" class="form-control"
	value="<?php echo $user['first_name']; ?>">

<label>Last Name</label>
<input type="text" name="last_name" class="form-control"
	value="<?php echo $user['last_name']; ?>">

<label>Email</label>
<input type="text" name="email" class="form-control"
	value="<?php echo $user['email']; ?>">

<label>User Type</label>
<select name="type" class="form-control">
	<option value="admin" <?php if ($user['type'] == 'admin') echo "selected";?>>Administrator</option>
	<option value="manager" <?php if ($user['type'] == 'manager') echo "selected";?>>Manager</option>
	<option value="guest" <?php if ($user['type'] == 'guest') echo "selected";?>>Guest</option>
</select>
<br />

<input type="submit" value="Update User" class="btn btn-primary">
<a href="users.php" class="btn btn-danger">Cancel</a>
</form>

</div>

</div> <!-- /container -->

<script type="text/javascript" src="/libraries/jquery/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="/libraries/bootstrap/js/bootstrap.js"></script>
</body>
</html>