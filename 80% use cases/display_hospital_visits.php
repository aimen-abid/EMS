
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

        $sql = "SELECT * FROM `hospital_visits`";

        $result = mysqli_query($conn,$sql);
        echo "<table border='1'>

        <tr>

        <th>visit_date</th>

        <th>visit_time</th>

        <th>Patient_ID</th>

        <th>hospital_treatment</th>
        <th>time_left</th>
        <th>time_arrival</th>
        <th>treat_id</th>

        </tr>";

        while ($row=mysqli_fetch_assoc($result)) {
             echo "<tr>";

                 echo "<td>" .$row['visit_date'] . "</td>";
                 echo "<td>" .$row['visit_time'] . "</td>";
                 echo "<td>" .$row['Patient_ID'] . "</td>";
                 echo "<td>" . $row['hospital_treatment'] . "</td>";
                 echo "<td>" .$row['time_left'] . "</td>";
                 echo "<td>" .$row['time_arrival'] . "</td>";
                 echo "<td>" .$row['treat_id'] . "</td>";
            echo "</tr>";  
            
        }

    }

    mysqli_close($conn);

?>

</body>
</html>