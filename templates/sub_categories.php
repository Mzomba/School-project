<section class="px-4" style="margin-top: 5rem;">
    <h4 class="text-center mt-4">Categories</h4>
    <p class="text-center py-4">All the information available in this website is sorted in categories, explore.</p>
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
            <div class="card shadow" style="border:none;">
            <img src="data:svg;charset=utf8;base64,<?php echo base64_encode($category['svg']); ?>" class="card-img-top mx-auto" alt="..." style="height:100px; width:100px; padding:2px;">
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
</section>