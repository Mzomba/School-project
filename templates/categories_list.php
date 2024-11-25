<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>categories_list</title>
    <style>
        .title{
            height: 20rem;
            background:
                linear-gradient(
                45deg,
                rgba(85,76,87,0.6),
                rgba(130,120,139,0.7)
    ),
                url(../img/SIBACA.jpg)
    ;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
        }
     </style>
</head>
<body> 
<?php include "nav.php" ?>

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
$id = $_GET['id'];
#$sql = "SELECT name,image,description,created_at, informationID FROM information WHERE $id = category_id";
$sql = "SELECT * FROM categories JOIN information ON categories.categoryID = information.category_id WHERE $id = category_id";
$result = $conn->query($sql);
$titleResult = $conn->query($sql);
?>
<?php $category = $titleResult->fetch_assoc();
?>
<div class="title">
<h1 class="text-center text-light pt-2"><?= $category['categoryName'] ?> Category</h1>
        <div class="container d-flex align-item-center justify-content-center">
            <p class="fs-5 text-wrap text-center text-light" style="width:30rem;">
                In this  <?= $category['categoryName'] ?> category  
            </p>
        </div>
</div>
<section class="container">
    <h4 class="text-center mt-4 mb-4"><?= $category['categoryName'] ?></h4>
    <div class="row row-cols-1 row-cols-md-3 g-4">


<?php 
while($info = $result->fetch_assoc()) {
    ?>     
        <div class="col">
            <div class="card">
                <img src="data:image;charset=utf8;base64,<?php echo base64_encode($info['image']); ?>" alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><a href="detail.php?id=<?=$info['informationID']?>" class="text-decoration-none text-dark"><?= $info['name']?></a></h5>
                    <p class="card-text"><?= $info['description'] ?></p>
                </div>
            </div>
        </div>
        <?php
}
?>
    </div>
</section>

<?php include "footer.php" ?>
</body>
</html>

