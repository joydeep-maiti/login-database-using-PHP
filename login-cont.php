<?php
    include('conn.php');
    $count = 0;
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $sel = "SELECT * FROM user WHERE Tname='$name' AND Tpass='$pass' ";
    $res = $con->query($sel);
    while($row = $res->fetch_assoc()) {
            //  echo $row['Tname'] . $row['Tpass'];
            $_SESSION['UID'] = $row['Iid'];
            $count = $count+1;  
    }
    if($count > 0) {
        // echo $count;
        header("location: index.php");
    }
     else {
         header("location: login.php");
     }

?>