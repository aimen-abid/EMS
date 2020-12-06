<!DOCTYPE html>
<html>
<head>
    <title></title>
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
        <button><a href="dashboard.php" style="color: white;">GO BACK</a></button>
    </header>
<?php


    $servername = 'localhost';
    $username = 'root';
    $password = 'password';
    $dbname = 'emergency management system';

    $conn = mysqli_connect($servername, $username, $password, $dbname);


    if ($conn==false) {
        echo "Connection Failed";
    } else {

        $sql = "SELECT * FROM `equipment_issuance` WHERE `MFR_ID` IS NULL";

        $result = mysqli_query($conn,$sql);
        echo "<table border='1'>

        <tr>
        <th>request_id</th>
        <th>product_id</th>
        <th>date_issued</th>
        <th>time_issued</th>
        <th>expected_date_of_return</th>
        <th>patient_id</th>
        <th>patient_name</th>
        <th>hostel_info</th>
        <th>contact_number</th>

        </tr>";

        while ($row=mysqli_fetch_assoc($result)) {
             echo "<tr>";
                //$name="SELECT `product_name` FROM `inventory` WHERE `product_id`='.$row[product_id] .'";
                 echo "<td>" .$row['request_id'] . "</td>";
                 echo "<td>" .$row['product_id'] . "</td>";
                // echo "<td>" .$name['product_id']. "</td>";
                 echo "<td>" .$row['date_issued'] . "</td>";
                 echo "<td>" . $row['time_issued'] . "</td>";
                 echo "<td>" .$row['expected_date_of_return'] . "</td>";
                 echo "<td>" .$row['PATIENT_ID'] . "</td>";
                 echo "<td>" .$row['patient_name'] . "</td>";
                 echo "<td>" .$row['hostel_info'] . "</td>";
                 echo "<td>" .$row['contact_no'] . "</td>";
            echo "</tr>";  
            
        }
    }
    mysqli_close($conn);

?>
    <form action="approve_equipment_request.php" method="get">
        <h1>Equipment Approve</h1>
        <input type="number" name="request_id" placeholder="Enter Request id" required="">
        <button>submit</button>
    </form>
    <?php
    if(isset($_GET['issued']))
    {
        echo "Equipment issued";
    }
    else if (isset($_GET['notissued'])) {
        echo "Equipment not issued. Try again!";
    }
    ?>
</body>
</html>