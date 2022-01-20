<?php 
class user{
	private $db;

	function __construct($conn)
	{
		$this->db = $conn;		
	}

	public function insertUser($username,$password) {
		try {
			// check if entered username exists
			$result = $this->getUserByUsername($username);
			if ($result['num'] > 0) {
				return false;
			} else {
				$encrypted_pass = md5($password.$username);
			// define SQL statement 
			$sql = "INSERT INTO users(username, password) VALUES(:username, :password)";
			// prepare SQL statement for execution
			$statement = $this->db->prepare($sql);

			// bind all placeholders to actual values
			$statement->bindparam(':username', $username);
			$statement->bindparam(':password', $encrypted_pass);

			$statement->execute();
			return true;
			}
		} catch (PDOException $e) {
			echo $e->getMessage();
			return false;
		}
	}
	
	public function getUser($username,$password) {
		try {
			$sql = "SELECT * FROM users WHERE username = :username AND password = :password";
			$statement = $this->db->prepare($sql);
			$statement->bindparam(':username', $username);
			$statement->bindparam(':password', $password);
			$statement->execute();
			$result = $statement->fetch();
			return $result;
		} catch (PDOException $e) {
			echo $e->getMessage();
			return false;
		}
	}

	public function getUserByUsername($username) {
		// makes sure there are not 2 users with the same username
		try {
			$sql = "SELECT count(*) as num FROM users WHERE username = :username";
			$statement = $this->db->prepare($sql);
			$statement->bindparam(':username', $username);
			$statement->execute();
			$result = $statement->fetch();
			return $result;
		} catch (PDOException $e) {
			echo $e->getMessage();
			return false;
		}
	}
}
