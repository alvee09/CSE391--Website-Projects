<!DOCTYPE html>
<html>
<head>
  <title>Sign-up</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script type="text/javascript" src="scripts.js"></script>

</head>
<style>

  .background{
    background-image: url("images/signup.jpeg");
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

  	<h2 class= "center">Sign up form</h2>
  <form method="post" action="register.php">
  	<div class="form-group row">
  	  <label class= "col-lg-3">Full Name</label>
  	  <input class= "col-lg-9" type="text" name="name" required >
  	</div>
    <div class="form-group row">
      <label class= "col-lg-3">Username</label>
      <input class="col-lg-9" type="text" name="username" required>
    </div>
    <div class="form-group row">
      <label class= "col-lg-3">Password</label>
      <input class="col-lg-9"type="password" name="password" required>
    </div>
    <div class="form-group row">
      <label class= "col-lg-3">Confirm Password</label>
      <input class="col-lg-9"type="password" name="password2" required>
    </div>
    <div class="form-group row ">
      <label class= "col-lg-3">Email Address</label>
      <input class="col-lg-9"type="email" name="email" required>
    </div>
  	<div class="form-group row">
  	  <label class= "col-lg-3">Address</label>
  	  <input class="col-lg-9"type="text" name="address">
  	</div>
  	<div class="form-group row">
  	  <label class= "col-lg-3">Contact Number</label>
  	  <input class="col-lg-9"type="text" name="contact" required placeholder="+88">
  	</div>
    <div class="form-group row">
      <label class= "col-lg-3">Educational Qualififations</label>
      <input class="col-lg-9" type="text" name="degree1" placeholder="Eg. BSc in CSE, with CGPA 3.5">
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
      <label class= "col-lg-3">Preferred City</label>
      <select class="col-lg-9" name ="location">
        <option selected>Choose...</option>
        <option value="dhaka">Dhaka</option>
        <option value="chittagong">Chittagong</option>
        <option value="rajshahi">Rajshahi</option>
        <option value="khulna">Khulna</option>
        <option value="sylhet">Sylhet</option>
      </select>
    </div>
      <div class="form-group row">
  	  <label class= "col-lg-3">Company/Institution /Organization</label>
  	  <input class="col-lg-9" type="text" name="company">
  	</div>
  	<div class="form-group row">
  	  <label class= "col-lg-3">Designation</label>
  	  <input class="col-lg-9" type="text" name="designation">
  	</div>
  	<div class="form-group row">
  	  <label class= "col-lg-3">Skills</label>
  	  <input class="col-lg-9" type="text" name="skill1" placeholder="Eg. PHP, MySQL">
  	</div>

  	
  	<div class="center">
  	  <button type="submit" class="btn btn-primary" name="reg_user">Create an Account</button>
  	</div>
  </form>
  </div>
  </div>
</body>
</html>