	<?php 
	$title = "Index";
	include "./includes/header.php"
	?>
	<h1>Hello world</h1>

	<?php
	$age = 21;
	$name = 'Michał';
	// echo '<h3>My name is ' . $name . ' and my age is ' . $age . ' 😀</h3>';
	echo "<h3>My name is $name  and my age is  $age 😀</h3>";

	echo "<button class='btn btn-primary'>Click me</button>"; 
		include "./includes/footer.php";
	?>
