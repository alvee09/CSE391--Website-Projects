<!DOCTYPE html>
<html>
<head>
	<title>Update Recruitment Status</title>
</head>
<body>
	<?php
	include 'connect.php';
	session_start();
	$emp_id= $_SESSION['emp_id'];
	mysqli_query($db, "UPDATE employer set recruiting = 'Yes' where id= '$emp_id'");
	header("Location: post_job.php? employer_id= $emp_id");

	?>
</body>
</html>