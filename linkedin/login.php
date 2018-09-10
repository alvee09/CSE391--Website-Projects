<!DOCTYPE html>
<html>
	<head>
		<title>Administrator Dashboard</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<style>
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
		$username=mysqli_escape_string($db,$_POST['username']);
		$password=mysqli_escape_string($db,$_POST['password']);
	//echo "$username";
  		$sql="SELECT * from employee where username = '$username' and password= '$password'";
		$result= mysqli_query($db, $sql);
		$mysqli_result= mysqli_fetch_array($result);

		if(mysqli_num_rows($result) == 1)
		{
			$_SESSION['user_id']= $mysqli_result[0];
			header("Location: emp_profile.php");
			//echo "<div class=\"alert alert-success\">Welcome $mysqli_result[1].</div>";
		}
		else
		{
		$sql2="SELECT * from employer where username = '$username' and password= '$password'";
		$result2= mysqli_query($db, $sql2);
		$mysqli_result= mysqli_fetch_array($result2);
		if (mysqli_num_rows($result2) == 1) {
			$_SESSION['emp_id']= $mysqli_result[0];
			//echo "<div class=\"alert alert-success\">Welcome to the Employer profile of $mysqli_result[1].</div>";
			header("Location: com_profile.php");
		}
		else
		{	
			?>
			<script type="text/javascript">
				alert("Incorrect username or password");
			</script>
			<?php
			//echo  '<div class= " center background">Incorrect username or password.</div>';
			//header("Location: index.php");
		}
	}
  		?>
	</body>
</html>