<!DOCTYPE html>
<html>
	<head>
		<title>Administrator Dashboard</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<?php
		include 'connect.php';
		session_start();
	if(empty($_POST["username"]) || empty($_POST["password"]))
	{
	echo '<div class= "prompt">Both fields are required.</div>';
	}else
	{
	// Define $username and $password
	$username=mysqli_escape_string($db,$_POST['username']);
	$password=mysqli_escape_string($db,$_POST['password']);
	//echo "$username";
  		$sql="SELECT * from admins where username = '$username' and password= '$password'";
		$result= mysqli_query($db, $sql);
		$mysqli_result= mysqli_fetch_array($result);

		if(mysqli_num_rows($result) == 1)
	{
	echo "<div class=\"adminWelcome\">Welcome $mysqli_result[0].</div>";

	$sql="SELECT * from jobs";
		$result2= mysqli_query($db, $sql);
		//$result3= mysqli_fetch_array($result2);
	echo("<table>");
	$first_row = true;
	while ($row = mysqli_fetch_assoc($result2)) {
    	if ($first_row) {
        	$first_row = false;
        // Output header row from keys.
        	echo '<tr>';
        	foreach($row as $key => $field) {
            	echo '<th>' . htmlspecialchars($key) . '</th>';
        	}
        	echo '<th>' ."Change the mechanic". '</th>';
        	echo '</tr>';
    	}
    	echo '<tr>';
    	foreach($row as $field) {
        	echo '<td>' . htmlspecialchars($field) . '</td>';

    	}
    	echo '<form method= "post" action= "mechanic_change.php">';
    	echo '<td>';
    	echo '<select name ="mechanic2">';
  	  	echo '<option value="Kuddus">Kuddus</option>';
  	  	echo '<option value="Ali Miya">Ali Miya</option>';
  	  	echo '<option value="Hasan">Hasan</option>';
  	  	echo '<option value="Nayan">Nayan</option>';
  	  	echo '<option value="Mofiz">Mofiz</option>';
  	  	echo '</select>';
  	  	echo '</td>';
  	  	$_SESSION['oldMech']= $row['mechanic_name'];
  	  	$_SESSION['appointmentDate']= $row['appt_date'];
  	  	echo '<td> .<button type= "submit">Change Mechanic</button>. </td>';
  	  	echo '</form>';
    	//echo '<td>' ."aikhane". '</td>';

    	
    	echo '</tr>';
    	
	}
	echo("</table>");
}
	else
	{
	echo  '<div class= "prompt">Incorrect username or password.</div>';
	}


	}
  		?>
	</body>
</html>