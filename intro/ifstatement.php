	<?php 
	$title = "If Statement";
	include "includes/header.php"
	?>
	<h1>If Statement</h1>
		<?php 
			echo "<h2>If statement</h2>";

			$grade = 87;
			$passingPercentage = 50;
			if ($grade >= $passingPercentage) {
				echo "<h3 style='color: green'>You have passed!</h3>" ;
			} else {

				echo "<h3 style='color: red'>You have failed!</h3>" ;
			}
		?>
	<?php
		include "includes/footer.php";
	?>