<!DOCTYPE html>
<html>
<head>
	<title>Cofirmation page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
	<body>
		<?php
		include 'connect.php';
		$name = mysqli_escape_string($db, $_POST['name']);
  		$licence = mysqli_real_escape_string($db, $_POST['licence_no']);
  		$engine = mysqli_real_escape_string($db, $_POST['eng_no']);
  		$address = mysqli_real_escape_string($db, $_POST['address']);
  		$phone = mysqli_real_escape_string($db, $_POST['phone']);
  		$mechanic_name = mysqli_real_escape_string($db, $_POST['mechanic']);
  		$date2 = mysqli_real_escape_string($db, $_POST['date2']);
		
		if(empty($_POST["name"]) || empty($_POST["licence_no"]) || empty($_POST["eng_no"]) || empty($_POST["address"]) || empty($_POST["phone"]) || empty($_POST["mechanic"]) || empty($_POST["date2"]) )
		{
		echo '<div class= "prompt">All the fields must be filled to make an appointment.</div>';
		}else
		{
			$sql= "SELECT * from jobs where licence_no='$licence' and appt_date= '$date2'";
			$res= mysqli_query($db, $sql);
			$array= mysqli_fetch_array($res);
			if(mysqli_num_rows($res)>0)
			{
				echo "<div class=\"prompt\">Oops!! Sorry $_POST[name], looks like you you have already made an appointment for that vehicle.</div>";
			}
			else
			{
			//taking the no of jobs already assigned
			$sql="SELECT * from mechanics where name = '$mechanic_name' and appt_date= '$date2'";
			$result= mysqli_query($db, $sql);
			$mysqli_result= mysqli_fetch_array($result);
			if(mysqli_num_rows($result)==1)
			{
				$current_no = $mysqli_result[2];
				if($current_no<4)
				{
					$current_no= $current_no+1;
					$sql="UPDATE mechanics set total_jobs = '$current_no' where name= '$mechanic_name' and appt_date= '$date2'";
					$result= mysqli_query($db, $sql);

					mysqli_query($db, "INSERT INTO jobs(client_name, licence_no, engine_no, address, phone, mechanic_name, appt_date) 
					VALUES ('$name','$licence','$engine','$address','$phone','$mechanic_name','$date2')");

					echo "<div class=\"prompt\">Thank you $_POST[name], your appointment has been set with our mechanic $_POST[mechanic] on $_POST[date2].</div>";
				}
				else
				{
					echo '<div class= "prompt">Your desired mechanic is not available on you desired date, please select a different mechanic, or a different day.</div>';
				}
			}
			else
			{
				mysqli_query($db, "INSERT INTO mechanics(name, appt_date, total_jobs) 
					VALUES ('$mechanic_name','$date2','1')");

				mysqli_query($db, "INSERT INTO jobs(client_name, licence_no, engine_no, address, phone, mechanic_name, appt_date) 
				VALUES ('$name','$licence','$engine','$address','$phone','$mechanic_name','$date2')");

				echo "<div class=\"prompt\">Thank you $_POST[name], your appointment has been set with our mechanic $_POST[mechanic] on $_POST[date2].</div>";
			}
		}
		}
		
		
	
?>

	</body>

</html>

