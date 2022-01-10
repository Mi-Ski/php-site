	<?php 
	$title = "While/Do While Loop";
	include "includes/header.php"
	?>
	<h1>While/Do While loop</h1>

	<h3>while loop</h3>
	<?php
		$grade = 0;
		while ($grade < 10) {
			echo "<p> grade: $grade</p>";
			$grade++;
		}
		echo 'exit loop';
	?>


	<h3>do while loop</h3>
	<?php
		$grade = 0;
		do{
			echo "<p style='color: blue'> grade: $grade</p>";
			$grade+=1.5;
		} while($grade < 10);
		echo 'exit loop';
	?>
	<?php
		include "includes/footer.php";
	?>