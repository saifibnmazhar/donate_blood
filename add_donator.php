<html>
	
	<head>
		<title>Blood Donator Info</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">		
	</head>
	<body>
		<?php include('menu.php'); ?>
		
		<div class="col-md-6 col-md-offset-2">
		<h3>Please, Fill-Up this simple form. This is some info about Blood Donator</h3>
		<hr>
			 <form role="form" action="save_donator_info.php" method="post">
			  <div class="form-group">
			    <label for="name">Donator Name:</label>
			    <input type="text" name="name" class="form-control" id="name">
			  </div>
			  <div class="form-group">
			    <label for="email">Donator Email:</label>
			    <input type="text" name="email" class="form-control" id="email">
			  </div>
			  <div class="form-group">
			    <label for="gender">Donator Gender:</label>
			    <select name="gender" id="gender">
			    	<option>Select</option>
			    	<option value="male">Male</option>
			    	<option value="female">Female</option>
			    </select>
			  </div>
			  <div class="form-group">
			    <label for="location">Select Your Location:</label>
			    <select name="location" id="blood_group">
			    	<option>Select</option>
			    	<option value="Doulkhar">Doulkhar</option>
			    	<option value="Nangolkot">Nangolkot</option>
			    	<option value="Comilla">Comilla</option>
			    	<option value="Dhaka">Dhaka</option>
			    </select>			   
			  </div>
			  <div class="form-group">
			    <label for="blood_group">Select Blood Group:</label>
			    <select name="blood_group" id="blood_group">
			    	<option>Select</option>
			    	<option value="O+">O+</option>
			    	<option value="O">O-</option>
			    	<option value="A+">A+</option>
			    	<option value="A-">A-</option>
			    	<option value="B+">B+</option>
			    	<option value="B-">B-</option>
			    	<option value="AB+">AB+</option>
			    	<option value="AB-">AB-</option>
			    </select>
			    
			  </div>
			  <div class="form-group">
			    <label for="cell_no">Cell No:</label>
			    <input type="text" name="cell_no" class="form-control" id="cell_no">
			  </div>
			  <div class="form-group">
			    <label for="weight">Weight(kg):</label>
			    <input type="text" name="weight" class="form-control" id="weight">
			  </div>
			  <button type="submit" class="btn btn-default">Member Request</button>
			</form>
			<br>
			<br>
			<br>
		</div>
		<?php include('footer.php'); ?>
	</body>
</html>