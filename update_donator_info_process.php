<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Donate Blood</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<?php 
		include('menu.php'); 
		include('conn.php');
	
	 $id = $_POST['id'];
	 $name = $_POST['name']; 
	 $location = $_POST['location'];
	 $blood_group = $_POST['blood_group'];
	 $cell_no = $_POST['cell_no'];
	 $weight = $_POST['weight'];

	$sql ="UPDATE donator_info SET name='$name', location='$location', blood_group='$blood_group', cell_no='$cell_no', weight='$weight' where id ='$id'";
	if(mysqli_query($conn, $sql)){
		echo "information updated";
	}else {
    echo "Error updating record: " . mysqli_error($conn);
}

	?>

	<?php include('footer.php'); ?>

</body>
</html>