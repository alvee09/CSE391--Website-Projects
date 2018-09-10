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

	$sql = "SELECT recruiting from employer where id= '$emp_id'";
	$result = mysqli_query($db, $sql);
	$result2= mysqli_fetch_assoc($result);
	if($result2['recruiting']== "Yes")
	{
		mysqli_query($db, "UPDATE employer set recruiting = 'No' where id= '$emp_id'" );
		mysqli_query($db, "DELETE from job_posts where comp_id= '$emp_id'");
		header("Location: com_profile.php");
	}
	else
	{
		mysqli_query($db, "UPDATE employer set recruiting = 'Yes' where id= '$emp_id'" );
		header("Location: com_profile.php");
	}
	?>
</body>
</html>