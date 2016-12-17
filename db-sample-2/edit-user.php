<?php
$user_id = $_GET['id'];

include_once('db-connection.php');
include_once('UserDAO.php');
$userDao = new UserDAO($pdo);

$user = $userDao->getUser($user_id);
?>
<form action="update-user.php" method="POST">
<input type="hidden" name="id"
	value="<?php echo $user['id']; ?>">
First Name
<input type="text" name="first_name"
	value="<?php echo $user['first_name']; ?>">
<br />
Last Name
<input type="text" name="last_name"
	value="<?php echo $user['last_name']; ?>">
<br />
Email
<input type="text" name="email"
	value="<?php echo $user['email']; ?>">
<br />

<input type="submit" value="Update User">
</form>