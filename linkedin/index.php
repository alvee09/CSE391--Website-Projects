<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>getConnected</title>
</head>
<style type="text/css">
body, html {
    height: 100%;
}
	.home-background{
		background-image: url("images/homepage.jpeg");
		width: 100%;
		height: 100%;
		background-position: center;
    	background-repeat: no-repeat;
    	background-size: cover;
}
.form-section{
	padding-right: 10%;
	padding-left: 10%;
	padding-top: 2%;
	padding-bottom: 2%;
	background-color: black;
	color: white;
    opacity: 0.7;
    margin: auto;
    border-radius: 20px;
    width: 40%;
    height: 42%;
    position: absolute;
	top:0;
	bottom: 0;
	left: 0;
	right: 0;
}
 .center{
   text-align: center;
}
.row{
	margin: auto;
	padding-top: 1%;
	padding-bottom: 1%;
}
</style>
<body>
		<div class= "home-background">
		<div class= " container form-section">
		
		<form  method="post" action="login.php">
			<div class="row" >
			<label class="col-lg-4">Username</label>
			<input class= "col-lg-8" type="username" name="username" required>
			</div>
			<div class= "row">
			<label class="col-lg-4">Password</label>
			<input class="col-lg-8" type="password" name="password" required>
			</div>
			<div class="center" >
  	  <button type="login" class="btn btn-primary ">Login</button>
  	  </div>
  	  </form>
  	  <p>Not a member yet? <a href="signup.php">Sign up NOW!</a></p>
  	  <p>Are you an employer? If so, find your perfect employee by creating an <a href="emp_signup.php">Employer Account</a>.</p>
  	</div>
		</div>
	</body>
</html>