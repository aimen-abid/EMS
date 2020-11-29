<!DOCTYPE html>
<?php 
  if(isset($_GET['passwordFailure']))
  {
    echo"<p>Enter the same password please</p>";
  }
?>
<html>

<head>
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
</head>


<body >
  <div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button"><b>EMS</b></a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="index.php" class="w3-bar-item w3-button">Home</a>
      <a href="login.php" class="w3-bar-item w3-button">Login</a>
      <a href="signup.php" class="w3-bar-item w3-button">Signup</a>
    </div>
  </div>
</div>

<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16"><b style="margin: 480px"><i>"You dont have to be a doctor to save lives"<i></b></h3>
  </div>
  <div class="w3-row-padding"  style="display: block;  width: 100%;  ">
    
        <img src="https://media-exp1.licdn.com/dms/image/C4D0BAQGk14tUsq2CKA/company-logo_200_200/0?e=2159024400&v=beta&t=FIUhvLmuOaSHsXPHg-wrC3npiGCEu9_NjITiZbgSwC0" alt="LOGO" style="margin-left: auto;
  margin-right: auto;
  display: block; height: 400px"  >
     
    </div>
    

    


</body>
</html>