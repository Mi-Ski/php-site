<?php
class crud
{
	private $db;

	function __construct($connection)
	{
		$this->db = $connection;
	}

	// insert a new record to the DB
	public function insertAttendees($fname, $lname, $email, $phone, $specialty_id, $dob)
	{
		try {
			// define SQL statement 
			$sql = "INSERT INTO attendee(firstname, lastname, dateofbirth, emailaddress, contactnumber, specialty_id) VALUES(:fname,:lname,:dob,:email,:phone,:specialty_id)";
			// prepare SQL statement for execution
			$statement = $this->db->prepare($sql);

			// bind all placeholders to actual values
			$statement->bindparam(':fname', $fname);
			$statement->bindparam(':lname', $lname);
			$statement->bindparam(':email', $email);
			$statement->bindparam(':phone', $phone);
			$statement->bindparam(':specialty_id', $specialty_id);
			$statement->bindparam(':dob', $dob);

			$statement->execute();
			return true;
		} catch (PDOException $e) {
			echo $e->getMessage();
			return false;
		}
	}
	public function editAttendee($id, $fname, $lname, $email, $phone, $specialty_id, $dob)
	{
		try {
			$sql = "UPDATE `attendee` SET `firstname`=:fname,`lastname`=:lname,`dateofbirth`=:dob,`emailaddress`=:email,`contactnumber`=:phone,`specialty_id`=:specialty_id WHERE `attendee_id` = :id";

			$statement = $this->db->prepare($sql);

			$statement->bindparam(':id', $id);
			$statement->bindparam(':fname', $fname);
			$statement->bindparam(':lname', $lname);
			$statement->bindparam(':email', $email);
			$statement->bindparam(':phone', $phone);
			$statement->bindparam(':specialty_id', $specialty_id);
			$statement->bindparam(':dob', $dob);

			$statement->execute();

			return true;
		} catch (PDOException $e) {
			echo $e->getMessage();
			return false;
		}
	}

	public function getAttendees()
	{
		try {
			$sql = "SELECT * FROM `attendee` a INNER  JOIN specialties s on a.specialty_id = s.specialty_id";
			return $this->db->query($sql);
		} catch (PDOException $e) {
			echo $e->getMessage();
			return false;
		}
	}

	public function getSpecialties()
	{
		try {
			$sql = "SELECT * FROM `specialties`";
			$result = $this->db->query($sql);
			return $result;
		} catch (PDOException $e) {
			echo $e->getMessage();
			return false;
		}
	}

	public function getAttendeeDetails($id)
	{
		try {
			$sql = "SELECT * FROM `attendee` a INNER JOIN `specialties` s ON a.specialty_id = s.specialty_id WHERE attendee_id = :id";
			$statement = $this->db->prepare($sql);
			$statement->bindparam(':id', $id);
			$statement->execute();
			$result = $statement->fetch();
			return $result;
		} catch (PDOException $e) {
			echo $e->getMessage();
			return false;
		}
	}

	public function deleteAttendee($id)
	{
		try {
			$sql = "SELECT * FROM `attendee` a INNER JOIN `specialties` s ON a.specialty_id = s.specialty_id WHERE attendee_id = :id";
			$statement = $this->db->prepare($sql);
			$statement->bindparam(':id', $id);
			$statement->execute();
			$result = $statement->fetch();
			return $result;
		} catch (PDOException $e) {
			echo $e->getMessage();
			return false;
		}
	}
}
