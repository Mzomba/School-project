<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
     <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
     <style>
        .title{
            height: 20rem;
            background:
                linear-gradient(
                45deg,
                rgba(85,76,87,0.6),
                rgba(130,120,139,0.7)
    ),
                url(../img/shop-bg.jpg)
    ;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
        }
     </style>
    <title>Document</title>
</head>
<body>
<!--<header id="header"></header> -->
<?php include "nav.php" ?>
<div class="title">
    <h2 class="text-center text-light mt-2">Shop</h2>
    <p class="text-center text-light">
        Welcome to our shop. If you want to read offline you can get the pdf you prefer below.
    </p>
</div>

<div class="container mt-4">
    <h2 class="text-center">PDFs</h2>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="../img/shop-bg.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title">Umhlanga PDF</h5>
        <button class="btn btn-primary mt-3 mx-4">Add to Cart</button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="../img/shop-bg.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title">Umhlanga PDF</h5>
        <button class="btn btn-primary mt-3 mx-4">Add to Cart</button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="../img/shop-bg.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title">Umhlanga PDF</h5>
        <button class="btn btn-primary mt-3 mx-4">Add to Cart</button>
      </div>
    </div>
  </div>
</div>
</div>

<?php include "footer.php" ?>
</body>
</html>