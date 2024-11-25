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
}

/*if (!isset($_SESSION['username'])) {
    #header("location:login.php");
    echo "<script>location.href = 'login.php';</script>";
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
<!--<header id="header"></header> --> 
<?php include "nav.php" ?>
<!-- <section id="introduction" class="introduction"></section> -->
 <?php include "intro_section.php" ?>
<?php
if(isset($_SESSION['username'])){
 include "user_page.php";
}
 ?>
<?php include "latest_information.php" ?>
<?php include "sub_categories.php" ?>
<?php

    include "reviews.php" ;

 ?>

<?php include "footer.php" ?>


<script>
    $(document).ready(function() {    
        $("#header").load("nav.php")
        $("#introduction").load("intro_section.php")
    });

</script>
</body>
</html>