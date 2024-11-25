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
        rgba(85,76,87,0.6),
        rgba(130,120,139,0.7)
    ),
    url(../img/category-bg.jpg)
    ;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
}
     </style>
    <title>Categories</title>
</head>
<body>
    
    <!-- The Categories view -->
    <!--<header id="header"></header> -->
    <?php include "nav.php" ?>
    <div class="background">
        <h1 class="text-center text-light pt-2">Categories</h1>
        <div class="container d-flex align-item-center justify-content-center">
        <p class="fs-5 d-flex align-item-center justify-content-center" style="color:#fff; width:38rem;">
        All the information available in this website is sorted in categories, explore.
            </p>
        </div>
    </div>
    
    <div class="reviews-container">
        <h3 class="text-center pt-4">Categories</h3>
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

$sql = "SELECT categoryName, svg, categoryID FROM categories";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($category = $result->fetch_assoc()) {
        #$id = $category['id']
        ?>

    
        <div class="col">
            <div class="card text-center">
                <img src="data:svg;charset=utf8;base64,<?php echo base64_encode($category['svg']); ?>" class="card-img-top mx-auto" alt="..." style="height:100px; width:100px;">
                <div class="card-body">
                    <h5 class="card-title text-center"><a class="text-decoration-none text-dark" href="categories_list.php?id=<?= $category['categoryID']?>"><?= $category['categoryName'] ?></a></h5>
                </div>
            </div>
        </div>
            
<?php
}
}else {
    echo "0 results";
}
?>
</div>
</div>
</div>

<?php include "footer.php" ?>

</body>
</html>