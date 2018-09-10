<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" type="text/css" href="style.css">
	<title>Admin Creation Page</title>
</head>
<body>	
	<?php
	include 'connect.php';
  	if(empty($_POST["user_old"]) || empty($_POST["password_old"]))
	{
	echo '<div class= "prompt">Introducers username and password has to be given.</div>';
	}
	else
	{
	// Define $username and $password
		$oldUsername = mysqli_escape_string($db, $_POST['user_old']);
	  	$oldPassword = mysqli_real_escape_string($db, $_POST['password_old']);
		//echo "$username";
	  		$sql="SELECT * from admins where username = '$oldUsername' and password= '$oldPassword'";
			$result= mysqli_query($db, $sql);
			$mysqli_result= mysqli_fetch_array($result);
			if(mysqli_num_rows($result) == 1)
			{
				if(empty($_POST["user_new"]) || empty($_POST["password_new1"]) || empty($_POST["name_new"]))
				{
					echo '<div class= "prompt">All the fields are required.</div>';
				}
				else
				{
					$name = mysqli_escape_string($db, $_POST['name_new']);
					$username = mysqli_escape_string($db, $_POST['user_new']);
			  		$password1 = mysqli_real_escape_string($db, $_POST['password_new1']);
			  		$password2 = mysqli_real_escape_string($db, $_POST['password_new2']);

			  		$sql= "SELECT * FROM admins where username= '$username'";
			  		$res = mysqli_query($db, $sql);
			  		$res2=  mysqli_fetch_array($res);
			  		if(mysqli_num_rows($res) > 0)
			  		{
			  			echo '<div class= "prompt">The user your trying to create already exists, try a different username</div>';
			  		}
			  		else
			  		{
			  			if($password1 == $password2)
				  		{
				  			mysqli_query($db, "INSERT INTO admins(name, username, password) 
							VALUES ('$name','$username','$password1')");
							echo '<div class= "prompt">Contratulations!! New admin has been successfully created.</div>';
				  		}
				  		else
				  		{
				  			echo '<div class= "prompt">New admins password do not match with the confirmations password.</div>';
				  		}

				}
			}
	}
	else
	{
	echo '<div class= "prompt">Introducers username and/or password is incorrect.</div>';
	}
}
?>
</body>
</html>
