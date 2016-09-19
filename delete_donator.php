<?php
include('conn.php');

$id = $_GET['id'];

$sql = "DELETE from donator_info where id = '$id'";

if(mysqli_query($conn, $sql)){
	echo "this donator has been deleted<br>
	<script>setTimeout(\"location.href = 'http://localhost/donate_blood/list_donator.php';\",1000);</script>";

}

?>