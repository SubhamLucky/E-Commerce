<?php
require('../include/common.php');
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
<?php
include '../include/check_if_added.php'
?>
  <div class="container">
    <div class="jumbotron">
      <h1>Welcome to our Lifestyle Store!</h1>
      <p>We have the best cameras, watches and shirts for you. No need to hunt around, we
        have all in one place.</p>
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="thumbnail">
          <img src="../images/1.jpg" alt="canon">
          <div class="caption">
            <h3>Cannon EOS</h3>
            <p>Price:Rs.36000.00</p>
            <?php
            if(!isset($_SESSION['email']))
            {?>
            <a href="login.php"><input type="button" value="Add to cart" class="btn btn-primary btn-block"></a>
            <?php
            }
            else
            {
              if(check_if_added(1))
              {
                ?>
                <input type="button" value="Add to cart" class="btn btn-primary btn-block" disabled>
                <?php
              }
              else
              {
                ?>
                <a href="cart-add.php?id=1"><input type="button" value="Add to cart" class="btn btn-primary btn-block"></a>
                <?php
              }
            }
            ?>
            
  
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="thumbnail">
          <img src="../images/2.jpg" alt="canon">
        <div class="caption">
          <h3>Sony DSLR</h3>
          <p>Price:Rs.40000.00</p>
          <?php
            if(!isset($_SESSION['email']))
            {?>
            <a href="login.php"><input type="button" value="Add to cart" class="btn btn-primary btn-block"></a>
            <?php
            }
            else
            {
              if(check_if_added(2))
              {
                ?>
                <input type="button" value="Add to cart" class="btn btn-primary btn-block" disabled>
                <?php
              }
              else
              {
                ?>
                <a href="cart-add.php?id=2"><input type="button" value="Add to cart" class="btn btn-primary btn-block"></a>
                <?php
              }
            }
            ?>
          
        </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="thumbnail">
          <img src="../images/3.jpg" alt="canon" class="thumbnail">
        <div class="caption">
          <h3>Sony DSLR</h3>
          <p>Price:Rs.50000.00</p>
          <?php
            if(!isset($_SESSION['email']))
            {?>
            <a href="login.php"><input type="button" value="Add to cart" class="btn btn-primary btn-block"></a>
            <?php
            }
            else
            {
              if(check_if_added(3))
              {
                ?>
                <input type="button" value="Add to cart" class="btn btn-primary btn-block" disabled>
                <?php
              }
              else
              {
                ?>
                <a href="cart-add.php?id=3"><input type="button" value="Add to cart" class="btn btn-primary btn-block"></a>
                <?php
              }
            }
            ?>
          
        </div>
        </div>
        </div>
        <div class="col-md-3">
          <div class="thumbnail">
            <img src="../images/4.jpg" alt="olympus" class="thumbnail">
        <div class="caption">
          <h3>Olympus DSLR</h3>
          <p>Price:Rs.80000.00</p>
          <?php
            if(!isset($_SESSION['email']))
            {?>
            <a href="login.php"><input type="button" value="Add to cart" class="btn btn-primary btn-block"></a>
            <?php
            }
            else
            {
              if(check_if_added(4))
              {
                ?>
                <input type="button" value="Add to cart" class="btn btn-primary btn-block" disabled>
                <?php
              }
              else
              {
                ?>
                <a href="cart-add.php?id=4"><input type="button" value="Add to cart" class="btn btn-primary btn-block"></a>
                <?php
              }
            }
            ?>
          
        </div>
          </div>
          </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="thumbnail">
        <img src="../images/9.jpg" alt="Titan301">
        <div class="caption">
          <h3>Titan Model #301</h3>
          <p>Price:Rs.13000.00</p>
          <?php
            if(!isset($_SESSION['email']))
            {?>
            <a href="login.php"><input type="button" value="Add to cart" class="btn btn-primary btn-block"></a>
            <?php
            }
            else
            {
              if(check_if_added(5))
              {
                ?>
                <input type="button" value="Add to cart" class="btn btn-primary btn-block" disabled>
                <?php
              }
              else
              {
                ?>
                <a href="cart-add.php?id=5"><input type="button" value="Add to cart" class="btn btn-primary btn-block"></a>
                <?php
              }
            }
            ?>
          
        </div>
      </div>
      </div>
      <div class="col-md-3">
        <div class="thumbnail">
        <img src="../images/10.jpg" alt="Titan201">
        <div class="caption">
          <h3>Titan Model #201</h3>
          <p>Price:Rs.3000.00</p>
          <?php
            if(!isset($_SESSION['email']))
            {?>
            <a href="login.php"><input type="button" value="Add to cart" class="btn btn-primary btn-block"></a>
            <?php
            }
            else
            {
              if(check_if_added(6))
              {
                ?>
                <input type="button" value="Add to cart" class="btn btn-primary btn-block" disabled>
                <?php
              }
              else
              {
                ?>
                <a href="cart-add.php?id=6"><input type="button" value="Add to cart" class="btn btn-primary btn-block"></a>
                <?php
              }
            }
            ?>
         
        </div>
      </div>
    </div>
      <div class="col-md-3">
        <div class="thumbnail">
        <img src="../images/11.jpg" alt="HMT Milan">
        <div class="caption">
          <h3>HMT Milan</h3>
          <p>Price:Rs.8000.00</p>
          <?php
            if(!isset($_SESSION['email']))
            {?>
            <a href="login.php"><input type="button" value="Add to cart" class="btn btn-primary btn-block"></a>
            <?php
            }
            else
            {
              if(check_if_added(7))
              {
                ?>
                <input type="button" value="Add to cart" class="btn btn-primary btn-block" disabled>
                <?php
              }
              else
              {
                ?>
                <a href="cart-add.php?id=7"><input type="button" value="Add to cart" class="btn btn-primary btn-block"></a>
                <?php
              }
            }
            ?>
          
        </div>
      </div>
    </div>
      <div class="col-md-3">
        <div class="thumbnail">
        <img src="../images/12.jpg" alt="Faber Luba">
        <div class="caption">
          <h3>Faber Luba #111</h3>
          <p>Price:Rs.18000.00</p>
          <?php
            if(!isset($_SESSION['email']))
            {?>
            <a href="login.php"><input type="button" value="Add to cart" class="btn btn-primary btn-block"></a>
            <?php
            }
            else
            {
              if(check_if_added(8))
              {
                ?>
                <input type="button" value="Add to cart" class="btn btn-primary btn-block" disabled>
                <?php
              }
              else
              {
                ?>
                <a href="cart-add.php?id=8"><input type="button" value="Add to cart" class="btn btn-primary btn-block"></a>
                <?php
              }
            }
            ?>
          
        </div>
      </div>
    </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="thumbnail">
        <img src="../images/8.jpg" alt="H&W">
        <div class="caption">
          <h3>H&W</h3>
          <p>Price:Rs.800.00</p>
          <?php
            if(!isset($_SESSION['email']))
            {?>
            <a href="login.php"><input type="button" value="Add to cart" class="btn btn-primary btn-block"></a>
            <?php
            }
            else
            {
              if(check_if_added(9))
              {
                ?>
                <input type="button" value="Add to cart" class="btn btn-primary btn-block" disabled>
                <?php
              }
              else
              {
                ?>
                <a href="cart-add.php?id=9"><input type="button" value="Add to cart" class="btn btn-primary btn-block"></a>
                <?php
              }
            }
            ?>
          
        </div>
      </div>
    </div>
      <div class="col-md-3">
        <div class="thumbnail">
        <img src="../images/6.jpg" alt="Luis Phil">
        <div class="caption">
          <h3>Luis Phil</h3>
          <p>Price:Rs.1000.00</p>
          <?php
            if(!isset($_SESSION['email']))
            {?>
            <a href="login.php"><input type="button" value="Add to cart" class="btn btn-primary btn-block"></a>
            <?php
            }
            else
            {
              if(check_if_added(10))
              {
                ?>
                <input type="button" value="Add to cart" class="btn btn-primary btn-block" disabled>
                <?php
              }
              else
              {
                ?>
                <a href="cart-add.php?id=10"><input type="button" value="Add to cart" class="btn btn-primary btn-block"></a>
                <?php
              }
            }
            ?>
          
        </div>
      </div>
    </div>
      <div class="col-md-3">
        <div class="thumbnail">
        <img src="../images/13.jpg" alt="John Zok">
        <div class="caption">
          <h3>John Zok</h3>
          <p>Price:Rs.1500.00</p>
          <?php
            if(!isset($_SESSION['email']))
            {?>
            <a href="login.php"><input type="button" value="Add to cart" class="btn btn-primary btn-block"></a>
            <?php
            }
            else
            {
              if(check_if_added(11))
              {
                ?>
                <input type="button" value="Add to cart" class="btn btn-primary btn-block" disabled>
                <?php
              }
              else
              {
                ?>
                <a href="cart-add.php?id=11"><input type="button" value="Add to cart" class="btn btn-primary btn-block"></a>
                <?php
              }
            }
            ?>
          
        </div>
      </div>
    </div>
      <div class="col-md-3">
        <div class="thumbnail">
        <img src="../images/14.jpg" alt="Jhalsani">
        <div class="caption">
          <h3>Jhalsani</h3>
          <p>Price:Rs.1300.00</p>
          <?php
            if(!isset($_SESSION['email']))
            {?>
            <a href="login.php"><input type="button" value="Add to cart" class="btn btn-primary btn-block"></a>
            <?php
            }
            else
            {
              if(check_if_added(12))
              {
                ?>
                <input type="button" value="Add to cart" class="btn btn-primary btn-block" disabled>
                <?php
              }
              else
              {
                ?>
                <a href="cart-add.php?id=12"><input type="button" value="Add to cart" class="btn btn-primary btn-block"></a>
                <?php
              }
            }
            ?>
         
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