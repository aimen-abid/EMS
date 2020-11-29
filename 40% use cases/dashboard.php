<!DOCTYPE html>
<?php
	session_start();
	if(isset($_SESSION['login'])==false)
	{
		header('Location:login.php');
	}
?>
<html>
<head>
	<title>Dashboard</title>
	<style type="text/css">
		button
		{
			background-color: #00008B;
	  		color: white;
	  		padding: 14px 20px;
	  		margin: 8px 500px;
	  		border: none;
	  		cursor: pointer;
	 		width: 10%;
		}
		button:hover
		{
			background-color: green
		}
		a
		{
			color: white;

		}
	</style>

</head>
<body>
	<h1>Welcome to EMS </h1>
	<button><a href="Product.php" >Inventory details</a></button>
	<br>
	<button><a href="mfr_info.php">mfr_info</a></button>
	<br>
	<button> <a href="trainee_info.php">trainee_info</a></button>
	<br>
	<button><a href="bag_details.php">Bag details</a></button>
	<br>
	<button><a href="suppliers_info.php">Supplier Info</a></button>
	<br>
	<button><a href="enter_mfr_info.php">Enter MFR Info</a></button>
	<br>
	<button><a href="enter_trainee_info.php">Enter Trainee Info</a></button>
	<br>




</body>
</html>