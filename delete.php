<?php 
	require_once 'db/db_config.php';

	if($_GET['id']) {
		 $id = $_GET['id'];

		 $result = $crud->deleteAttendee($id); 
		 if($result) {
			 header("Location: view_records.php");
		 }

	} else {
		echo 'Error';
		return;
	}
?>