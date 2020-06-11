<?php
require('../include/common.php');
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
  $product_id = $_GET["id"]; 
  $user_id = $_SESSION['user_id'];
$delete_product="DELETE FROM users_products WHERE user_id='$user_id' AND product_id='$product_id'";
$result=mysqli_query($con,$delete_product)or die($mysqli_error($con));
header('location:cart.php');
}
?>