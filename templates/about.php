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
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
     <style>
        .background{
    height: 20rem;
    background:
    linear-gradient(
        45deg,
        rgba(85, 76, 87, 0.6),
        rgba(130, 120, 139, 0.7)
    ),
    url(../img/about-bg.jpg)
    ;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
}
     </style>
    <title>About</title>
</head>
<body>
<!--<header id="header"></header> -->
<?php include "nav.php" ?>
<div class="background">
    <div class="container">
    <h1 class="text-center pt-2" style="color:#fff;">About</h1>
        <div class="container d-flex align-item-center justify-content-center">
    <p class="fs-5 text-wrap text-center" style="width:30rem; color:#fff;">
        This website was designed and developed by web dev meister.
    </p>
    </div>
    </div>
</div>


<?php include "reviews.php" ?>
<?php include "footer.php" ?>

</body>
</html>