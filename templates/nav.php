<?php
#session_start();
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
#$sql = "SELECT firstname, lastname, email, profilepic FROM users WHERE username = '$session'";
#$result = $conn->query($sql);
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light nav-fill w-100">
  <div class="container-fluid">
    <a class="navbar-brand fs-1" style="color: #555; font-weight:600;" href="home.php">EswatiniPedia</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="px-4 ms-auto navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="events.php">Events</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="categories.php">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="about.php" tabindex="-1" aria-disabled="true">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle fw-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Account
          </a>

          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php
           if(!isset($_SESSION['username'])){
            // Haven't log in
            echo '<li><a class="dropdown-item" href="signup.php">Sign up</a></li>
            <li><a class="dropdown-item" href="login.php">Login</a></li>';
        }else{
            // Logged in
            echo '<li><a class="dropdown-item" href="logout.php">Logout</a></li>';
        }
            ?>
          </ul>
        </li>
      </ul>

      <!-- BADGE -->
      <!-- <ul class="navbar-nav px-4 mb-2 mb-lg-0 ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="cart.php"><svg fill="#555" height="22px" width="22px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 611.999 611.999" xml:space="preserve" stroke="#555"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M570.107,500.254c-65.037-29.371-67.511-155.441-67.559-158.622v-84.578c0-81.402-49.742-151.399-120.427-181.203 C381.969,34,347.883,0,306.001,0c-41.883,0-75.968,34.002-76.121,75.849c-70.682,29.804-120.425,99.801-120.425,181.203v84.578 c-0.046,3.181-2.522,129.251-67.561,158.622c-7.409,3.347-11.481,11.412-9.768,19.36c1.711,7.949,8.74,13.626,16.871,13.626 h164.88c3.38,18.594,12.172,35.892,25.619,49.903c17.86,18.608,41.479,28.856,66.502,28.856 c25.025,0,48.644-10.248,66.502-28.856c13.449-14.012,22.241-31.311,25.619-49.903h164.88c8.131,0,15.159-5.676,16.872-13.626 C581.586,511.664,577.516,503.6,570.107,500.254z M484.434,439.859c6.837,20.728,16.518,41.544,30.246,58.866H97.32 c13.726-17.32,23.407-38.135,30.244-58.866H484.434z M306.001,34.515c18.945,0,34.963,12.73,39.975,30.082 c-12.912-2.678-26.282-4.09-39.975-4.09s-27.063,1.411-39.975,4.09C271.039,47.246,287.057,34.515,306.001,34.515z M143.97,341.736v-84.685c0-89.343,72.686-162.029,162.031-162.029s162.031,72.686,162.031,162.029v84.826 c0.023,2.596,0.427,29.879,7.303,63.465H136.663C143.543,371.724,143.949,344.393,143.97,341.736z M306.001,577.485 c-26.341,0-49.33-18.992-56.709-44.246h113.416C355.329,558.493,332.344,577.485,306.001,577.485z"></path> <path d="M306.001,119.235c-74.25,0-134.657,60.405-134.657,134.654c0,9.531,7.727,17.258,17.258,17.258 c9.531,0,17.258-7.727,17.258-17.258c0-55.217,44.923-100.139,100.142-100.139c9.531,0,17.258-7.727,17.258-17.258 C323.259,126.96,315.532,119.235,306.001,119.235z"></path> </g> </g> </g> </g></svg>
          <span class="position-absolute top-3 start-3 translate-middle badge rounded-pill" style="color: #555;">
    0
    <span class="visually-hidden">unread messages</span>
  </span>
        </a>
        </li>
        <li class="nav-item">
        <?php
         #  if(isset($_SESSION['username'])){
          #$profile = $result->fetch_assoc();
            ?>
        <img  src="./uploads/<?php #echo($profile['profilepic']); ?>" class="img-fluid mx-2" alt="..." style="width:50px;height:50px; border-radius:50%;">
        <?php
         #  }
        ?>
        </li>

      </ul> -->


      <form class="d-flex px-4 ms-auto" method="POST" action="./search.php">
        <input class="form-control me-2 fs-5 fw-2" type="search" placeholder="Search for categories..." aria-label="Search" style="" name="keyword">
        <button class="btn btn-outline-secondary fs-4" type="submit" name="search">Search</button>
      </form>
    </div>
  </div>
</nav>