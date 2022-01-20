<?php
$title = 'Registration Details';
$homeCurrent = "";
$attendeesCurrent = '';
require_once './includes/header.php';
require_once './includes/auth-check.php';
require_once './db/db_config.php';

// Get attendee by id
if(isset($_GET['id'])) {
	$id = $_GET['id'];
	$result = $crud->getAttendeeDetails($id);
} else {
	echo "<h1 class='text-danger'>Something went wrong.</h1>";
	require './includes/footer.php';
	return;
}
?>

<div class="card" style="width: 18rem;">
	<div class="card-body">
		<h5 class="card-title"><?php echo $result['firstname'] . ' ' . $result['lastname'] ?></h5>
		<h6 class="card-subtitle mb-2 text-muted">Expertise: <?php echo $result['name'] ?></h6>
		<p class="card-text">Date of birth: <?php echo $result['dateofbirth'] ?></p>
		<p class="card-text">Email address: <?php echo $result['emailaddress'] ?></p>
		<p class="card-text">Phone number: <?php echo $result['contactnumber'] ?></p>
	</div>
</div>

<?php
require './includes/footer.php'
?>