<?php

if (!empty($_GET['id'])) {
	$user_id = $_GET['id'];

	include_once('db-connection.php');
	include_once('UserDAO.php');
	$userDao = new UserDAO($pdo);

	$userDao->deleteUser($user_id);

	// redirect to list of users page
	header('Location: /db-sample-2/users.php');
}

exit;