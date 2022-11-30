<?php
    include "config/db.php";
    
    $store_id = $store['id'];
    $result = mysqli_query($con, "SELECT * FROM categories c
                                  INNER JOIN restaurant_categories rc ON c.id=rc.category_id
                                  WHERE restaurant_id=$store_id;");
    $store_categories = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>