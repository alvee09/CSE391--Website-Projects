<!DOCTYPE html>
<html>
<head>
	<title>Cofirmation page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
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
  		$sector = mysqli_real_escape_string($db, $_POST['sector']);
  		$recruiting = mysqli_real_escape_string($db, $_POST['recruiting']);

		$sql= "SELECT * FROM employer where username= '$username'";
		$res = mysqli_query($db, $sql);
		//$res2=  mysqli_fetch_array($res);
		if(mysqli_num_rows($res) > 0)
			{
			 echo '<div class= "prompt">The username you are using has already been used, try a different username</div>';
			}
			  		else
			  		{
			  			if($password == $password2)
				  		{

							mysqli_query($db, "INSERT INTO employer(id, name, sector, contact, email, address, recruiting, username, password) 
				  			VALUES (null,'$name','$sector','$contact', '$email','$address', '$recruiting', '$username','$password')");


							echo '<div class= "prompt">Contratulations!! New admin has been successfully created.</div>';
							if($recruiting == "Yes")
							{
								$sql = "SELECT id from employer where username= '$username'";
								$res2= mysqli_query($db, $sql);
								$res3=  mysqli_fetch_array($res2);
								$id= $res3[0];
								//$_SESSION('name2')= $row['name'];
								header("Location: post_job.php? employer_id= $id");

							}
							
				  		}
				  		else
				  		{
				  			echo '<div class= "prompt">New admins password do not match with the confirmations password.</div>';
				  		}

					}
			
		
	
?>

	</body>

</html>