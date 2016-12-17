<?php

class UserDAO {
	private $db;

	/**
	 * Constructor expects a PDO object
	 * @param PDO $db
	 */
	public function __construct(PDO $db) {
		$this->db = $db;
	}

	/**
	 * Fetch all the users from the `users` table
	 * @return array
	 */
	public function getAllUsers() {
		$sql = 'SELECT * FROM users';
		$sth = $this->db->prepare($sql);
		$sth->execute();
		$users = $sth->fetchAll(PDO::FETCH_ASSOC);
		return $users;
	}

	/**
	 * Fetch one user from the `users` table
	 * @param integer $user_id
	 * @return array
	 */
	public function getUser($user_id) {
		$sql = 'SELECT
					id,
					first_name,
					last_name,
					email
				FROM users
				WHERE
					id = :user_id';
		$sth = $this->db->prepare($sql);
		$param = array(
			':user_id' => $user_id
		);
		$sth->execute($param);
		$user = $sth->fetch(PDO::FETCH_ASSOC);
		return $user;
	}

	/**
	 * Creates a new user on the `users` table
	 * @param array $user
	 * @return boolean
	 */
	public function addUser($user) {
		$sql = "INSERT INTO users
				SET
					first_name = :first_name,
					last_name = :last_name,
					email = :email,
					passwd = :passwd,
					created_at = CURRENT_TIMESTAMP";
		$sth = $this->db->prepare($sql);
		$params = array(
			':first_name' => $user['first_name'],
			':last_name' => $user['last_name'],
			':email' => $user['email'],
			':passwd' => $user['passwd']
		);
		$sth->execute($params);
	}

	/**
	 * Updates user details
	 * @param integer $user_id
	 * @param array $data
	 * @return boolean
	 */
	public function updateUser($user_id, $data) {
		$sql = "UPDATE users
				SET
					first_name = :first_name,
					last_name = :last_name,
					email = :email,
					passwd = :passwd
				WHERE
					id = :user_id";
		$sth = $this->db->prepare($sql);
		// Bind data
		$params = array(
			':first_name' => $data['first_name'],
			':last_name' => $data['last_name'],
			':email' => $data['email'],
			':passwd' => $data['passwd'],
			':user_id' => $user_id,
		);
		$sth->execute($params);
	}
}