 <?php
  include('conn.php');
  if(isset($_SESSION['UID'])) {

?>
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    .box {
        padding: 10px;
        background-color: cadetblue;
        margin: 150px auto;
        margin-left: 500px;
        width: 400px;
        height: auto;
        float:unset;
        -webkit-border-radius: 5px 5px 5px 5px;
        border-radius: 5px 5px 5px 5px;
    }
    .box:hover {
        -webkit-box-shadow: 10px 10px 10px 10px #0DD1C7;
        box-shadow: 1px 1px 3px 3px #0DD1C7;
    }
    
</style> 
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
            <div class="box">
                <form action="form-cont.php" method="post">
                    <!-- <p>Name</p> -->
                    <p>
                        <input type="text" class="form-control" name="name" placeholder="name" require="">
                    </p>
                    <!-- <p>Email</p> -->
                    <p>
                        <input type="email" class="form-control" name="email" placeholder="email" require="">
                    </p>
                    <!-- <p>Phone</p> -->
                    <p>
                        <input type="number" class="form-control" name="phone" placeholder="phone" require="">
                    </p>
                    <p>
                        <input type="password" class="form-control" name="pass" placeholder="password" require="">
                    </p>
                    <p>
                        <input type="submit" class="btn btn-dafault" name="sub" value="Submit">
                        <input type="reset" class="btn btn-danger" name="reset" value="Cancel">
                    </p>
                </form>
            </div>>
            

        </div>
    </div>

</div>
<?php } 
  else {
    header("location: login.php");
  }
?>






