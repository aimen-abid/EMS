<!DOCTYPE html>
<html>

<head>
    <title>Register Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <header>
        <button><a href="dashboard.php" style="color: white;">GO BACK</a></button>
  </header>

      <?php
        if (isset($_GET['InfoFailure']))
        {
            echo "<p>User with the ID already exists, enter again!</p>";
        }
       ?>
    <form action="verify_entered_trainee.php" method="get">
        <br>
       
        <h1 style="color: #00008B">Trainee INFO</h1>
        <br>
        
        <input type="text" name="Campus_id" placeholder="Enter trainee id" required="">
        <input type="text" name="trainee_name" placeholder="Enter trainee name" required="">
        <br>
    

        <select name="gender" required="">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="nonbinary">Non-binary</option>
            <option value="na">Prefer not to say</option>
        </select>

        <br>
         <input type="text" name="phone_no" placeholder="Enter phone number" required="">
          <input type="text" name="hours_given" placeholder="Enter number of hours given" required="">
           <input type="text" name="hostel_info" placeholder="Enter hostel info" required="">
            
        
        <button>submit</button>
        
    </form>
     

</body>
</html>