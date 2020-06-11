<?php

function check_if_added($product_id)
{
  $user_id=$_SESSION['user_id'];
  require('common.php');
  $fetch="SELECT * FROM users_products WHERE product_id='$product_id' AND user_id='$user_id' AND status='Added to cart'";
  $result=mysqli_query($con,$fetch)or die(mysqli_error($con));
  if(mysqli_num_rows($result)>=1)
  {
   return 1;
  }
  else
  {
    return 0;
  }
}
?>