<?php
    include "../config/db.php";
    
    $result = mysqli_query($con, "SELECT * FROM products WHERE id = $product_id");
    $product = mysqli_fetch_assoc($result);
?>