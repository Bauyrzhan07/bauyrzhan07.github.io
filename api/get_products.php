<?php
    include "config/db.php";
    
    $result = mysqli_query($con, "SELECT * FROM products WHERE sub_category_id=${category['id']};");
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>