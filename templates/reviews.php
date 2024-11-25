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

<head>

</head>

<div class="reviews-container" style="margin-top:5rem;">
  <h3 class="text-center pt-4">Clients' reviews</h3>
  <div class="px-4">
    <p class="text-center text-dark">This is what some of the users has said and give ratings to our site.</p>
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