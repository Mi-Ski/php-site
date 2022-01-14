<?php
$title = 'Home';
require_once './includes/header.php';
?>

<h1 class="text-center">IT Conference Registration</h1>
<form>
	<div class="mb-3">
		<label for="firstName" class="form-label">First Name</label>
		<input type="email" class="form-control" id="firstName" aria-describedby="emailHelp" placeholder="Enter First Name">
	</div>
	<div class="mb-3">
		<label for="lastName" class="form-label">Last Name</label>
		<input type="email" class="form-control" id="lastName" aria-describedby="emailHelp" placeholder="Enter Last Name">
	</div>
	<div class="mb-3">
		<label for="dateOfBirth" class="form-label">Date Of Birth</label>
		<input type="date" value="2000-01-22"
       min="1900-01-01" max="2004-1-1" class="form-control" id="dateOfBirth">
	</div>
	<div class="mb-3">
		<label for="specialty" class="form-label">Area Of Expertise</label>
		<select id="specialty" class="form-select" aria-label="Default select example">
			<option selected value="0">Software Developer</option>
			<option value="1">Databse Admin</option>
			<option value="2">Project Manager</option>
			<option value="3">HR</option>
			<option value="4">Other</option>
		</select>
		<div id="emailHelp" class="form-text">We'll never share your information with anyone.</div>
	</div>
	<div class="mb-3">
		<label for="email" class="form-label">Email Address</label>
		<input type="email" class="form-control" id="email">
	</div>
	<div class="mb-3">
		<label for="phone" class="form-label">Phone Number</label>
		<input type="phone" class="form-control" id="phone">
	</div>
	
	<div class="mb-3 form-check">
		<input type="checkbox" class="form-check-input" id="exampleCheck1">
		<label class="form-check-label" for="exampleCheck1">Check me out</label>
	</div>
	<button type="submit" class="btn btn-primary btn-lg">Submit</button>
</form>

<?php
require_once './includes/footer.php'
?>