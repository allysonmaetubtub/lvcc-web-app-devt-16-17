<?php

if (!empty($_POST)) {
	$user_id = $_POST['id'];
	$new_data = array(
		'first_name' => $_POST['first_name'],
		'last_name' => $_POST['last_name'],
		'email' => $_POST['email']
	);

	include_once('db-connection.php');
	include_once('UserDAO.php');
	$userDao = new UserDAO($pdo);

	$userDao->updateUser($user_id, $new_data);

	// redirect to list of users page
	header('Location: /db-sample-2/users.php');
}

exit;