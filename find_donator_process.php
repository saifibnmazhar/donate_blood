<?php 
include('conn.php');
include('menu.php');

?>

				<div class="col-md-6 col-md-offset-2">
					<table border="2" cellspacing="15" cellpadding="15">
						<tr>
							<th>Donator Name:</th>
							<th>Phone</th>
							<th>Last Donate(Date)</th>
						</tr>
<?php

	$location = $_POST['location'];
	$blood_group = $_POST['blood_group'];
	$sql2 = "SELECT * from donator_info where location = '$location' && blood_group = '$blood_group'"; 
	if($result2 = mysqli_query($conn, $sql2)){
	while($row2 = mysqli_fetch_assoc($result2)){
		?>
		
				<tr>
					<td><?php echo $row2['name']; ?></td>
					<td><?php echo $row2['cell_no']; ?></td>
				</tr>
			
		<?php 
	}
	// Free result set
	mysqli_free_result($result2);
	}
	mysqli_close($conn);
?>		
					</table>
				</div>