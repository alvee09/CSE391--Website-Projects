<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php
		include 'connect.php';
		session_start();
		$user_id= $_SESSION['user_id'];
		//$emp_id= 52;
		$sql= "SELECT * from employee where id= '$user_id'";
		$res= mysqli_query($db, $sql);
		$res2= mysqli_fetch_array($res);	
		echo "<title>$res2[1]</title>";
		//$_SESSION['emp_id']= $user_id; 
		$_SESSION['id']= $user_id; 
		?>
</head>
<style type="text/css">
	.profile
	{
		height: 300%;
	}
	.item{
		font-size: 150%;
		font-weight: bold;
	}
	.background{
    background-image: url("images/comp_profile.jpeg");
    width: 100%;
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    padding-top: 2%;
    padding-bottom: 2%;
     }
     .opacity{
  	background-color: white;
  	color: black;
  	opacity: 0.85;
  	margin: auto;
  	padding: 5%;
  	padding-top: 2%;
  	padding-bottom: 2%;
  	border-radius: 10px;
  	width: 80%;
}
.table-section{
	padding:2%;
}
 .center{
   text-align: center;
   margin-top: 2%;
}
</style>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="emp_profile.php">getConnected</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="emp_profile.php">Profile <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link my-2 my-lg-0" href=".">Sign out</a>
      </li>
    </ul>
  </div>
</nav>


	<div class="background">
		<div class="row table-section ">
			<div class= "col-lg-4 container jumbotron profile opacity">
			<h1>My Profile</h1>
			<table>
			<tr><td class="item">Name:</td>
				<td> <?php echo "$res2[1]"; ?></td></tr>
			<tr><td class="item">Email:</td>
				<td> <?php echo "$res2[4]"; ?></td></tr>
			<tr><td class="item">Phone:</td>
				<td> <?php echo "$res2[3]"; ?></td></tr>
			<tr><td class="item">Employment Status:</td>
				<td> <?php echo "$res2[6]"; ?></td></tr>
			<tr><td class="item">Eduacational Qualifications: </td>
				<td><?php echo "$res2[5]";?></td></tr>
			<tr><td class="item">Location: </td>
				<td><?php echo "$res2[7]";?></td></tr>
			</table>

			<div class="center">
		<form method="post" action="emp_update.php" class="center" >
			   	<div class="input-group">
  	  	<button type="submit" class="btn btn-primary" name="reg_user">Update Profile</button>
  		</div>
	    </form>
  		
  		</div>
			</div>


		
			<div class="col-lg-8">
				<div class="table-section">
				<div class="container-fluid opacity">
					<?php
				if($res2[8] !=null)
				{
				
				echo "<h2>All the current employees of $res2[8]</h2>";
				
				$sql2= "SELECT * from employee where company = '$res2[8]'";
				$res3= mysqli_query($db, $sql2);
				?> 
     			<table class= "table table-striped">
     				<thead class="thead-light">
   				<tr><th scope="col">Name</th><th>Phone</th><th>Email</th><th>Designation</th></tr>
   				</thead>
   				<?php
   				while ($row= mysqli_fetch_assoc($res3)) {
   					echo "<tr><td>{$row['name']}</td><td>{$row['phone']}</td><td>{$row['email']}</td><td>{$row['designation']}</td></tr>";
				}
			}
				?>
				</table>
				</div>	
			</div>
			</div>

		</div>

		<div class="container opacity">
		<h2 >List Of all available jobs</h2>
		<?php
		$sql3= "SELECT * from job_posts";
		$res4= mysqli_query($db, $sql3);
			
		?>
		<table class= "table table-striped container-fluid">
     				<thead class="thead-light">
   				<tr><th>Name of the Organization</th><th>Post</th><th>Location</th><th>Skills Required</th><th>Educational Quaalification required</th><th>Contact email</th><th>Salary</th><th>Application Deadline</th></tr>
   				</thead>
   				<?php
   				while ($row= mysqli_fetch_assoc($res4)) {

   					$exp_date = $row['appt_deadline'];
					$todays_date = date("Y-m-d");

					$today = strtotime($todays_date);
					$expiration_date = strtotime($exp_date);

					$sql4= "SELECT name, email from employer where id= '{$row['comp_id']}'";
					$res5= mysqli_query($db, $sql4);
					$row2= mysqli_fetch_assoc($res5);
					if ($expiration_date > $today) {
					     echo "<tr><td>{$row2['name']}</td>
					     <td>{$row['post']}</td>
					     <td>{$row['location']}</td>	
						<td>{$row['skills1']}</td>
						<td>{$row['education']}</td>
					     <td>{$row2['email']}</td>
					     <td>{$row['salary']}</td><td>{$row['appt_deadline']}</td></tr>";
					

					} else {
					     //echo "Looks like there is no jobs available at the moment. :(";
					}
					
					
				}
				?>
				</table>
		</div>
	</div>
</body>
</html>