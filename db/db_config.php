<?php 
// local dev version
	// $host = '127.0.0.1';
	// $db = 'attendance';
	// $usr = 'root';
	// $pass = '';
	// $charset = 'utf8mb4';

	// remote db version
	$host = 'sql11.freesqldatabase.com';
	$db = 'sql11473871';
	$usr = 'sql11473871';
	$pass = 'gNnexGLIga';
	$charset = 'utf8mb4';


	$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

	try {
		$pdo = new PDO($dsn, $usr, $pass);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	} catch(PDOException $e) {
		$error = $e->getMessage();
		echo "<h1 class='text-danger'>No Database Found</h1>";
		echo "<p>$error</p>";
		// throw new PDOException($e->getMessage());	
	}

	require_once 'crud.php';
	$crud = new crud($pdo);
	require_once 'user.php';
	$user = new user($pdo);

	$user->insertUser('admin', 'password');
?>