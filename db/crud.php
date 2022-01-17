<?php 
	class crud {
		private $db;

		function __construct($connection)
		{
			$this->db = $connection;	
		}

		// insert a new record to the DB
		public function insert($fname, $lname, $email, $phone, $specialty_id, $dob) {
			try {
				// define SQL statement 
				$sql = "INSERT INTO attendee(firstname, lastname, dateofbirth, emailaddress, contactnumber, specialty_id) VALUES(:fname,:lname,:dob,:email,:phone,:specialty_id)";
				// prepare SQL statement for execution
				$statement = $this->db->prepare($sql);

				// bind all placeholders to actual values
				$statement->bindparam(':fname',$fname);
				$statement->bindparam(':lname',$lname);
				$statement->bindparam(':email',$email);
				$statement->bindparam(':phone',$phone);
				$statement->bindparam(':specialty_id',$specialty_id);
				$statement->bindparam(':dob',$dob);

				$statement->execute();
				return true;
			} catch (PDOException $e) {
				echo $e->getMessage();
				return false;
			}
		}
	}
?>