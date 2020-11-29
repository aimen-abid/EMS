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
    $password = '';
    $dbname = 'emergency management system';

    $conn = mysqli_connect($servername, $username, $password, $dbname);


    if ($conn==false) {
        echo "Connection Failed";
    } else {

        $sql = "SELECT * FROM `inventory`";

        $result = mysqli_query($conn,$sql);
        echo "<table border='1'>

        <tr>

        <th>supplier_id</th>

        <th>product_id</th>

        <th>product_name</th>

        <th>product_count</th>
        <th>expiry_date</th>

        </tr>";

        while ($row=mysqli_fetch_assoc($result)) {
            echo "<tr>";

                 echo "<td>" .$row['supplier_id'] . "</td>";
                 echo "<td>" .$row['product_id'] . "</td>";
                 echo "<td>" .$row['product_name'] . "</td>";
                 echo "<td>" .$row['product_count'] . "</td>";
                 echo "<td>" .$row['expiry_date'] . "</td>";
            echo "</tr>";  
        }

    }

    mysqli_close($conn);

?>


</body>
</html>
