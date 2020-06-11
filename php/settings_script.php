<?php
require('../include/common.php');
if(!isset($_SESSION['email']))
{
  header('location:index.php');
}
$oldpassword=mysqli_real_escape_string($con,$_POST['oldpassword']);
$newpassword=mysqli_real_escape_string($con,$_POST['newpassword']);
$renewpassword=mysqli_real_escape_string($con,$_POST['renewpassword']);
$oldpassword=md5($oldpassword);
$newpassword=md5($newpassword);
$renewpassword=md5($renewpassword);
$query = "SELECT email, password FROM users WHERE email ='" . $_SESSION['email'] . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$row = mysqli_fetch_array($result);
$originalpassword = $row['password'];
if($newpassword!=$renewpassword)
{
  header('location: settings.php?error=The two passwords don\'t match');
}
else
{
  if(($oldpassword == $originalpassword))
  {
  $update_password="UPDATE users SET password='$newpassword' WHERE email = '" . $_SESSION['email'] . "'";
  $result=mysqli_query($con,$update_password)or die($mysqli_error($con));
  header('location: settings.php?error=Password Updated');
  }
  else
  {
    header('location: settings.php?error=Wrong Old Password');
  }
}
?>