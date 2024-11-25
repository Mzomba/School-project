<?php
session_start();
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
if(isset($_SESSION['username'])){
  $session =  $_SESSION['username'];
  $sql = "SELECT username, firstname, lastname, email, profilepic FROM users WHERE username = '$session'";
  $result = $conn->query($sql);
 }
?>
<head>
  <script src="jquery-3.7.1.min.js"></script>
  <link rel="stylesheet" type="text/css" href="jquery.rateyo.min.css"> 
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.4/jquery.rateyo.min.css"> 

 

<link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js" defer></script>
</head>
<body>
<?php include 'nav.php' ?>
<?php
if (isset($_POST['submit'])) {
  $rate_score = $_POST['rate_score'];
  $username = $_POST['username'];
  $comment = $_POST['comment'];
  $sql = "INSERT INTO website_rating(rating_score, name, comment,created_date ) VALUES('$rate_score',  '$username', '$comment', current_date)";
  mysqli_query($conn, $sql);
  echo "<script>location.href = 'all_reviews.php';</script>";  
}
?>    
    <section style="background-color: #fff;">
      
        <div style=" height: 20rem;
        background:
        linear-gradient(
            45deg,
            rgba(85, 76, 87, 0.6),
            rgba(130, 120, 139, 0.7)
        ),
        url(../img/umtsimba.jpg)
        ;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;">
    
    <h1 class="text-center text-light pt-2">Rate our website</h1>
        <div class="container d-flex align-item-center justify-content-center">
            <p class="fs-5 text-wrap text-center text-light" style="width:30rem;">
                We would to know what you thing about our website.
            </p>
        </div>
    </div>
        <div class="container my-5 py-5 text-dark">
    <div class="row d-flex justify-content-center">
      <div class="col-md-10 col-lg-8 col-xl-6">
        <div class="card">
          <div class="card-body p-4">
            <div class="d-flex flex-start w-100">
                <?php
if (!isset($_SESSION['username'])) {
    echo '<img class="rounded-circle shadow-1-strong me-3"
    src="../img/user.webp" alt="avatar" width="65"
    height="65" />';
}else{
     $profile = $result->fetch_assoc();
       ?> 
    <img class='rounded-circle shadow-1-strong me-3'
    src='./uploads/<?php echo($profile["profilepic"]); ?>' alt='avatar' width='65'
    height='65'/>
    <?php
}
 ?>
 <form method="POST" action="#" class="form">
              <div class="w-100">
                <h3>Rate us</h3>

                <div class="star-container">
                  <span class="star" onclick="rate(1)">★</span>
                  <span class="star" onclick="rate(2)">★</span>
                  <span class="star" onclick="rate(3)">★</span>
                  <span class="star" onclick="rate(4)">★</span>
                  <span class="star" onclick="rate(5)">★</span>
                </div>
                <div class="row gy-3 overflow-hidden">
                <h5 class="output" id="output"><span>Rating:</span>&nbsp;0</h5>
                <input type="hidden" id="input" name="rate_score">
    
                <div class="form-floating mb-3 mt-2">
                <?php
                      if (!isset($_SESSION['username'])) {
                          echo '<input type="text" class="form-control text-secondary" name="username" id="userName" placeholder="Username">
                            <label for="usertName" class="form-label text-secondary">Username</label>';
                          }else{
                            $profile = $result->fetch_assoc();
                            ?> 
                            <input type="text" class="form-control text-secondary" value="<?=$_SESSION['username']?>" name="username" id="userName" placeholder="Username">
                              <?php 
                          }
                              ?>
                  </div>
                <div data-mdb-input-init class="form-outline">
                  <textarea class="form-control" id="textAreaExample" rows="4" placeholder="What is your view" name="comment"></textarea>
                  </div>
                  <div class="d-flex justify-content-center mt-3">
                  <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary w-100" name="submit">
                    Post
                  </button>
                </div>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </div>   

  <form action=""></form>
</section> 
<?php
?>
<?php include 'footer.php' ?>
</body>

