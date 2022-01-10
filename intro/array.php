	<?php 

	$title = "Array";
	include "includes/header.php"
	?>
	<h1>Array</h1>

	<?php
		$numArr = array(1,12,2,3,32,4,2342,323,23,23,22);
		$numArrLength = count($numArr);

		echo "<h1>Length of the array is: $numArrLength</h1>"; 
		echo "<p>5th element is $numArr[4]</p>";

		$total = 0;
		for($i = 0; $i < $numArrLength; $i++) {
			$total+=$numArr[$i];
		}
		echo "<h4>Array sum is: $total</h4>"


	?>
	<?php
		include "includes/footer.php";
	?>