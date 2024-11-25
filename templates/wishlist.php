<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
     <script src="../bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
     <style>
        .background{
    height: 20rem;
    background:
    linear-gradient(
        45deg,
        rgba(85,76,87,0.6),
        rgba(130,120,139,0.7)
    ),
    url(../img/cart_bg.jpg)
    ;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
}
     </style>
    <title>Whishlist</title>
</head>
<body>
<!--<header id="header"></header> -->
<?php include "nav.php" ?>
<div class="background">
    <h1 class="text-center text-light pt-2">Whishlist</h1>
    <div class="container d-flex align-item-center justify-content-center">
<p class="fs-2 text-wrap text-center text-light" style="width:30rem;">
    All the pdfs that you wish to buy someday are below.
</p>
</div>
</div>

<div class="cart-container">
    <h3 class="text-center pt-4 mb-4">My Whishlist</h3>
    <div class="container">
        <div class="row">
            <div class="row">
                <img src="../img/shop-bg.jpg" alt="" style="height: 50px; width:50px;" class="col">
                <div class="col name">Umhlanga PDF</div>
                <div class="col price">E20.00</div>
                <div class="col controls"><button class="btn btn-danger">remove</button> <button class="btn btn-primary">add to cart</button></div>
                .
            </div>
        </div>
    </div>
<?php include "footer.php" ?>

</body>
</html>