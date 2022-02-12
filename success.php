<?php
$title = 'Success';
$homeCurrent = '';
$attendeesCurrent = '';
require_once './includes/header.php';
require_once './db/db_config.php';
require_once './send-email.php';

// check if event is fired by the submit button
if (isset($_POST['submit'])) {
	// extracting values from the POST array
	$fname = $_POST['firstName'];
	$lname = $_POST['lastName'];
	$dob = $_POST['dateOfBirth'];
	$specialty_id = $_POST['specialty'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];

	// calling the function to insert values and check true/false
	$isSuccess = $crud->insertAttendees($fname, $lname, $email, $phone, $specialty_id, $dob);
	$specialtyName = $crud->getSpecialtyByID($specialty_id);
	// if ($isSuccess) {
	// 	SendMail::SendMail($email, 'Welcome to the IT conference!', 'You have successfully registered for this year\'s IT conference.');
	// 	include './includes/success-message.php';
	// } else {
	// 	include './includes/error-message.php';
	// }
}
?>


<div class="card" style="width: 18rem;">
	<div class="card-body">
		<h5 class="card-title"><?php echo $_POST['firstName'] . ' ' . $_POST['lastName'] ?></h5>
		<h6 class="card-subtitle mb-2 text-muted">Expertise: <?php echo $specialtyName['name'] ?></h6>
		<p class="card-text">Date of birth: <?php echo $_POST['dateOfBirth'] ?></p>
		<p class="card-text">Email address: <?php echo $_POST['email'] ?></p>
		<p class="card-text">Phone number: <?php echo $_POST['phone'] ?></p>
	</div>
</div>


<?php
require_once './includes/footer.php'
?>