<?php

class UserDAO {
	private $db;
	public function __construct(PDO $db) {
		$this->db = $db;
	}
	public function getAllUsers() {
		$sql = 'SELECT * FROM users';
		$sth = $this->db->prepare($sql);
		$sth->execute();
		$users = $sth->fetchAll(PDO::FETCH_ASSOC);
		return $users;
	}
}