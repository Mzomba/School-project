<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
     <script src="../bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
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
    <title>Events</title>
</head>
<body>
<!--<header id="header"></header> -->
<?php include "nav.php" ?>
<div class="title">
  <div class="container">
    <h2 class="text-center pt-2" style="color:#fff";>Events</h2>
    <div class="d-flex align-item-center justify-content-center">
      <p class="fs-5 d-flex align-item-center justify-content-center" style="color:#fff;width:38rem;">
          Welcome to our events. dates for cultural events taking place in the country. Check below.
      </p>
      </div>
  </div>
</div>
<div class="container mt-4";>
    <h2 class="text-center" style="margin-top:5rem;">Cultural Events</h2>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="../img/incwala.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title">Incwala</h5>
        <div class="d-flex justify-content-center"><p>Date:</p> &nbsp; <span>28 December 2024</span></div>
        <button class="btn btn-primary mt-3 mx-4">Read about Incwala</button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="../img/incwala.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title">Day off for Incwala day</h5>
        <div class="d-flex justify-content-center"><p>Date:</p> &nbsp; <span>30 December 2024</span></div>
        <button class="btn btn-primary mt-3 mx-4"><a href=""Read about Incwala</button>
      </div>
    </div>
  </div>
</div>
</div>

<?php include "footer.php" ?>
</body>
</html>