<?php
require_once './includes/auth-check.php';
require_once 'db/db_config.php';

if (!isset($_GET['id'])) {
	include './includes/error-message.php';
	header("Location: view_records.php");
} else {
	$id = $_GET['id'];

	$result = $crud->deleteAttendee($id);
	if ($result) {
		header("Location: view_records.php");
	} else {
		include './includes/error-message.php';
	}
}
