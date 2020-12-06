<!DOCTYPE html>
<html>

<head>
    <title>Request Equipment</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">
        button
        {
            background-color: #00008B;
            color: white;
            padding: 14px 20px;
            margin: 8px 0px;
            border: none;
            cursor: pointer;
            width: 10%;
        }
        button:hover
        {
            background-color: green
        }
    </style>
</head>

<body>
    <header>
        <button><a href="index.php" style="color: white;">GO BACK</a></button>
    </header>

    <form action="add_request.php" method="get">
        <br>
       
        <h1 style="color: #00008B">EQUIPMENT REQUEST</h1>
        <br>
        <input type="text" name="User_Id" placeholder="Enter your Campus ID" required="" >
        
            <br>
            <br>
            

        <input type="text" name="patient_name" placeholder="Enter your name" required="">
        <br>
        <br>
        <label for="Hostel Info">Residence:</label>
        <select name="Hostel_Info" required="">
            <option value="day_scholar">day scholar</option>
            <option value="hostelite">hostelite</option>
        </select>
        <br>
        <br>
        <input type="text" name="contact_number" placeholder="Contact Number" required="">
        <br>
        <br>
        <input type="number" name="return" placeholder="Expected days in returning" required="">
        <br>
        <br>
        <select name="Equipment" required="">
            <option value="1">Crepe Bandages</option>
            <option value="2">Open Wove</option>
            <option value="3">Saniplasts</option>
            <option value="4">Deep Heat</option>
            <option value="5">Piodine</option>
            <option value="6">Scissors</option>
            <option value="7">BP Apparatus</option>
            <option value="9">Wheel Chair</option>
            <option value="10">Walker</option>
        </select>
        <br>
        <br>
        <button >submit</button>
    </form>
    <?php
    if(isset($_GET['success']))
    {
        echo"Your equipment request is added. You will be contacted soon.";
    }
    if(isset($_GET['unsuccess']))
    {
        echo"Your equipment request cannot be added. Please try again!";
    }
    ?> 

</body>
</html>