<!DOCTYPE html>
<html>

<head>
    <title>Evaluation Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <header>
        <button><a href="dashboard.php" style="color: white;">GO BACK</a></button>
  </header>
  
    <form action="store_eval_record.php" method="get">
        <br>
       
        <h1 style="color: #00008B">Evaluation Form</h1>
        <br>
        
        <input type="text" name="mfr_id" placeholder="Enter MFR id" required="">
        <input type="text" name="trainee_id" placeholder="Enter trainee id" required="">
        <br>
    
        <input type="checkbox" name="vs_pulse">
        <label for="vs_pulse">Vital sign pulse</label><br>
        <input type="checkbox" name="vs_bp">
        <label for="vs_bp">Vital sign bp</label><br>
        <input type="checkbox" name="vs_temp">
        <label for="vs_temp">Vital sign temperature</label><br>
        <button>submit</button>
        
    </form>
     

</body>
</html>