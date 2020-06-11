<nav class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <a href="index.php" class="navbar-brand">Lifestyle Store</a>
      </div>
      <div>
        <ul class="nav navbar-nav navbar-right">
        <?php
         if(isset($_SESSION['email']))
         {
        ?>
          <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
          <li><a href="settings.php"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
          <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        <?php
         }
         else
         {
           ?>
            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          <?php
         }
        ?>

        </ul>
      </div>
    </div>

  </nav>