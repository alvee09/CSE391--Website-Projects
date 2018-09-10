<!DOCTYPE html>
<html>
<head>
	<title>Post Job</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style type="text/css">

.background{
    background-image: url("images/post_job.jpeg");
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
  <div class="background">
	<div class="container opacity ">
	<h4 class="center">Looks like you are currently recreuiting, so why don't you publish your jobs here and find your perfect employees?</h4>
	<?php
	session_start();
	include 'connect.php';
	$emp_id =$_GET['employer_id'];
	$sql= "SELECT name from employer where id= '$emp_id'";
	$res = mysqli_query($db, $sql);
	$res3=  mysqli_fetch_array($res);
	$name= $res3[0];
	$_SESSION['emp_id']= $emp_id;
	?>
	<form method="post" action="post.php">
  	<div class="form-group row">
  	  <label class= "col-lg-3">Name of the organization/Institution</label>
  	  <label class= "col-lg-9"> <?php echo "$name";
  	  ?></label>
  	 </div>
  	 <div class="form-group row">
  	  <label class= "col-lg-3">Job post</label>
  	  <input class= "col-lg-9" type="text" name="post" required>
  	</div>
    <div class="form-group row"> 
      <label class= "col-lg-3">Skill Required</label>
      <input class= "col-lg-9" type="text" name="skills1">
    </div>
    <div class="form-group row">
      <label class= "col-lg-3">Job Description</label>
      <input class= "col-lg-9"type="text" name="description" required>
    </div>
  	<div class="form-group row">
  	  <label class= "col-lg-3">Job Responsibility</label>
  	  <input class= "col-lg-9"type="text" name="responsibility" required>
  	</div>
  	<div class="form-group row">
      <label class= "col-lg-3" >Job Location</label>
      <select class= "col-lg-9" name ="location">
        <option value="dhaka">Dhaka</option>
        <option value="chittagong">Chittagong</option>
        <option value="rajshahi">Rajshahi</option>
        <option value="khulna">Khulna</option>
        <option value="sylhet">Sylhet</option>
      </select>
    </div>
    <div class="form-group row">
      <label class= "col-lg-3">Preferred Educational Qualification</label>
      <input class= "col-lg-9" type="text" name="degree1" placeholder="Eg. CSE">
    </div>
    <div class="form-group row">
      <label class= "col-lg-3">Salary</label>
      <input class= "col-lg-9"type="text" name="salary">
    </div>
    <div class="form-group row">
      <label class= "col-lg-3">Last date for application</label>
      <input class= "col-lg-9" type="date" name="date">
    </div>
    <div class="center">
  	  <button type="submit" class="btn btn-primary" name="reg_user">Post job</button>
  	</div>
  </form>
  </div>
</div>
</body>
</html>