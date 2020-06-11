<?php
require('../include/common.php');
$name=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$password=md5($password);
$contact=mysqli_real_escape_string($con,$_POST['contact']);
$city=mysqli_real_escape_string($con,$_POST['city']);
$address=mysqli_real_escape_string($con,$_POST['address']);
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$regex_num = "/^[789][0-9]{9}$/";
$email_check="SELECT email FROM users WHERE email='$email'";
$email_check_result=mysqli_query($con,$email_check)or die($mysqli_error($con));
if(mysqli_num_rows($email_check_result)!=0)
{
  $m = "<span class='red'>Email Already Exists</span>";
  header('location: signup.php?m1=' . $m);
}
else if (!preg_match($regex_email, $email)) {
  $m = "<span class='red'>Not a valid Email Id</span>";
  header('location: signup.php?m1=' . $m);
} else if (!preg_match($regex_num, $contact)) {
  $m = "<span class='red'>Not a valid phone number</span>";
  header('location: signup.php?m2=' . $m);
} 
else
{
  $insert_user="INSERT INTO users(name,email,password,contact,city,address) VALUES('" . $name . "','" . $email . "','" . $password . "','" . $contact . "','" . $city . "','" . $address . "')";
  mysqli_query($con,$insert_user)or die(mysqli_error($con));
  $_SESSION['email']=$email;
  $_SESSION['user_id']=mysqli_insert_id($con);
  header('location:product.php');
}
?>