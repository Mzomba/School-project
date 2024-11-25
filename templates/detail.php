<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../bootstrap-5.0.2-dist/js/boostrap.min.js" defer></script>
    <title>detail</title>
</head>
<body>
<!--<header id="header"></header> -->
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

$id=$_GET['id'];
$sql = "SELECT name,image,description,created_at, text FROM information WHERE informationID = $id";
$result = $conn->query($sql);

        while($info = $result->fetch_assoc()) {
            ?>     

<div class="article_pic">
    <img class="img" src="data:image;charset=utf8;base64,<?php echo base64_encode($info['image']); ?>" alt="">
    <div class="grad p-2">
    <h3 class="article_title text-light mt-2"><?= $info['name']?></h3>
    <p class="text-light text-wrap" style="width:30rem;"><?= $info['description']?></p>
    </div>
</div>
<div class="content-container container">
    <p class="introduction mt-2"><?= $info['text']?>
</p>
</div>
<?php
}
?>
<?php include "footer.php" ?>
</body>
</html>