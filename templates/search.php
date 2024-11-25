<?php
	if(ISSET($_POST['search'])){
		$keyword = $_POST['keyword'];
        #echo "<script>location.href = 'search.php';</script>";
    }
?>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .background{
    height: 20rem;
    background:
    linear-gradient(
        45deg,
        rgba(85,76,87,0.6),
        rgba(130,120,139,0.7)
    ),
    url(../img/SWA2.jpg)
    ;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
}
     </style>
</head>
<body>
    <?php include 'nav.php' ?>
    <div class="background">
        <h1 class="text-center text-light pt-2">Search results</h1>
        <div class="container d-flex align-item-center justify-content-center">
        <p class="fs-5 d-flex align-item-center justify-content-center" style="color:#fff; width:38rem;">
            All the information searched using the search display below.
            </p>
    </div>
 </div>   
<div class="container pt-4 pb-4">
	<h5>Search results</h5>
	<?php
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
		$query = mysqli_query($conn, "SELECT * FROM `information` WHERE `name` LIKE '%$keyword%' ORDER BY `name`") or die(mysqli_error());
		while($fetch = mysqli_fetch_array($query)){
	
    if($keyword == "" && $keyword != $fetch['name'] ){
        echo "No match";
    }else{
    ?>
	<div style="word-wrap:break-word;">
		<a href="detail.php?id=<?=$fetch['informationID']?>"><h4><?php echo $fetch['name']?></h4></a>
		<p><?php echo substr($fetch['description'], 0, 100)?>...</p>
	</div>

	<?php
		}
	?>

    <?php
}
?>
</div>
<?php include 'footer.php' ?>
</body>