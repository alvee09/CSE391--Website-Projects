<!DOCTYPE html>
<html>
<head>
  <title>Appointment</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script type="text/javascript" src="scripts.js"></script>

</head>
<body>
  <div class="register">
  	<h2>Register</h2>
  
	
  <form method="post" action="appointment.php">
  	<div class="input-group">
  	  <label>Name</label>
  	  <input type="text" name="name">
  	</div>
  	<div class="input-group">
  	  <label>Licence Number</label>
  	  <input type="licence_no" name="licence_no">
  	</div>
  	<div class="input-group">
  	  <label>Engine Number</label>
  	  <input type="eng_no" name="eng_no">
  	</div>
  	<div class="input-group">
  	  <label>Address</label>
  	  <input type="address" name="address">
  	</div>
  	<div class="input-group">
  	  <label>Phone Number</label>
  	  <input type="phone" name="phone">
  	</div>
  	<div class="input-group">
  	  <label>Set a Date</label>
  	  <input type="date" name="date2" id="date2" ">
  	</div>
  	<div class="input-group">
  	  <label>Mechanic</label>
  	  <select name ="mechanic">
  	  	<option value="Kuddus">Kuddus</option>
  	  	<option value="Ali Miya">Ali Miya</option>
  	  	<option value="Hasan">Hasan</option>
  	  	<option value="Nayan">Nayan</option>
  	  	<option value="Mofiz">Mofiz</option>
  	  </select>
  	</div>
  	
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Set Appointment</button>
  	</div>
  </form>
  </div>
</body>
</html>