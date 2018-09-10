<?php

session_start();
$user_id= $_SESSION['id'];
$_SESSION['user_id']= $user_id;
include 'connect.php';
		//$emp_status_new = mysqli_escape_string($db, $_POST['emp_status_new']);

		//$sql= "UPDATE employee set emp_status = '$emp_status_new' where id='$user_id'";
		//$res = mysqli_query($db, $sql);
		//mysqli_query($db, "UPDATE employee set company = null where id='$user_id'");
		//header("Location: emp_profile.php");
		
?>
<!DOCTYPE html>
<html>
<head>
  <title>Update Profile</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script type="text/javascript" src="scripts.js"></script>

</head>
<style>
body, html {
    height: 100%;
}
.background{
    background-image: url("images/update.jpeg");
    width: 100%;
    height: 100%;
    background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      padding-top: 2%;
    padding-bottom: 2%;
     }
.opacity{
  background-color: black;
  color: white;
  opacity: 0.7;
  margin: auto;
  padding: 5%;
  padding-top: 2%;
  padding-bottom: 2%;
  border-radius: 20px;
  width: 50%;

}
.center{
   text-align: center;
}
</style>
<body>
  <div class=" background">
  <div class="opacity container">
<?php
	$res= mysqli_query($db, "SELECT name from employee where id = '$user_id'");
	$res2= mysqli_fetch_array($res);

  	echo "<h2 class= \"center\">Hey, $res2[0]!! Lets update your profile.</h2>";
  	?>
  <form method="post" action="update_final.php">
    <div class="form-group row ">
      <label class= "col-lg-3">Email Address</label>
      <input class="col-lg-9"type="email" name="email" required placeholder="new EMAIL address">
    </div>
  	<div class="form-group row">
  	  <label class= "col-lg-3">Contact Number</label>
  	  <input class="col-lg-9"type="text" name="contact" required placeholder="new PHONE number">
  	</div>
    <div class="form-group row">
      <label class= "col-lg-3" >Employement Status</label>
      <select class="col-lg-9" name ="emp_status">
        <option selected>Choose...</option>
        <option value="employed">Employed</option>
        <option value="unemployed">Unemployed</option>
        <option value="student">Student</option>
        <option value="retired">Retired</option>
        <option value="disabled">Disabled</option>
      </select>
    </div>
      <div class="form-group row">
  	  <label class= "col-lg-3">Company/Institution /Organization</label>
  	  <input class="col-lg-9" type="text" name="company" placeholder="your NEW Organization">
  	</div>
  	<div class="form-group row">
  	  <label class= "col-lg-3">Designation</label>
  	  <input class="col-lg-9" type="text" name="designation">
  	</div>
  	
  	<div class="center">
  	  <button type="submit" class="btn btn-primary" name="reg_user">Update Profile</button>
  	</div>
  </form>
  </div>

  </div>
</body>
</html>