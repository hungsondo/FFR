<?php 
// Initialize shopping cart class 
include_once 'Cart.class.php'; 
$cart = new Cart; 
 
// Include the database config file 
require_once 'database/dbConfig.php'; 
include "header.php";
?>

<!-- Banner -->
    <img src="images/banner.gif" width="100%" height="auto">


<div class="small-container">
    <br>
    <h1 style="text-align: center">Thực đơn</h1>
    
    <!-- Product list -->
    <div class="row col-lg-12">
        <?php 
        // Get products from database 
        $result = $db->query("SELECT * FROM products ORDER BY id DESC LIMIT 10"); 
        if($result->num_rows > 0){  
            while($row = $result->fetch_assoc()){ 
        ?>
        <div class="card col-lg-3">
            <div class="card-body">
                <img src="<?= $row['image']; ?>" class="card-img" height="300px" >
                <h5 class="card-title"><?php echo $row["name"]; ?></h5>
                <h6 class="card-subtitle mb-2 text-muted">Giá: <?php echo $row["price"].'đ'; ?></h6>
                <p class="card-text"><?php echo $row["description"]; ?></p>
                <a href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>" class="btn btn-primary">Thêm vào giỏ</a>
            </div>
        </div>
        <?php } }else{ ?>
        <p>Không tìm thấy sản phẩm nào.....</p>
        <?php } ?>
    </div>
    <br>
</div>

<?php include "footer.php";?>