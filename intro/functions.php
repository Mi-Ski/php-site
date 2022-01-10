	<?php 
	$title = "Functions";
	include "includes/header.php"
	?>
	<h1>Functions</h1>

	<?php 
		function writeMessage($name) {
			echo "<p>Your name is $name</p>";
		};

		writeMessage('Mi');
	?>
	<?php
		include "includes/footer.php";
	?>