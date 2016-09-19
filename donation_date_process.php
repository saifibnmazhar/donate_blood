<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Saving Donation Date</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<?php
		include("conn.php");

		echo $name=$_POST['name'];
		echo $last_bdd=$_POST['last_bdd'];

		$sql="SELECT * from donator_info where name='$name'";

		if($result=mysqli_query($conn, $sql)){
			while($row=mysqli_fetch_assoc($result)){
				$donator_id =$row['id'];

				$sql1="INSERT INTO donation_date(donator_id, last_bdd) 
				VALUES('$donator_id', '$last_bdd')";

				if(mysqli_query($conn, $sql1)){
					echo '
					<div class="alert alert-success fade-in">
						<a href="#" class="close" data-dismiss="alert">&times;</a>
						<strong>Success!</strong> Donation date submitted successfully.
					</div>';
					echo "<script>setTimeout(\"location.href = 'http://localhost/donate_blood/index.php';\",1000);</script>";
				}else{
					echo "Error: " .$sql1. "<br>" .mysqli_error($conn);
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
		}, 50);
	</script>
</body>
</html>