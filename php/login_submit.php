<?php
require('../include/common.php');
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$password=md5($password);
$fetch_query="SELECT id,email FROM users WHERE email='$email' AND password='$password'";
$result=mysqli_query($con,$fetch_query)or die($mysqli_error($con));;
if(mysqli_num_rows($result)==0)
{
$error="<span class='red'>Please enter correct email id and password</span>";
header('location:login.php?error=',$error);
}
else
{
  $row=mysqli_fetch_array($result);
  $_SESSION['email']=$row['email'];
  $_SESSION['user_id']=$row['id'];
  header('location:product.php');
}
?>