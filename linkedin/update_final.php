<!DOCTYPE html>
<html>
<head>
	<title>Cofirmation page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style type="text/css">
	body, html {
    height: 100%;
}
.background{
    background-image: url("images/user_update.jpeg");
    width: 100%;
    height: 100%;
    background-position: center;
     background-repeat: no-repeat;
     background-size: cover;
     }
      .center
     {
     	color: white;
     	padding-top: 20%;
     	text-align: center;
     	font-size: 500%;

     }
</style>
	<body>
		<?php
		include 'connect.php';
		session_start();
		$user_id= $_SESSION['user_id'];
  		$email= mysqli_real_escape_string($db, $_POST['email']);
  		$contact = mysqli_real_escape_string($db, $_POST['contact']);
  		$emp_status = mysqli_real_escape_string($db, $_POST['emp_status']);
  		
  		$company = mysqli_real_escape_string($db, $_POST['company']);
		$designation = mysqli_real_escape_string($db, $_POST['designation']);
		
		$sql= "UPDATE employee set email= '$email', 
		phone= '$contact', emp_status ='$emp_status', company = '$company',
		designation = '$designation'  where id= '$user_id'";
		$res = mysqli_query($db, $sql);
		header("Location: emp_profile.php");
	
?>

	</body>

</html>