<?php


    $userID=$_GET['User_Id'];
    $userpassword=$_GET['password'];
    $mfr=$_GET['mfr_trainee'];

    $servername = 'localhost';
    $username = 'root';
    $password = 'password';
    $dbname = 'emergency management system';

    $conn = mysqli_connect($servername, $username, $password, $dbname);


    if ($conn==false) {
        echo "Connection Failed";
    } else {
        if($mfr=="mfr")
        {
            $sql = "SELECT `mfr_id`,`department` FROM `login` WHERE `mfr_id`='$userID' AND `password`='$userpassword'";
        }
        else
        {
            $sql = "SELECT `trainee_id` FROM `login` WHERE `trainee_id`='$userID' AND `password`='$userpassword'";
        }
        

        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)==0) {
             header('Location:login.php?Incorrect=1');
             


        } else {

            session_start();
            $_SESSION['login']=1;
            $file=fopen("user_id.txt","w");
            fwrite($file,$userID);
            fclose($file);

            $row=mysqli_fetch_assoc($result);
            //echo $row['department'];
            
            if($row['department']=='EC')
            {
                $_SESSION['EC']=true;
                $_SESSION['mfr']=1;
                //echo "here";
            }
            if($row['department']=='Operations')
            {
                //echo "here";
                $_SESSION['Operations']=true;
                $_SESSION['mfr']=1;
                unset($_SESSION['EC']);
            }
            if($row['department']=='mfr')
            {
                unset($_SESSION['EC']);
                unset($_SESSION['Operations']);
                $_SESSION['mfr']=1;
            }
            if($row['department']=='trainee')
            {
                unset($_SESSION['EC']);
                unset($_SESSION['Operations']);
                unset($_SESSION['mfr']);
            }

            header('Location:dashboard.php');
        }
    }

    mysqli_close($conn);
?>