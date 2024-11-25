<section class="px-4 mt-4">

<!--carousel -->
<h2 class="text-center" style="margin-top: 5rem;">Our culture our pride</h2>
<p class="card-text text-center">
    Here in Eswatini we are proud of our culture and nature. We make by all means to conserve our
    culture. 
</p>
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
      <img src="../img/marula.jpg" class="d-block w-100" alt="..." style="height:400px;">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="../img/wedding.webp" class="d-block w-100" alt="..."style="height:400px;">
    </div>
    <div class="carousel-item">
      <img src="../img/lion.jpg" class="d-block w-100" alt="..." style="height:400px;">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    <h2 class="text-center mb-4" style="margin-top:5rem;">The latest information</h2>
    <p class="card-text text-center mb-4">
        Updates of the information available in these websit, and more available scroll to categoris to explore more. 
    </p>
    
</section>
<section class="px-4">
<div class="container">
<div class="row row-cols-1 row-cols-md-3 g-4">
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
$sql = "SELECT name,image,description,created_at, informationID FROM information LIMIT 4";
$result = $conn->query($sql);


while($info = $result->fetch_assoc()) {
    
    ?>     
        <div class="col">
            <div class="card h-100 shadow" style="border:none;">
                <img src="data:image;charset=utf8;base64,<?php echo base64_encode($info['image']); ?>" alt="" style="height:200px;" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><a href="detail.php?id=<?=$info['informationID']?>" class="text-decoration-none text-dark"><?= $info['name']?></a></h5>
                    <p class="card-text"><?= $info['description'] ?></p>
                  </div>
                  <div class="card-footer" style="border:none; background:white;"><a href="detail.php?id=<?=$info['informationID']?>" class="btn btn-primary">Read more...</a></div> 
            </div>
        </div>
        <?php
}
?>
    </div>
</div>
</section>
