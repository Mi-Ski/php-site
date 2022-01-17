<?php 
	$host = '127.0.0.1';
	$db = 'attendance';
	$user = 'root';
	$pass = '';
	$charset = 'utf8mb4';

	$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

	try {
		$pdo = new PDO($dsn, $user, $pass);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	} catch(PDOException $e) {
		$error = $e->getMessage();
		echo "<h1 class='text-danger'>No Database Found</h1>";
		echo "<p>$error</p>";
		// throw new PDOException($e->getMessage());	
	}

	require_once 'crud.php';
	$crud = new crud($pdo);
?>