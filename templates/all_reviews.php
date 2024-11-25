<?php
#session_start();
#include("connection.php");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eswatinipedia";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
};
#$session =  $_SESSION['username'];
$sql = "SELECT username, profilepic FROM users";
$result1 = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery-3.7.1.min.js"></script>
  <link rel="stylesheet" type="text/css" href="jquery.rateyo.min.css"> 
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.4/jquery.rateyo.min.css"> 

 

<link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js" defer></script>
    <style>
        .background{
    height: 20rem;
    background:
    linear-gradient(
        45deg,
        rgba(85,76,87,0.6),
        rgba(130,120,139,0.7)
    ),
    url(../img/reviews_bg.jpg)
    ;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
}
     </style>
    <title>All reviews</title>
</head>
<body>

    <?php
        include 'nav.php'
    ?>

<div class="background">
<h1 class="text-center text-light pt-2">Reviews</h1>
        <div class="container d-flex align-item-center justify-content-center">
            <p class="text-light fs-5 d-flex align-item-center justify-content-center" style="width:30rem;">
                All of the reviews made by our users are available here.
            </p>
        </div>
</div>


<div class="reviews-container" style="margin-top:5rem;">
  <h3 class="text-center pt-4">Clients' reviews</h3>
  <div class="px-4">
    <p class="text-center text-dark">We are greatfull for giving us your views and rating our website.</p>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <?php 
     # $sql = "SELECT name,comment, rating_score FROM website_rating LIMIT 5"; 
     #$sql = "SELECT * FROM website_rating";
     $sql = "SELECT * FROM `website_rating` LEFT JOIN users ON website_rating.name = users.username";
      $result = $conn->query($sql);
        while($rate = $result->fetch_assoc()) {
    ?>
      <div class="col">
        <div class="card text-center">
        <?php
        if($rate['name'] == $rate['username']){
          ?>
           <img style="border-radius:50%; width:100px; height:100px;" src="./uploads/<?php echo($rate['profilepic']); ?>"class="card-img-top mx-auto d-block" alt="...">
           <?php
        }else{
          ?>
          <img style="border-radius:50%; width:100px; height:100px;" src="../img/user.webp"class="card-img-top mx-auto d-block" alt="...">
          <?php 
        }
          ?>
           
          <div class="card-body">
            <h5 class="card-title">
              <?=$rate['name']?>
            </h5>

            <div class="ratings">
              <?php
              #for($x = 0; $x < $rate['rating_score']; $x++){
               // echo '<span class="stared" style="font-size: 2rem;">★</span>';
             //echo '<span class="stared" style="color:rgb(255, 255, 0); font-size: 2rem;">★</span>';
             if($rate['rating_score'] == 1){
              for($x = 0; $x < $rate['rating_score']; $x++){
                echo '<span class="stared" style="color:rgb(255, 0, 0); font-size: 2rem;">★</span>';
              }
                echo '<span class="stared" style="font-size: 2rem;">★</span>';
                echo '<span class="stared" style="font-size: 2rem;">★</span>';
                echo '<span class="stared" style="font-size: 2rem;">★</span>';
                echo '<span class="stared" style="font-size: 2rem;">★</span>';
             }
            elseif($rate['rating_score'] == 2){
              for($x = 0; $x < $rate['rating_score']; $x++){
                echo '<span class="stared" style="color:rgb(255, 106, 0); font-size: 2rem;">★</span>';
              }
                echo '<span class="stared" style="font-size: 2rem;">★</span>';
                echo '<span class="stared" style="font-size: 2rem;">★</span>';
                echo '<span class="stared" style="font-size: 2rem;">★</span>';
             }
             if($rate['rating_score'] == 3){
              for($x = 0; $x < $rate['rating_score']; $x++){
                echo '<span class="stared" style="color:rgb(251, 255, 0); font-size: 2rem;">★</span>';
              }
                echo '<span class="stared" style="font-size: 2rem;">★</span>';
                echo '<span class="stared" style="font-size: 2rem;">★</span>';
                
             }
            elseif($rate['rating_score'] == 4){
              for($x = 0; $x < $rate['rating_score']; $x++){
                echo '<span class="stared" style="color:rgb(251, 255, 0); font-size: 2rem;">★</span>';
              }
              echo '<span class="stared" style="font-size: 2rem;">★</span>';

                    
                
             }
             elseif($rate['rating_score'] == 5){
              for($x = 0; $x < $rate['rating_score']; $x++){
                echo '<span class="stared" style="color:rgb(255, 159, 14); font-size: 2rem;">★</span>';
              }                
             }
            #}
              ?>
            </div>

            <p class="card-text">
              <?=$rate['comment']?>
            </p>
            <span>rated date: <?=$rate['created_date'] ?></span>
          </div>
        </div>
      </div>

      <?php
}
?>

    </div>
  </div>
</div>



<?php

    include 'footer.php'

?>

</body>
</html>