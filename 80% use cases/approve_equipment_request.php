<!-- <html>
<body>
    <header>
        <button><a href="issue_equipment.php" style="color: white;">GO BACK</a></button>
    </header>
</body>
</html> -->
<?php
$Request_id=$_GET['request_id'];
$file=fopen("user_id.txt","r");
$mfr_id=fread($file,filesize("user_id.txt"));
echo $mfr_id;
fclose($file);
    $servername = 'localhost';
    $username = 'root';
    $password = 'password';
    $dbname = 'emergency management system';

    $conn = mysqli_connect($servername, $username, $password, $dbname);


    if ($conn==false) {
        echo "Connection Failed";
    } else {

        $sql = "UPDATE `equipment_issuance` SET `MFR_ID` = '$mfr_id' WHERE `request_id` = '$Request_id'";
        $result=mysqli_query($conn,$sql);
        if($result)
        {
            header('Location:issue_equipment.php?issued=1');
        }
        else{
            header('Location:issue_equipment.php?notissued=1');
        } 

    }

    mysqli_close($conn);
?>