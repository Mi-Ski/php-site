<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP PRIMER INDEX</title>
	<link rel="stylesheet" href="./style.php" media="screen">
</head>

<body>
	<style>
		* {
			font-family: 'Fira Code', sans-serif;
		}

		body {
			background-color: #6b697f;
			padding: 0px 100px;
		}

		h1,
		h3,
		p {
			background-color: #2B2A33;
			padding: 20px 10px;
			color: #fff;
			border-bottom: 4px solid #FFCE3C;
		}
	</style>

	<h1>Hello world</h1>

	<?php
	echo '<p>asdf</p>';
	?>
	<?php
	$age =  21;
	$name = 'Michał';
	// echo '<h3>My name is ' . $name . ' and my age is ' . $age . ' 😀</h3>';
	echo "<h3>My name is $name  and my age is  $age 😀</h3>"
	?>


	<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro veniam animi aspernatur autem delectus error facere fugiat exercitationem, id aut.</p>

</body>

</html>