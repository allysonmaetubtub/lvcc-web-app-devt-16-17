<?php
$host = '127.0.0.1';
$username = 'root';
$password = 'secret';
$db = 'lvcc_web2';
$dsn = "mysql:host={$host};dbname={$db}";

try {
    $pdo_conn = new PDO($dsn, $username, $password);
    $sql = "SELECT * FROM users WHERE first_name = :name";
    $sth = $pdo_conn->prepare($sql);
    $param = array(':name' => 'Jane');
    $sth->execute($param);
    // $users = $pdo_conn->query("SELECT * FROM users");
    $users = $sth->fetchAll(PDO::FETCH_ASSOC);
    foreach ($users as $user) {
        print_r($user);
    }
    $pdo_conn = null;
} catch (PDOException $e) {
    echo $e->getMessage();
}

