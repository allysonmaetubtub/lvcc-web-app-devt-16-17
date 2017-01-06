<?php

if (!empty($_POST)) {
	$new_data = array(
		'first_name' => $_POST['first_name'],
		'last_name' => $_POST['last_name'],
		'email' => $_POST['email'],
		'type' => $_POST['type'],
		'passwd' => $_POST['passwd']
	);

	include_once('db-connection.php');
	include_once('UserDAO.php');
	$userDao = new UserDAO($pdo);

	$userDao->addUser($new_data);

	// redirect to list of users page
	header('Location: /db-sample-2/users.php');
}

exit;