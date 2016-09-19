<?php //session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Donator List</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	
</head>
<body>
	<?php 
	include('conn.php');
	include('menu.php');
	  ?>
		<div class="col-md-7 col-md-offset-2">
			<h3>Donator List</h3>
						<table id="example22" class="table table-responsive table-striped table-bordered table-condensed" cellspacing="0" width="100%" style="text-align:center">
						<thead>
							<tr>
								<th>Id</th>
								<th>Donator Name</th>
								<th>Location</th>
								<th>Blood Group</th>
								<th>Cell No</th>
								<th>Weight</th>
								<th>Last Donate</th>
								<th>Delete Donator</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>Id</th>
								<th>Donator Name</th>
								<th>Location</th>
								<th>Blood Group</th>
								<th>Cell No</th>
								<th>Weight</th>
								<th>Last Donate</th>
								<th></th>
							</tr>
						</tfoot>
							<?php
		
		$sql2 = "SELECT * from donator_info"; 
			if($result2 = mysqli_query($conn, $sql2)){
				while($row2 = mysqli_fetch_assoc($result2)){
					?>
					<tbody>
							<tr>
								<td><?php echo $row2['id']?></td>
								<td><a href="update_donator_info.php?id=<?php echo $row2['id']; ?>"><?php echo $row2['name']?></a></td>
								<td><?php echo $row2['location']?></td>
								<td><?php echo $row2['blood_group']?></td>
								<td><?php echo $row2['cell_no']?></td>
								<td><?php echo $row2['weight']?></td>
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
								<td style="color:blue"><?php echo floor($datediff/(60*60*24))." days ago"; ?></td>
						
		
		<?php 
		if(!empty($_SESSION)){
			if($_SESSION['username'] == 'admin1@gmail.com'){

			$id=$row3['donator_id']; ?>
			<td><a href="http://localhost/donate_blood/delete_donator.php?id=<?php echo $id; ?>"><button type="button" onclick="ConfirmDelete()">delete</button></a></td>
			<?php }  
			} ?>
		
		<?php
			}
		}
									
		?>

							</tr>
							</tbody>				
						
					<?php 
				}
				// Free result set
		    mysqli_free_result($result2);
			}
	mysqli_close($conn);
	?>	
				</table>
	</div>

	
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.js"></script>

	<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>

	<script src="js/bootstrap.min.js"></script>
	
	<script type="text/javascript" src="js/dataTables.bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
		    $('#example22').DataTable();
		} );
	</script>

	<script type="text/javascript">
      function ConfirmDelete()
      {
            if (confirm("Delete Account?"))
                 location.href='http://localhost/donate_blood/delete_donator.php?id=<?php echo $id; ?>';
      }
  	</script>
	<?php //include('footer.php'); ?>
	
</body>
</html>


	