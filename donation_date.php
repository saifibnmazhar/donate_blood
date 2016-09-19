<?php include('menu.php'); 
if(!isset($_SESSION['username']))
{
    // not logged in
    header('Location: http://localhost/donate_blood/login.php');
    exit();
}
?>

<div class="col-md-6 col-md-offset-2">
	<h3>Insert Your Blood Donation Date</h3>
	<form role="form" action="donation_date_process.php" method="post">
		<div class="form-group">
			<label for="name">Name:</label>
			<input type="text" name="name" class="form-control" id="name">
		</div>
		  <div class="form-group">
			  <div class="input-group date" id="datetimepicker1">
			    <label for="name">Donation Date:</label>
			    <input type="text" name="last_bdd" class="form-control" id="date">
			    <span class="input-group-addon">
	                <span class="glyphicon glyphicon-calendar"></span>
	            </span>
	           </div> 
		  </div>	  

		  <button type="submit" class="btn btn-default">Submit</button>
		</form>
</div>

<?php include('footer.php'); ?>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>

	<script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker({
                	format: 'YYYY-MM-DD'
                });
            });
        </script>