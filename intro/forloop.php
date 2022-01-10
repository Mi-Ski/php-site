	<?php 
	$title = "For Loop";
	include "includes/header.php"
	?>
	<h1>For Loop</h1>
	<p>1</p>
	<p>2</p>

	<?php 
		for($count = 0; $count < 10; $count++) {
			echo "<p>hello world [$count]</p>";
		}
	?>
	<?php
		include "includes/footer.php";
	?>