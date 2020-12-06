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
    <p1>Evaluation report is submitted</p1>
<?php
$Mfr_id=isset($_GET['mfr_id'])?$_GET['mfr_id']:FALSE;
$Trainee_id=$_GET['trainee_id'];
$Vs_pulse=isset($_GET['vs_pulse'])?TRUE:FALSE;
$Vs_bp=isset($_GET['vs_bp'])?TRUE:FALSE;
$Vs_temp=isset($_GET['vs_temp'])?TRUE:FALSE;
echo $Trainee_id;
echo $Vs_pulse;

    $servername='localhost';
    $username='root';
    $password='password';
    $db_name='emergency management system';

    $conn=mysqli_connect($servername,$username,$password,$db_name);

if($conn==false)
{
    echo "Connection Failed";
}
else{
if($Vs_pulse)
{
    echo "here";
    $sql="UPDATE `evaluation_records` SET `mfr_id` = $Mfr_id,`vital_sign_pulse` = 1 WHERE `evaluation_records`.`trainee_id` = $Trainee_id";
    // echo "error is: " .$conn->error;
    // die();
    // echo $sql;
    $result=mysqli_query($conn,$sql);
    // if($conn)
    //     echo "connect";
    // if($result==true)
    //     echo "here2";
}
if($Vs_bp)
{
    $sql="UPDATE `evaluation_records` SET `vital_sign_bp` = '1' WHERE `trainee_id` = '$Trainee_id'";
    $result=mysqli_query($conn,$sql);
}
if($Vs_temp)
{
    $sql="UPDATE `evaluation_records` SET `vital_sign_temp` = '1' WHERE `trainee_id` = '$Trainee_id'";
    $result=mysqli_query($conn,$sql);
}
}
mysqli_close($conn);



?>