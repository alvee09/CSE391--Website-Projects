<!DOCTYPE html>
<html>
<head>
  <title>EMPLOYER Sign up</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script type="text/javascript" src="scripts.js"></script>

</head>
<style type="text/css">
body, html {
    height: 100%;
}
.background{
    background-image: url("images/signup_emp.jpeg");
    width: 100%;
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    padding-top: 2%;
    padding-bottom: 2%;
     }
  .center{
   text-align: center;
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
</style>
<body>
  <div class="background">
  <div class="container opacity">
  	<h2 class="center container">Create your easy EMPLOYER Account</h2>
  <form method="post" action="emp_register.php">
  	<div class="form-group row">
  	  <label class= "col-lg-3">Name of the organization/Institution</label>
  	  <input class= "col-lg-9" type="text" name="name" required>
  	</div>
    <div class="form-group row">
      <label class= "col-lg-3">Username</label>
      <input class= "col-lg-9" type="text" name="username" required>
    </div>
    <div class="form-group row">
      <label class= "col-lg-3">Password</label>
      <input class= "col-lg-9" type="password" name="password" required>
    </div>
    <div class="form-group row row">
      <label class= "col-lg-3">Confirm Password</label>
      <input class= "col-lg-9" type="password" name="password2" required>
    </div>
    <div class="form-group row">
      <label class= "col-lg-3">Contact Number</label>
      <input class= "col-lg-9" type="text" name="contact" required>
    </div>
  	<div class="form-group row">
  	  <label class= "col-lg-3">Address</label>
  	  <input class= "col-lg-9" type="text" name="address">
  	</div>
  	<div class="form-group row">
      <label class= "col-lg-3">Email Address</label>
      <input class= "col-lg-9" type="text" name="email">
    </div>
    <div class="form-group row">
      <label class= "col-lg-3">Operating Sector</label>
      <select class= "col-lg-9" name ="sector" >
        <option selected>Choose...</option>
        <option value="Garments">Garments</option>
        <option value="it">IT/Telecommunication</option>
        <option value="IT/Telecommunication">Banking</option>
        <option value="Education">Education</option>
        <option value="NGO">NGO</option>
      </select>
    </div>
      <div class="form-group row">
      <label class= "col-lg-3" id= "recruitment">Are you currently RECRUITING?</label>
      <select class= "col-lg-9" name ="recruiting">
        <option selected>Choose...</option>
        <option value="Yes">yes!!</option>
        <option value="No">No</option>
      </select>
    </div>
  	<div class="center">
  	  <button type="submit" class="btn btn-primary" name="reg_user" onclick="checkRecruitment()">Join NOW!</button>
  	</div>
  </form>
  </div>
  </div>
</body>
</html>