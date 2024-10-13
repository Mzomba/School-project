<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
     <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<!--<header id="header"></header> -->
<?php include "nav.php" ?>
<section id="introduction" class="introduction"></section>
<?php include "latest_information.php" ?>
<?php include "sub_categories.php" ?>
<?php include "footer.php" ?>


<script>
    $(document).ready(function() {    
       //$("#header").load("nav.php")
        $("#introduction").load("intro_section.php")
    });

</script>
</body>
</html>