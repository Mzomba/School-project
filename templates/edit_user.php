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
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <style>
        .background{
    height: 20rem;
    background:
    linear-gradient(
        45deg,
        rgba(85,76,87,0.6),
        rgba(130,120,139,0.7)
    ),
    url(../img/signup-bg.png)
    ;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
}
     </style>
    <title>Edit Profile</title>
</head>
<body>
<!--<header id="header"></header> -->
<?php
  session_start();
?>
<?php include "nav.php" ?>
<div class="background">
    <h1 class="text-center text-light pt-2">Update your profile</h1>
    <div class="container d-flex align-item-center justify-content-center">
<p class="fs-2 text-wrap text-center text-light" style="width:30rem;">
    Edit your profile here.
</p>
</div>
</div>

<div class="reviews-container">
  <!-- PHP SERVER SIDE -->
  <?php 
#<!-- BACK END -->
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eswatinipedia";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


    if (isset($_POST['update'])) {
      $profilepic = $_FILES["pic"] ["name"];
      $tempname = $_FILES["pic"] ["tmp_name"];
      $username = $_POST['username'];
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $email = $_POST['email'];
      $current = $_POST['current'];
      $exp = explode(".", $profilepic);
      $end = end($exp);
      $name = time().".".$end;
      $folder = "./uploads/" . $profilepic;
                
      if(unlink('./uploads/'.$current)){
            $session =  $_SESSION['username'];
            if(move_uploaded_file($tempname, $folder)){      
                $sql = "UPDATE users SET username = '$username', firstname = '$firstname', lastname = '$lastname', email = '$email', profilepic = '$profilepic' WHERE username = '$session'";
                mysqli_query($conn, $sql);
                session_unset();
                echo "<script>location.href = 'login.php';</script>";
            }
        }
    }
      ?>



  <!-- Registration - Bootstrap Brain Component -->
<section class="bg-light p-3 p-md-4 p-xl-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-9 col-lg-7 col-xl-6 col-xxl-5">
        <div class="card border border-light-subtle rounded-4">
          <div class="card-body p-3 p-md-4 p-xl-5">
            <div class="row">
              <div class="col-12">
                <div class="mb-5">
                  <h2 class="h4 text-center">Update Profile</h2>
                  <h3 class="fs-6 fw-normal text-secondary text-center m-0">Update your profile here</h3>
                </div>
              </div>
            </div>
            <form action="#" method="POST" enctype="multipart/form-data">
            <?php
            $session =  $_SESSION['username'];
            $sql1 = "SELECT * FROM users WHERE username = '$session' ";
            $result1 = mysqli_query($conn, $sql1);
            $profile = $result1->fetch_assoc();
             ?>
              <div class="row gy-3 overflow-hidden">
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="username" id="userName" placeholder="Username" value="<?=$profile['username'] ?>" required>
                    <label for="usertName" class="form-label">Username</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="firstname" id="firstName" placeholder="First Name" value="<?=$profile['firstname'] ?>" required>
                    <label for="firstName" class="form-label">First Name</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="lastname" id="lastName" placeholder="First Name" value="<?=$profile['lastname'] ?>" required>
                    <label for="lastName" class="form-label">Last Name</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" value="<?=$profile['email'] ?>" required>
                    <label for="email" class="form-label">Email</label>
                  </div>
                </div>
                <div class="col-12">
                <div class="form-floating mb-3">
                <div class="input-group">
                <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="pic" required>
                <input type="hidden" class="form-control" name="current" value="<?php echo $profile['profilepic']; ?>" required="required"/>
                </div>
                </div>
              </div>
                <div class="col-12">
                  <div class="d-grid">
                    <button class="btn bsb-btn-xl btn-primary" name="update" type="submit">Update Profile</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>

<script>
const toggle = document.querySelector(".toggle"),
input = document.querySelector(".password");
toggle.addEventListener("click", () => {
if (input.type === "password") {
input.type = "text";
toggle.classList.replace("fa-eye-slash", "fa-eye");
} else {
input.type = "password";
}
})
</script>
</div>
<?php include "footer.php" ?>

</body>
</html>