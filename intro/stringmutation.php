	<?php 
	$title = "String Mutation";
	include "includes/header.php"
	?>
	<h1>Array</h1>

	<?php
		// concat
		$str1 = "lorem ipsum";
		$str2 = "dolor sit amet";

		echo $str1 . " " . $str2;

		// string functions 
		$name = "george";
		echo "<p>My capitalized name is: " . ucfirst($name) . '.</p>';
		echo "<p>" . ucwords($str2) . "</p>";
		echo "<p>" . strtoupper("UppErCase") . "</p>";
		echo "<p>" . strtolower("LOwERCaSE") . "</p>";
		echo "<p>" . str_repeat("ha", 5) . "</p>";

	?>
	<?php
		include "includes/footer.php";
	?>