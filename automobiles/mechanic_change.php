<<!DOCTYPE html>
<html>
<head>
	<title>
		Mechanic Change
	</title>
</head>
<body>
	<?php
	include 'connect.php';
	session_start();
		$new_mechanic_name= mysqli_real_escape_string($db, $_POST['mechanic2']);
		$appointmentDate= $_SESSION['appointmentDate'];
		$oldMechanicname = $_SESSION['oldMech'];
		$sql="SELECT * from mechanics where name = '$new_mechanic_name' and appt_date= '$appointmentDate'";
			$result= mysqli_query($db, $sql);
			$mysqli_result= mysqli_fetch_array($result);
			if(mysqli_num_rows($result)==1)
			{
				$current_no = $mysqli_result[2];
				if($current_no<4)
				{
					$current_no= $current_no+1;
					$sql="UPDATE mechanics set total_jobs = '$current_no' where name= '$new_mechanic_name' and appt_date= '$appointmentDate'";
					$result= mysqli_query($db, $sql);

					$sql= "UPDATE jobs SET mechanic_name= '$new_mechanic_name' where mechanic_name = '$oldMechanicname' and appt_date= '$appointmentDate'";
					$result= mysqli_query($db, $sql);

					$sql= "SELECT * from mechanics where name= '$oldMechanicname' and appt_date= '$appointmentDate'";
					$result= mysqli_query($db, $sql);
					$count = mysqli_fetch_array($result);
					$jobCount = $count[2];
					$jobCount = $jobCount-1;

					mysqli_query($db, "UPDATE mechanics set total_jobs= '$jobCount' where name= '$oldMechanicname' and appt_date= '$appointmentDate'");	

					echo "<div class=\"prompt\">Mechanic has been changed from $oldMechanicname to $new_mechanic_name as you requested.</div>";
				}
				else
				{
					echo '<div class= "prompt">Your desired mechanic is not available on you desired date, please select a different mechanic, or a different day.</div>';
				}
			}
			else
			{
				mysqli_query($db, "INSERT INTO mechanics(name, appt_date, total_jobs) 
					VALUES ('$new_mechanic_name','$appointmentDate','1')");

				$sql= "UPDATE jobs SET mechanic_name= '$new_mechanic_name' where mechanic_name = '$oldMechanicname' and appt_date= '$appointmentDate'";
					$result= mysqli_query($db, $sql);

				$sql= "SELECT * from mechanics where name= '$oldMechanicname' and appt_date= '$appointmentDate'";
					$result= mysqli_query($db, $sql);
					$count = mysqli_fetch_array($result);
					$jobCount = $count[2];
					$jobCount = $jobCount-1;

					mysqli_query($db, "UPDATE mechanics set total_jobs= '$jobCount' where name= '$oldMechanicname' and appt_date= '$appointmentDate'");	

				echo "<div class=\"prompt\">Mechanic has been changed from $oldMechanicname to $new_mechanic_name as you requested.</div>";
			}
	?>
</body>
</html>