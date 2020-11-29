<!DOCTYPE html>
<html>

<head>
    <title>Register Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <?php
        if (isset($_GET['passwordFailure']))
        {
            echo "<p>Enter same password please!</p>";
        }
    ?>
    <form action="register.php" method="get">
        <br>
       
        <h1 style="color: #00008B">SIGN UP FORM</h1>
        <br>
        <input type="text" name="User_Id" placeholder="Enter your user ID" required="" >
        
            <br>
            <br>
            

        <input type="password" name="password1" placeholder="Enter password" required="">
        <br>
        <br>
        <input type="password" name="password2" placeholder="Enter password again" required="">
        <br>
        <br>
        <button >submit</button>
        <p>Already have an account? <a href="login.php">Login Now</a></p>
    </form>
     

</body>
</html>