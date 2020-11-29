<?php


    $userID=$_GET['User_Id'];
    $userpassword=$_GET['password'];

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'emergency management system';

    $conn = mysqli_connect($servername, $username, $password, $dbname);


    if ($conn==false) {
        echo "Connection Failed";
    } else {

        $sql = "SELECT `ID` FROM `login` WHERE `ID`='$userID' AND `password`='$userpassword'";

        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)==0) {
             header('Location:login.php?Incorrect=1');
             


        } else {

            session_start();
            $_SESSION['login']=1;

            header('Location:dashboard.php');
        }
    }

    mysqli_close($conn);
?>