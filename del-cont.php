<?php
    include('conn.php');
    echo "i m here";
    $id = $_POST["id"];
    $del = "DELETE FROM user WHERE Iid='$id'";

    $con->query($del);
    // echo "done";
    header("location: index.php"); 
?>