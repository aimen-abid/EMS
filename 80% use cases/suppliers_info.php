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

        $sql = "SELECT * FROM `suppliers`";

        $result = mysqli_query($conn,$sql);
        echo "<table border='1'>

        <tr>

        <th>Supplier_Id</th>

        <th>Supplier_Name</th>

       

        </tr>";


        while ($row=mysqli_fetch_assoc($result)) {
            
             echo "<tr>";

                 echo "<td>" .$row['supplier_ID'] . "</td>";
                 echo "<td>" .$row['supplier_name'] . "</td>";
            echo "</tr>";         }

    }


    mysqli_close($conn);

?>


</body>
</html>
