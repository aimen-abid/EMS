<!DOCTYPE html>
<?php
	session_start();
	if(isset($_SESSION['login'])==false)
	{
		header('Location:login.php');
		//session_destroy();
	}
	
	//$dept=$_GET['department'];
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
	<div class="w3-top">
  	<div class="w3-bar w3-white w3-wide w3-padding w3-card">
		<div class="w3-right w3-hide-small">
      		<a href="log_out.php" class="w3-bar-item w3-button">Log out</a>
		</div>
	</div>
	</div>
	<?php
	if(isset($_SESSION['EC'])==true)
	{
		echo "<button><a href=\"Product.php\" >Inventory details</a></button>";
		echo "<br>";
		echo "<button><a href=\"suppliers_info.php\">Supplier Info</a></button>";
		echo "<br>";
		echo "<button><a href=\"display_hospital_visits.php\">Display Hospital Visits</a></button>";
		echo "<br>";
		echo "<button><a href=\"view_patient_details.php\">View Patient Details</a></button>";
		echo "<br>";
	}
	else if(isset($_SESSION['Operations'])==true)
	{
		echo "<button><a href=\"Product.php\" >Inventory details</a></button>";
		echo "<br>";
		echo "<button><a href=\"suppliers_info.php\">Supplier Info</a></button>";
		echo "<br>";
		echo "<button><a href=\"display_hospital_visits.php\">Display Hospital Visits</a></button>";
		echo "<br>";
	}
	if(isset($_SESSION['mfr'])==true)
	{
		echo "<button><a href=\"mfr_info.php\">mfr_info</a></button>";
		echo "<br>";
		echo "<button> <a href=\"trainee_info.php\">trainee_info</a></button>";
		echo "<br>";
		echo "<button><a href=\"bag_details.php\">Bag details</a></button>";
		echo "<br>";
		echo "<button><a href=\"enter_mfr_info.php\">Enter MFR Info</a></button>";
		echo "<br>";
		echo "<button><a href=\"enter_trainee_info.php\">Enter Trainee Info</a></button>";
		echo "<br>";
		echo "<button><a href=\"patient_entry.php\">Patient Details Entry</a></button>";
		echo "<br>";
		echo "<button><a href=\"dutyschedule.php\">Duty Schedule</a></button>";
		echo "<br>";
		echo "<button><a href=\"enter_eval_records.php\">Enter Evaluation Record</a></button>";
		echo "<br>";
		echo "<button><a href=\"issue_equipment.php\">Issue Equipment</a></button>";
		echo "<br>";
		echo "<button><a href=\"log_out.php\">Log Out</a></button>";
		echo "<br>";
	}
	else
	{
		echo "<button><a href=\"view_eval_report.php\">View Evaluation Report</a></button>";
		echo "<br>";
		echo "<button><a href=\"log_out.php\">Log Out</a></button>";
		echo "<br>";
	}
	?>
	
	

</body>
</html>