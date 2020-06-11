<?php
require('../include/common.php');
if (isset($_GET['id']) && is_numeric($_GET['id'])){
$product_id = $_GET['id'];
$user_id = $_SESSION['user_id'];
$insert_product="INSERT INTO users_products(user_id,product_id,status) VALUES('$user_id','$product_id','Added to cart')";
$result=mysqli_query($con,$insert_product)or die(mysqli_error($con));
header('location:product.php');
}
?>