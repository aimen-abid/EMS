<?php

$User_Id=$_GET['User_Id'];
$password1 = $_GET['password1'];
$password2 = $_GET['password2'];
$mfr=$_GET['mfr_trainee'];

if ($password1!=$password2) {
    header('Location:signup.php?passwordFailure=1');
} else {

    $servername = 'localhost';
    $username = 'root';
    $password = 'password';
    $dbname = 'emergency management system';

    $conn = mysqli_connect($servername, $username, $password, $dbname);


    if ($conn==false) {
        echo "Connection Failed";
    }
    
    //do anything to the database, you have access
    if($mfr=="mfr")
    {
        $sql = "INSERT INTO `login` (`mfr_id`, `password`,`department`) VALUES ('$User_Id','$password1','$mfr')";
    }
    else
    {
        $sql = "INSERT INTO `login` (`trainee_id`, `password`,`department`) VALUES ('$User_Id','$password1','$mfr')";
    }
    
    
    
    if (mysqli_query($conn, $sql)) {
        echo "Query Successful";
        session_start();
            $_SESSION['login']=1;

            header('Location:dashboard.php');
    } else {
        echo "Query failed";
    }
    

    mysqli_close($conn);
}




?>
