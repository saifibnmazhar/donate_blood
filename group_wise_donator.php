<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
		<?php
			include('conn.php');
			include('menu.php');
		?>
		<h1>Group wise Donator Amount</h1>
		<div class="col-md-push-3 col-md-6">
		<table class="table table-responsive table-striped table-bordered table-condensed" cellspacing="0" style="text-align:center">
			<tr>
				<th>Group</th>
				<th>Donator</th>
			</tr>
			<?php 
				$sql="SELECT * FROM blood_group"; 
				if($result = mysqli_query($conn, $sql)){
					while($row = mysqli_fetch_assoc($result)){
						$blood_group = $row['group_name'];

						?>
						<tr>
							<td><?php echo $blood_group = $row['group_name']; ?></td>
							
							
						<td><?php 


				$sql1="SELECT * FROM donator_info where blood_group = '$blood_group'";
				if($result1 = mysqli_query($conn, $sql1)){

					while($row1 = mysqli_fetch_assoc($result1)){
						$donator_quantity = 0;
				$donator_single_quantity = count($row1['blood_group']);
				echo $donator_quantity;
				echo "<br>";
				echo $donator_single_quantity;
				echo "<br>";

				 $donator_quantity = $donator_quantity + $donator_single_quantity;
						
						}			

				}

			?></td>
							
							
							
						</tr>
						<?php 

					}

				}
			?>
		
		</table>
		</div>

</body>
</html>
