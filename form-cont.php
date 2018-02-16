<?php
    include('conn.php');

    if(isset($_POST["sub"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $pass = $_POST["pass"];
        $ins = "INSERT INTO user SET Tname = '$name', Temail = '$email', Iphone ='$phone', Tpass = '$pass'";

        $con->query($ins);
        header("location: index.php");
    }
    else {
        header("location: index.php");
    }

?>