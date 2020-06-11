<?php
require('../include/common.php');
if(!isset($_SESSION['email']))
{
  header('location:index.php');
}
$user_id = $_SESSION['user_id'];
$item_ids_string = $_GET['itemsid'];
$change="UPDATE users_products SET status='Confirmed' WHERE user_id='$user_id' AND product_id IN (" . $item_ids_string . ") and status='Added to cart'";
$result=mysqli_query($con,$change)or die($mysqli_error($con));
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
  <div class="container">
  <div class="jumbotron">
    <h3>Your Order is Confirmed</h3>
    <p>Thank you for shopping with us</p>
    <p><a href="product.php">Click here</a>to purchase any other item</p>
  </div>
</div>
</body>
</html>