<?php
$title = 'Attendee list';
$homeCurrent = "";
$attendeesCurrent = '(current)';
require_once './includes/header.php';
require_once './includes/auth-check.php';
require_once './db/db_config.php';

$results = $crud->getAttendees();
?>

<table class="table">
	<tr class="table-secondary">
		<th>#</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Specialty</th>
<th style="text-align: center;">Actions</th>
	</tr>
	<?php while ($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
		<tr>
			<td><?php echo $r['attendee_id'] ?></td>
			<td><?php echo $r['firstname'] ?></td>
			<td><?php echo $r['lastname'] ?></td>
			<td><?php echo $r['name'] ?></td>
			<td style="text-align: center;">
				<a href="view.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-primary me-2">View</a>
				<a href="edit.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-warning btn-sm">Edit</a>
				<a onclick="return confirm('Are you sure you want to delete this record?')" href="delete.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-danger btn-sm">Delete</a>
			<td>
		</tr>
	<?php } ?>
</table>

<?php
require_once './includes/footer.php'
?>