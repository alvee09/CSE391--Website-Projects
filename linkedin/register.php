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
		$name = mysqli_escape_string($db, $_POST['name']);
  		$username = mysqli_real_escape_string($db, $_POST['username']);
  		$password = mysqli_real_escape_string($db, $_POST['password']);
  		$password2 = mysqli_real_escape_string($db, $_POST['password2']);
  		$address = mysqli_real_escape_string($db, $_POST['address']);
  		$email= mysqli_real_escape_string($db, $_POST['email']);
  		$contact = mysqli_real_escape_string($db, $_POST['contact']);
  		$location = mysqli_real_escape_string($db, $_POST['location']);
  		$emp_status = mysqli_real_escape_string($db, $_POST['emp_status']);
  		$degree1 = mysqli_real_escape_string($db, $_POST['degree1']);
  		//$degree2 = mysqli_real_escape_string($db, $_POST['degree2']);
  		//$degree3 = mysqli_real_escape_string($db, $_POST['degree3']);
  		$company = mysqli_real_escape_string($db, $_POST['company']);
		$designation = mysqli_real_escape_string($db, $_POST['designation']);
		$skill1 = mysqli_real_escape_string($db, $_POST['skill1']);
		//$skill2 = mysqli_real_escape_string($db, $_POST['skill2']);
		//$skill3 = mysqli_real_escape_string($db, $_POST['skill3']);

		$sql= "SELECT * FROM employee where username= '$username'";
		$res = mysqli_query($db, $sql);
		//$res2=  mysqli_fetch_array($res);
		if(mysqli_num_rows($res) > 0)
			{
			 echo '<div class= "background center">The username you are using has already been used, try a different username</div>';
			}
			  		else
			  		{
			  			if($password == $password2)
				  		{

							mysqli_query($db, "INSERT INTO employee(id, name, address, phone, email, education, emp_status, location, company, designation, skills_1, username, password) 
				  			VALUES (null,'$name','$address','$contact','$email', '$degree1','$emp_status','$location', '$company','$designation','$skill1','$username','$password')");

							$sql2= "SELECT id from employee where username= '$username'";
							$res2= mysqli_query($db, $sql2);
							$res3= mysqli_fetch_array($res2);
							$_SESSION['user_id']= $res3[0];
							header("Location: emp_profile.php");

							//echo '<div class= "prompt">Contratulations!! New admin has been successfully created.</div>';
				  		}
				  		else
				  		{
				  			echo '<div class= "background center">Your password does not match with the confirmation password.</div>';
				  		}

					}
			
		
	
?>

	</body>

</html>