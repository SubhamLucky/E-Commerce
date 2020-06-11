<?php
require('../include/common.php');
if(!isset($_SESSION['email']))
{
  header('location:index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" type="text/css">
  <script src="/bootstrap/js/jquery-3.5.1.min.js" type="text/javascript"></script>
  <script src="/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="../css/style.css"type="text/css">
  <title>Document</title>
</head>
<body>
<?php
include '../include/header.php'
?>
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h3>Change Password</h3>
        <form action="settings_script.php" method="POST">
        <div class="form-group">
          <input type="password" placeholder="Old Password" name="oldpassword" class="form-control">
        </div>
        <div class="form-group">
          <input type="password" placeholder="New Password" name="newpassword" class="form-control">
        </div>
        <div class="form-group">
          <input type="password" placeholder="Re-type New Password" name="renewpassword" class="form-control">
        </div>
        <input type="submit" value="Change" class="btn btn-primary">
        <!-- <?php
                        echo "<br><br><b class='red'>" . $_GET['error'] . "</b>";
                        ?> -->
        </form>
      </div>
    </div>
  </div>
  <?php
    include '../include/footer.php';
    ?>
  
</body>
</html>