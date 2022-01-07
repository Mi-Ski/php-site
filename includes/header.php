<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>PHP Primer - <?php echo $title ?></title>
	<!-- <style>
		* {
			font-family: 'Fira Code', sans-serif;
		}

		body {
			background-color: #6b697f;
			width: 90vw;
		}

		h1,
		h3,
		p,
		a,
		a:link,
		a:visited {
			background-color: #2B2A33;
			padding: 20px 10px;
			color: #fff;
			border-bottom: 4px solid #FFCE3C;
			min-width: 35rem;
			font-size: 14px;
		}

		h1 {
			text-align: center;
		}

		li {
			list-style: none;
			margin: 1.5rem;
			min-width: max-content;
		}

		ul {
			display: flex;
			justify-content: space-evenly;
			align-items: center;
			flex-wrap: wrap;
			text-align: center;
			padding-bottom: 2rem;
			margin-bottom: 8rem;
			box-shadow: 0rem .4rem 0rem #FFCE3C, 0rem 3.4rem 0rem #2B2A33;
		}
	</style> -->
</head>

<body>

	<div class="container d-flex" style="flex-direction: column; min-height: 100vh">
		<h1>PHP basic examples:</h1>
		<ul class="nav">
			<li class="nav-item "><a data-toggle="tab" class="nav-link " href="array.php">Simple array and printouts</a></li>
			<li class="nav-item"><a data-toggle="tab" class="nav-link" href="forloop.php">Simple for loop</a></li>
			<li class="nav-item"><a data-toggle="tab" class="nav-link" href="whiledowhileloop.php">While & Do While loop</a></li>
			<li class="nav-item"><a class="nav-link" href="ifstatement.php">Basic if statement</a></li>
			<li class="nav-item"><a data-toggle="tab" class="nav-link" href="switchstatement.php">Simple switch statement</a></li>
			<li class="nav-item"><a data-toggle="tab" class="nav-link" href="stringmutation.php">String manipulation methods</a></li>
			<li class="nav-item"><a data-toggle="tab" class="nav-link" href="timedatemutation.php">Time and date manipulation methods</a></li>
			<li class="nav-item"><a data-toggle="tab" class="nav-link" href="functions.php">Functions</a></li>
		</ul>
