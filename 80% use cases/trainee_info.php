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

        $sql = "SELECT * FROM `trainee_info`";

        $result = mysqli_query($conn,$sql);
        echo "<table border='1'>

        <tr>

        <th>campus_id</th>

        <th>trainee_name'</th>

        <th>gender</th>

        <th>phone_no</th>
       
        <th>hours_given</th>
        <th>hostel_info</th>
        </tr>";

        while ($row=mysqli_fetch_assoc($result)) {
            
            echo "<tr>";

                 echo "<td>" .$row['campus_id'] . "</td>";
                 echo "<td>" .$row['trainee_name'] . "</td>";
                 echo "<td>" .$row['gender'] . "</td>";
                 echo "<td>" .$row['phone_no']  . "</td>";
                 echo "<td>" .$row['hours_given']  . "</td>";
                 echo "<td>" .$row['hostel_info'] . "</td>";

                
            echo "</tr>"; 
        }

    }


    mysqli_close($conn);

?>

</body>
</html>
