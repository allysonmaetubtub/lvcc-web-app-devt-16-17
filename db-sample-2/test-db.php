<?php

include "db-connection.php";
include "UserDAO.php";

$userDao = new UserDAO($pdo);

$user_id = 7;

$user = $userDao->getUser($user_id);
print_r($user);
exit;














$user = array(
	'first_name' => 'Abner',
	'last_name' => 'Zabala',
	'email' => 'zabala.abner@gmail.com',
	'passwd' => 'secretpasscode'
);

$id = 4;

$userDao->updateUser($id, $user);
exit;












$users = array(
	array(
		'first_name' => 'John',
		'last_name' => 'De Leon',
		'email' => 'johndeleon@gmail.com',
		'passwd' => 'secret'
	),
	array(
		'first_name' => 'Michaela',
		'last_name' => 'Aranas',
		'email' => 'ellaaranas@gmail.com',
		'passwd' => 'secret'
	)
);

foreach ($users as $user) {
	$userDao->addUser($user);	
}


