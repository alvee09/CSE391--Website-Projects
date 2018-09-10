<!DOCTYPE html>
<html>
<head>
	<title>Cofirmation page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
	<body >
		<?php
		include 'connect.php';
		session_start();
		$emp_id= $_SESSION['emp_id'];
		$post = mysqli_escape_string($db, $_POST['post']);
  		$skills1 = mysqli_real_escape_string($db, $_POST['skills1']);
  		//$skills2 = mysqli_real_escape_string($db, $_POST['skills2']);
  		//$skills3 = mysqli_real_escape_string($db, $_POST['skills3']);
  		$description = mysqli_real_escape_string($db, $_POST['description']);
  		$responsibility= mysqli_real_escape_string($db, $_POST['responsibility']);
  		$location = mysqli_real_escape_string($db, $_POST['location']);
  		$degree1 = mysqli_real_escape_string($db, $_POST['degree1']);
  		//$degree2 = mysqli_real_escape_string($db, $_POST['degree2']);
  		//$degree3 = mysqli_real_escape_string($db, $_POST['degree3']);
  		$salary = mysqli_real_escape_string($db, $_POST['salary']);
  		$date = mysqli_real_escape_string($db, $_POST['date']);

		mysqli_query($db, "INSERT INTO job_posts(id, comp_id, post, skills1, description, responsibility, location, education, salary, appt_deadline) 
		VALUES (null,'$emp_id','$post', '$skills1', '$description','$responsibility','$location','$degree1', '$salary', '$date')");

		//echo '<div class= "alert alert-primary">Contratulations!! Your job has been posted successfully.</div>';
		

			$_SESSION['emp_id']= $emp_id;
			header("Location: com_profile.php");
			?>
		
		</div>
	</body>

</html>