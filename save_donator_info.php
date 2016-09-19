<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Saving Donator Info</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<?php 
		include("conn.php");
		//include("menu.php");

		$name=$_POST['name'];
		$email=$_POST['email'];		
		$gender=$_POST['gender'];		
		$location=$_POST['location'];
		$blood_group=$_POST['blood_group'];
		$cell_no=$_POST['cell_no'];
		$weight=$_POST['weight'];

		$sql1 = "SELECT * from donator_info where email='$email'";

		if($result1=mysqli_query($conn, $sql1)){
			if(mysqli_affected_rows($conn) > 0){
				echo '
				<div class="alert alert-success fade in" data-alert="alert">
			        <a href="#" class="close" data-dismiss="alert">&times;</a>
			        <strong>Success!</strong>Email has been taken! try another one.
			    </div>';
			    echo "<script>setTimeout(\"location.href = 'http://localhost/donate_blood/donation_date.php';\",1000);</script>";
			}else{

				$sql = "INSERT into donator_info(name,email,gender,location,blood_group, cell_no, weight)VALUES ('$name','$email','$gender','$location', '$blood_group', '$cell_no', '$weight')";
			
			if(mysqli_query($conn, $sql)){
			     echo '
			    <div class="alert alert-success fade in" data-alert="alert">
			        <a href="#" class="close" data-dismiss="alert">&times;</a>
			        <strong>Success!</strong> New Donator record created successfully.
			    </div>';
			    echo "<script>setTimeout(\"location.href = 'http://localhost/donate_blood/donation_date.php';\",1000);</script>";
			} else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

			}
		}

			mysqli_close($conn);
		?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


	<script type="text/javascript">
			function showAlert() {
		    $("#myAlert").addClass("in");
		}

		window.setTimeout(function () {
		    showAlert();
		}, 500);
	</script>
</body>
</html>
