<!DOCTYPE html>
<html>
<head>
    <title>EMS</title>
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
        $date=date('Y-m-d');
        $sql = "SELECT A.campus_id,A.date,A.day,B.start_time,B.end_time FROM `duty_schedule` AS A JOIN `time_slot` AS B WHERE A.time_slot_id=B.time_slot_id and DATE(A.date)='$date'";

        $result = mysqli_query($conn,$sql);
        echo "<table border='1'>

        <tr>

        <th>campus_id</th>

        <th>date</th>

        <th>day</th>

        <th>start_time</th>
        <th>end_time</th>

        </tr>";

        while ($row=mysqli_fetch_assoc($result)) {
            echo "<tr>";

                 echo "<td>" .$row['campus_id'] . "</td>";
                 echo "<td>" .$row['date'] . "</td>";
                 echo "<td>" .$row['day'] . "</td>";
                 echo "<td>" .$row['start_time'] . "</td>";
                 echo "<td>" .$row['end_time'] . "</td>";
            echo "</tr>";  
        }

    }

    mysqli_close($conn);

?>


</body>
</html>
