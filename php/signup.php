<?php
require('../include/common.php');
if(isset($_SESSION['email']))
{
  header("location:product.php");
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
          <h1>SIGN UP</h1>
          <form method="POST" action="signup_script.php">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Name" name="name" required>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Email" name="email" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Password" name="password" required>
            </div>
            <div class="form-group">
              <input type="number" class="form-control" placeholder="Contact" name="contact" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="City" name="city" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control input-lg" placeholder="Address" name="address" required>
            </div>
            <input type="submit" value="Submit" class="btn btn-primary">
          </form>
        </div>
      </div>
    </div>
    <?php
    include '../include/footer.php';
    ?>
</body>
</html>