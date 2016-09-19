<?php //session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>find donator</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<?php include('menu.php'); ?>
	<div class="col-md-6 col-md-offset-2">
	<h2>Welcome to <?php //echo $_SESSION['username']; ?></h2>
	<h3>Find Donator by location && group</h3>
	<hr>	
		 <form role="form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
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

		  <button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>


	<div class="col-md-6 col-md-offset-2">
	<br>
					<table class="table table-responsive table-striped table-bordered table-condensed" border="2" cellspacing="15" cellpadding="15" style="text-align:center">
						<tr>
							<th>Donator Name:</th>
							<th>Phone</th>
							<th>Last Donate(Date)</th>
						</tr>
<?php
	include('conn.php');


	if(!empty($_GET['location']) && !empty($_GET['blood_group'])){
		$location = $_GET['location'];
		$blood_group = $_GET['blood_group'];
				
	}else{
		$location =0;
		$blood_group =0;
	}	
	
	$sql2 = "SELECT * from donator_info where location = '$location' && blood_group = '$blood_group'"; 
	if($result2 = mysqli_query($conn, $sql2)){
	while($row2 = mysqli_fetch_assoc($result2)){
		?>
		
				<tr>
					<td><?php echo $row2['name']; ?></td>
					<td><?php echo $row2['cell_no']; ?></td>
	<?php 
	$id=$row2['id'];
	$sql3= "SELECT * from donation_date where donator_id='$id'";
	if($result3=mysqli_query($conn, $sql3 )){
		while($row3=mysqli_fetch_assoc($result3)){

			$last_blood_donate_date=$row3['last_bdd'];
			$now = time(); // or your date as well
			$your_date = strtotime($last_blood_donate_date);
			$datediff = $now - $your_date;
			
	?>
							<td style="color:blue"><?php
							if(empty($datediff)){
								 echo "not donate yet!";
							}else{								
								echo floor($datediff/(60*60*24))." days ago";
							}
							
							?></td>
				</tr>
				<?php
			}
		}
							
	 
	}
	// Free result set
	mysqli_free_result($result2);
	}
	mysqli_close($conn);
?>		
					</table>
				</div>

	<?php include('footer.php'); ?>
</body>
</html>
