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
    Add User
</h1>

<form action="add-user.php" method="POST">
<label>First Name</label>
<input type="text" name="first_name" class="form-control">

<label>Last Name</label>
<input type="text" name="last_name" class="form-control">

<label>Email</label>
<input type="email" name="email" class="form-control">

<label>User Type</label>
<select name="type" class="form-control">
	<option value="admin">Administrator</option>
	<option value="manager">Manager</option>
	<option value="guest">Guest</option>
</select>

<label>Password</label>
<input type="password" name="passwd" class="form-control">


<input type="submit" value="Add User" class="btn btn-primary">
<a href="users.php" class="btn btn-danger">Cancel</a>
</form>


</div>

</div> <!-- /container -->

<script type="text/javascript" src="/libraries/jquery/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="/libraries/bootstrap/js/bootstrap.js"></script>
</body>
</html>