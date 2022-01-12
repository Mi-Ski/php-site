<?php
$title = 'Edit';
$homeCurrent = "";
$attendeesCurrent = '';
require_once './includes/header.php';
require_once './db/db_config.php';
$crudSpecialtiesResult = $crud->getSpecialties();

if (!isset($_GET['id']) || empty($_GET['id'])) {
	include './includes/error-message.php';
	header("Location: view_records.php");
} else {
	$attendee = $crud->getAttendeeDetails($_GET['id']);

?>

<h1 class="text-center my-5">Edit a record</h1>

<form method="post" action="./editpost.php">
	<input type="hidden" value="<?php echo $attendee['attendee_id'] ?>" name="id">
	<div class="mb-3">
		<label for="firstName" class="form-label">First Name</label>
		<input type="text" class="form-control" id="firstName" name="firstName" value="<?php echo $attendee['firstname'] ?>" aria-describedby="emailHelp" placeholder="Enter First Name">
	</div>

	<div class="mb-3">
		<label for="lastName" class="form-label">Last Name</label>
		<input type="text" class="form-control" id="lastName" name="lastName" aria-describedby="emailHelp" value="<?php echo $attendee['lastname'] ?>" placeholder="Enter Last Name">
	</div>

	<div class="mb-3">
		<label for="dateOfBirth" class="form-label">Date Of Birth</label>
		<input type="date" value="<?php echo $attendee['dateofbirth'] ?>" min="1900-01-01" max="2004-1-1" class="form-control" id="dateOfBirth" name="dateOfBirth">
	</div>

	<div class="mb-3">
		<label for="specialty" class="form-label">Area Of Expertise</label>
		<select id="specialty" name="specialty" class="form-select" aria-label="Default select example">
			<!-- get value in the 'name', 'id' column from res arr -->
			<?php while ($r = $crudSpecialtiesResult->fetch(PDO::FETCH_ASSOC)) { ?>
				<option value="<?php echo $r['specialty_id'] ?>" <?php if($r['specialty_id'] == $attendee['specialty_id']) echo 'selected' ?>><?php echo $r['name']; ?></option>
			<?php } ?>
		</select>
	</div>

	<div class="mb-3">
		<label for="email" class="form-label">Email Address</label>
		<input type="email" class="form-control"value="<?php echo $attendee['emailaddress'] ?>" id="email" name="email">
	</div>

	<div class="mb-3">
		<label for="phone" class="form-label">Phone Number</label>
		<input type="phone" class="form-control"value="<?php echo $attendee['contactnumber'] ?>" id="phone" name="phone">
	</div>

	<button type="submit" name="submit" class="btn btn-success btn-lg">Save Changes</button>

	<div id="emailHelp" class="form-text">We'll never share your information with anyone.</div>
</form>

<?php
}
require_once './includes/footer.php'
?>