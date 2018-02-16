<?php
  include('conn.php');
  if(isset($_SESSION['UID'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Users</h2>
  <a href="form.php" class="btn btn-info" role="button">Add New</a>

  <p>The .table-striped class adds zebra-stripes to a table:</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>phone</th>
        <th>Email</th>
        <th>password</th>
      </tr>
    </thead>
    <tbody>
        <?php
            $sel = "SELECT * FROM user";
            $res = $con->query($sel);
            while($row = $res->fetch_assoc())
            {

        ?>
        <tr>
            <td><?php echo $row['Tname'] ?></td>
            <td><?php echo $row['Temail'] ?></td>
            <td><?php echo $row['Iphone'] ?></td>
            <td><?php echo $row['Tpass'] ?></td>
            <td>
              <form action="del-cont.php" method="post">
                <input type="hidden"  value=<?php echo $row['Iid'] ?> name="id" >  
                <input type="submit" class="btn btn-danger" name="sub" value="Delete" onclick="return confirm('Are you sure? want to delete');")>
              </form>
            </td>    
        </tr>
        <?php
            }
        ?>

    </tbody>
  </table>
</div>

</body>
</html>
<?php } 
  else {
    header("location: login.php");
  }
?>
