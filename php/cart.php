<?php
require('../include/common.php');
if(!isset($_SESSION['email']))
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
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
        <?php
        $sum = 0;
        $user_id = $_SESSION['user_id'];
        $fetch_product="SELECT products.name,products.id,products.price FROM users_products JOIN products  ON users_products.product_id=products.id WHERE users_products.user_id='$user_id' AND status='Added to cart'";
        $result=mysqli_query($con,$fetch_product)or die($mysqli_error($con));
        if(mysqli_num_rows($result)>=1){
        ?>
         <thread>
           <tr>
             <th>Item Number</th>
             <th>Item Name</th>
             <th>Price</th>
             <th></th>
           </tr>
           </thread>
           <tbody>
           <?php
           while ($row = mysqli_fetch_array($result))
           {
            $sum+= $row["price"];
            $id= $row["id"] . ", ";
            echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>Rs " . $row["price"] . "</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a></td></tr>";
           }
           $id = rtrim($id, ", ");
           echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php?itemsid=" . $id . "' class='btn btn-primary'>Confirm Order</a></td></tr>";
           ?>
           </tbody>
           <?php
            } else {
              echo "Add items to the cart first!";
          }
          ?>
          
        </table>
    </div>
  </div>
  <?php
    include '../include/footer.php';
    ?>
  
</body>
</html>