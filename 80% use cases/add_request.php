<!-- <html>
<body>
    <header>
        <button><a href="request_equipment.php" style="color: white;">GO BACK</a></button>
    </header>
</body>
</html> -->
<?php
$id=$_GET['User_Id'];
$name=$_GET['patient_name'];
$Hostel=$_GET['Hostel_Info'];
$contact=$_GET['contact_number'];
$Return=$_GET['return'];
$equipment=$_GET['Equipment'];
// echo $equipment;
// echo $name;
// echo $Hostel;
// echo $contact;
// echo $Return;
// echo $equipment;

    $servername = 'localhost';
    $username = 'root';
    $password = 'password';
    $dbname = 'emergency management system';

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if ($conn==false) {
        echo "Connection Failed";
    }
    else{
    $curr_date=date('Y-m-d');
    $curr_time=date('H:i:s');
    $return_date=date(('Y-m-d'),strtotime("+{$Return} days"));
    // echo $curr_date;
    // echo $curr_time;
    // echo $return_date;

    $sql="INSERT INTO `equipment_issuance` (`request_id`, `product_id`, `date_issued`, `time_issued`, `expected_date_of_return`, `PATIENT_ID`, `patient_name`, `hostel_info`, `contact_no`) VALUES (NULL,'$equipment', '$curr_date', '$curr_time', '$return_date', '$id', '$name', '$Hostel', '$contact')";
    $result=mysqli_query($conn, $sql);
    if($result)
     {
        echo "Connection Succesful";
        header('Location:request_equipment.php?success=1');
     }   
     else{
        echo "Connection Unsuccesful";
        header('Location:request_equipment.php?unsuccess=1');
     }
        
    
}
    

    mysqli_close($conn);
?>