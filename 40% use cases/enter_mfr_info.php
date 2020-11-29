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
    <form action="verify_entered_mfr.php" method="get">
        <br>
       
        <h1 style="color: #00008B">MFR INFO</h1>
        <br>
        
        <input type="text" name="Campus_id" placeholder="Enter mfr id" required="">
        <input type="text" name="mfr_name" placeholder="Enter mfr name" required="">
        <input type="text" name="name_used" placeholder="Enter name used" required="">
         <input type="text" name="phone_no" placeholder="Enter phone number" required="">
          <input type="text" name="hours_given" placeholder="Enter number of hours given" required="">
           <input type="text" name="hostel_info" placeholder="Enter hostel info" required="">
            <input type="text" name="personal_bag" placeholder="Enter if they own a persnal bag" required="">
        
        <button>submit</button>
        
    </form>
     

</body>
</html>