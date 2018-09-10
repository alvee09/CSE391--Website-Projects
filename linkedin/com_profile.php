<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php
		include 'connect.php';
		session_start();
		$emp_id= $_SESSION['emp_id'];
		//$emp_id= 52;
		$sql= "SELECT * from employer where id= '$emp_id'";
		$res= mysqli_query($db, $sql);
		$res2= mysqli_fetch_array($res);	
		echo "<title>$res2[1]</title>";
		$_SESSION['emp_id']= $emp_id; 
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
</style>
<body>
	


	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="com_profile.php">getConnected</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="com_profile.php">Profile <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link my-2 my-lg-0" href=".">Sign out</a>
      </li>
    </ul>

  </div>
</nav>
	<div class="background">
		<div class="row table-section">
			<div class= "col-lg-4 container jumbotron profile opacity">
			<h1>My Profile</h1>
			<table>
			<tr><td class="item">Name of the Organization:</td>
				<td><?php echo "$res2[1]"; ?></td></tr>
			<tr><td class="item">Operating Sector:</td>
			 <td><?php echo "$res2[2]"; ?></td></tr>
			<tr><td class="item">Email:</td> 
				<td><?php echo "$res2[4]"; ?></td> </tr>
			<tr><td class="item">Phone:</td>
			<td> <?php echo "$res2[3]"; ?></td></tr>
			<tr><td class="item">Address:</td> 
				<td><?php echo "$res2[5]"; ?></td>	</tr>
			<tr><td class="item">Are we recruiting?</td> 
				<td><?php echo "$res2[6]";?></td></tr>
			</table>
			<a href="update.php" class="btn btn-primary">Change Recruitment Status</a>
			</div>

		
			<div class="col-lg-8">
				<div class="table-section">
				<div class="container-fluid opacity">
				<h2>Current Employees:</h2>
				<?php
				$sql2= "SELECT * from employee where company = '$res2[1]'";
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
				?>
				</table>
				</div>
				</div>
				<div class="table-section">
				<div class="opacity" >
			<h2 class="container-fluid " >My jobs</h2>
			<?php
			$sql3= "SELECT * from job_posts where comp_id= '$emp_id'";
			$res4= mysqli_query($db, $sql3);
			?>
			<table class= "table table-striped container-fluid">
	     			<thead>
	   				<tr><th>Post</th><th>Location</th><th>Salary</th><th>Application Deadline</th></tr>
	   				</thead>
	   				<?php
	   				while ($row= mysqli_fetch_assoc($res4)) {
						echo "<tr><td>{$row['post']}</td><td>{$row['location']}</td><td>{$row['salary']}</td><td>{$row['appt_deadline']}</td></tr>";
					}
					?>
					</table>
					<a href="post_new_job.php" class= "btn btn-primary">Post jobs</a>
			</div>

			</div>
			<div class="table-section">
			<div class="opacity">
			<h2 class="container-fluid" >Avaiable Recruitments</h2>
			<?php
				$sql4= "SELECT * from employee where emp_status= 'unemployed'";
				$res5= mysqli_query($db, $sql4);
			?>
			<table class= "table table-striped container-fluid">
     			<thead class="thead-light">
   				<tr><th>Name</th><th>Phone</th><th>Email</th><th>Location</th><th>Educational Qualification</th></tr>
   				</thead>
   				<?php
   				while ($row= mysqli_fetch_assoc($res5)) {
					echo "<tr><td>{$row['name']}</td><td>{$row['phone']}</td><td>{$row['email']}</td><td>{$row['location']}</td>

					<td>{$row['education']}</td>";

				}
				?>
				</table>
		</div>
	</div>
			</div>
		</div>

		

		
	</div>
</body>
</html>