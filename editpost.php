<?php 
require_once 'db/db_config.php';

if (isset($_POST['submit'])) {
	// extracting values from the POST array
	$id = $_POST['id'];
	$fname = $_POST['firstName'];
	$lname = $_POST['lastName'];
	$dob = $_POST['dateOfBirth'];
	$specialty_id = $_POST['specialty'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];

	// call crud function
	$result = $crud->	editAttendee($id, $fname, $lname, $email, $phone, $specialty_id, $dob);

	// redirect to index.php
	if ($result) {
		header("Location: view_records.php");
	} else {
		echo 'Error';
	}
} else {
	echo 'Error';
}
?>