<?php
include_once 'includes/session.php';

?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<title>Attendance | <?php echo $title ?></title>
</head>

<body>
	<div class="container container-main d-flex flex-column justify-content-between" style="min-height: 100vh;">

		<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
			<a class="navbar-brand" href="index.php">IT Conference</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Home <span class="sr-only"><?php echo $homeCurrent ?></span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="view_records.php">Attendees <span class="sr-only"><?php echo $attendeesCurrent ?></span></a>
					</li>
				</ul>
				<ul class="navbar-nav mx-auto">
					<?php if (!isset($_SESSION['user-id'])) { ?>
						<li class="nav-item active">
							<a class="nav-link" href="login.php">Log In<span class="sr-only"></span></a>
						</li>
					<?php } else { ?>
						<a href="#" class="nav-item nav-link text-warning">Hello, <?php echo $_SESSION['username'] ?>.</a>
						<a href="logout.php" class="nav-item nav-link">Log Out</a>
					<?php } ?>
				</ul>
			</div>
		</nav>