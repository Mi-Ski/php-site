<?php
$title = 'Log In';
$homeCurrent = "";
$attendeesCurrent = '';
require_once './includes/header.php';
require_once './db/db_config.php';

// if data was submitted via the POST method
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	// prepare username
	$username = strtolower(trim($_POST['username']));
	$password = $_POST['password'];
	// pass x username combination
	$hashed_pass = md5($password.$username);

	$result = $user->getUser($username, $hashed_pass);
	if(!$result) {
		echo '<div class="alert alert-danger">Username or password is incorrect.</div>';
	} else {
		$_SESSION['username'] = $username;
		$_SESSION['user-id'] = $result['id'];
		header("Location: view_records.php");
	}
}
?>

<form class="mb-5" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
	<h1 class="text-center"><?php echo $title ?></h1>
	<table class="table table-sm mb-5">
		<tr>
			<td>
				<label for="username">Username: *</label>
			</td>
			<td>
				<input type="text" name="username" class="form-control" id="username" value="<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['username']; ?>">
			</td>
		</tr>
		<tr>
			<td>
				<label for="rassword">Password: *</label>
			</td>
			<td>
				<input type="password" name="password" class="form-control" id="password">
			</td>
		</tr>
	</table>
		<input  type="submit" value="Login" class="btn btn-primary btn-block mb-3">
		<a  href="#">Forgot password?</a>

</form>

<?php include_once 'includes/footer.php' ?>