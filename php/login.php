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
  <title>Document</title>
  <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" type="text/css">
  <script src="/bootstrap/js/jquery-3.5.1.min.js" type="text/javascript"></script>
  <script src="/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="../css/style.css"type="text/css">
</head>
<body>
<?php
include '../include/header.php'
?>
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading">
           <h3>LOGIN</h3>
          </div>
          <div class="panel-body">
            <p class="text-warning">Login to make a purchase</p>
            <form method="POST" action="login_submit.php">
              <div class="from-group">
                <input type="text" placeholder="Email" name="email" class="form-control"><br>
              </div>
                <div class="form-group">
                <input type="password" placeholder="Password" name="password" class="form-control">
              </div>
              <input type="submit" value="Login" class="btn btn-primary">

            </form>
          </div>
          <div class="panel-footer">
            <p>Don't have an account?<a href="signup.php">Register</a></p>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  <?php
    include '../include/footer.php';
    ?>
  
</body>
</html>