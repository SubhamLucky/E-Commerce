<?php
require('../include/common.php');
if(isset($_SESSION['email']))
{
header('location:product.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" type="text/css">
  <script src="/bootstrap/js/jquery-3.5.1.min.js" type="text/javascript"></script>
  <script src="/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="../css/style.css"type="text/css">
  <title>Lifestyle Store</title>
</head>
<body>
<?php
include '../include/header.php'
?>
    <div id="banner-image">
      <div class="container">
        <div id="banner-content">
          <h1>We sell lifestyle</h1>
          <p>Flat 40% OFF on premium brands</p>
        <a href="product.php"><button class="btn btn-danger">Shop Now</button></a>
        </div>
      </div>

    </div>
    <?php
    include '../include/footer.php';
    ?>
</body>
</html>