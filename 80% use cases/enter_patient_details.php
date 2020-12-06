<!-- <html>
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
</body>
</html> -->
<?php
$campus_id=$_GET['Campus_id'];
$Gender=$_GET['gender'];
$hostel=$_GET['hostel_info'];
$Location=$_GET['location'];
$trauma=$_GET['medical_trauma'];
$emergency=$_GET['emergency_details'];
$Treatment=$_GET['treatment'];
$hospital=$_GET['Transported_to_hospital'];
$v_date=(isset($_GET['visit_date']))?$_GET['visit_date']:'';
$v_time=(isset($_GET['visit_time']))?$_GET['visit_time']:'';
$h_treatment=(isset($_GET['hospital_treatment']))?$_GET['hospital_treatment']:'';
$arrival=(isset($_GET['time_arrival']))?$_GET['time_arrival']:'';
$bag=$_GET['Bag_used'];
$product=$_GET['Products_used'];
$file=fopen("user_id.txt","r");
$MFR_id=fread($file,filesize("user_id.txt"));
fclose($file);

$servername='localhost';
$username = 'root';
$password = 'password';
$db_name='emergency management system';

$conn=mysqli_connect($servername,$username,$password,$db_name);

if($conn==false)
{
    echo "Connection Failed";
}
else
{
    //echo "here";
   // echo $bag;
   //echo $hospital;
    $sql1 = "SELECT `bag_id` FROM `bag_details` WHERE `bag_location`='$bag'";
    $bag_id_extract = mysqli_query($conn,$sql1);
    $row=mysqli_fetch_assoc($bag_id_extract);
    $bag_id=$row['bag_id'];
    //echo $bag_id;
    $sql2="INSERT INTO `treats` (`MFR_ID`, `patient_id`,`location`, `medical_trauma`, `details_of_emergency`, `treatment`, `transported_to_hospital`, `bag_ID`, `products_used`) VALUES ('$MFR_id', '$campus_id','$Location', '$trauma', '$emergency', '$Treatment', '$hospital', '$bag_id', '$product')";
    $treat_table_insert=mysqli_query($conn,$sql2);
    //echo "here2";
    // $sql3="SELECT `treat_id` FROM `treats` WHERE `MFR_ID`='$MFR_id' AND `patient_id`='$campus_id' AND `location`='$Location' AND `medical_trauma`='$trauma' AND `details_of_emergency`='$emergency' AND `treatment`='$Treatment' AND `transported_to_hospital`='$hospital' AND `bag_id`='$bag_id' AND `product_used`='$product'";
    // $treat_id_extract=mysqli_query($conn,$sql3);
    // $row1=mysqli_fetch_assoc($treat_id_extract);
    // $treat_id=$row1['treat_id'];
    $sql4="INSERT INTO `patient_details` (`campus_id`, `Gender`, `hostelite`,`treat_id`) VALUES ('$campus_id','$Gender', '$hostel', LAST_INSERT_ID())";
    $patient_table_insert=mysqli_query($conn,$sql4);
    if($hospital=="yes")
    {
        $sql5="INSERT INTO `hospital_visits` (`visit_date`,`visit_time`,`Patient_ID`,`hospital_treatment`,`time_left`,`time_arrival`,`treat_id`) VALUES ('$v_date','$v_time','$campus_id','$h_treatment','$v_time','$arrival',LAST_INSERT_ID())";
        $hospital_table_insert=mysqli_query($conn,$sql5);
    }
    $check=true;
    if($bag_id_extract && $treat_table_insert && $patient_table_insert)
    {
        if($hospital=="yes")
        {
            if(!($hospital_table_insert))
            {
                $check=false;
            }
        }
        
    }
    else
        $check=false;
    $_SESSION['login']=1;
    if($check)
        header('Location:patient_entry.php?success=1');
    else
        header('Location:patient_entry.php?unsuccess=1');
}
mysqli_close($conn);
?>