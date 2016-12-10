<?php
$host = '127.0.0.1';
$username = 'root';
$password = 'secret';
$db = 'lvcc_web2';
$dsn = "mysql:host={$host};dbname={$db}";
$pdo = null;
try {
	$pdo = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
	echo $e->getMessage();
	die();
}