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

$Campus_ID=$_GET['Campus_id'];
$MFR_name = $_GET['mfr_name'];
$name_used = $_GET['name_used'];
$Phone_no = $_GET['phone_no'];
$Hours_given = $_GET['hours_given'];
$Hostel_info = $_GET['hostel_info'];
$Personal_Bag = $_GET['personal_bag'];

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'emergency management system';

    $conn = mysqli_connect($servername, $username, $password, $dbname);


    if ($conn==false) {
        echo "Connection Failed";
    }
    
    
    $sql = "SELECT `campus_id` FROM `mfr_info` where `campus_id`=$Campus_ID ";

    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result)>0) {
    
    header('Location:enter_mfr_info.php?InfoFailure=1');}


    
    else
    {
        $sql = "INSERT INTO `mfr_info` (`campus_id`, `mfr_name`,`name_used`,`phone_no`,`hours_given`,`Hostel_info`,`personal_bag`) VALUES ('$Campus_ID','$MFR_name','$name_used ','$Phone_no','$Hours_given','$Hostel_info','$Personal_Bag')";
        mysqli_query($conn, $sql);

        $sql = "SELECT * FROM `mfr_info`";

        $result = mysqli_query($conn,$sql);
        echo "<table border='1'>

        <tr>

        <th>campus_id</th>

        <th>mfr_name</th>

        <th>name_used</th>

        <th>phone_no</th>
        <th>hours_given</th>
        <th>hostel_info</th>
        <th>personal_bag</th>

        </tr>";

        while ($row=mysqli_fetch_assoc($result)) {
             echo "<tr>";

                 echo "<td>" .$row['campus_id'] . "</td>";
                 echo "<td>" .$row['mfr_name'] . "</td>";
                 echo "<td>" .$row['name_used'] . "</td>";
                 echo "<td>" . $row['phone_no'] . "</td>";
                 echo "<td>" .$row['hours_given'] . "</td>";
                 echo "<td>" .$row['hostel_info'] . "</td>";
                 echo "<td>" .$row['personal_bag'] . "</td>";
            echo "</tr>";  
            
    }}
    
    

    mysqli_close($conn);





?>

</body>
</html>

