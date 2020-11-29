<!DOCTYPE html>
<?php 
  if(isset($_GET['Incorrect']))
  {
    echo"<p>Incorrect username or password</p>";
  }
?>
<html>

<head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="STYLE.css">
</head>

<body style="background-color: white">

     <form action="verify.php" method="get">
        <br>
       
        <h1 style="color: #00008B">LOGIN FORM</h1>
        <br>
        <input type="text" name="User_Id" placeholder="Enter your ID">
        <br>
        <br>
        <input type="password" name="password" placeholder="Enter password">
        <br>
        <br>
        <button id="submit">Login</button>
        <p>Dont have an account? <a href="signup.php">Register Now</a></p>
    </form>
     

</body>
</html>