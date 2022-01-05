	<?php 
	$title = "Switch Statement";
	include "includes/header.php"
	?>
	<h1>Switch-Statements</h1>
	<?php
		$grade = 'A';

		switch($grade) {
			case 'A':
				echo "<h2>You did great!</h2>";
				break;
			
			case 'B':
				echo "<h2>You did well!</h2>";
				break;
		
			default:
				echo "<h2>You have failed :(</h2>";
				break;
		}
	?>
	<?php
		include "includes/footer.php";
	?>