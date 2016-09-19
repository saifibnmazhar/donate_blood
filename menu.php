<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Donate Blood</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<?php
if(!isset($_SESSION['username']))
{
    ?>
    <nav style="background-color:RED;"  class="navbar navbar-default">		
		<div class="container">
			<div class="navbar-header">
				<a href="#" class="navbar-brand"></a>
			</div>
			<ul class="nav navbar-nav">	
				<li class="active">
					<a href="add_donator.php">Add Donator</a>					
				</li>	
				
				<li><a href="find_donator.php">Find Donator</a></li>
				<li><a href="list_donator.php">All Donator List</a></li>
				<li><a href="login.php">LogIn</a></li>				
				<li><a href="signup.php">SignUp</a></li>				
				
			</ul>
		</div>
	</nav>

    <?php
}else{
	?>
	<nav style="background-color:RED;" class="navbar navbar-default">		
		<div class="container">
			<div class="navbar-header">
				<a href="#" class="navbar-brand"></a>
			</div>
			<ul class="nav navbar-nav">			
				<li class="active">
					<a href="add_donator.php">Add Donator</a>					
				</li>
				<li><a href="find_donator.php">Find Donator</a></li>
				<li><a href="list_donator.php">All Donator List</a></li>
				<li><a href="donation_date.php">Insert/Update(Donate Date)</a></li>
				<li><a href="logout.php">LogOut</a></li>
				
			</ul>
		</div>
	</nav>
<?php	
}
?>
	
</body>
</html>

