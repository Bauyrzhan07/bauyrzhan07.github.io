<?php
    include "config/db.php";

    $restaurant_id = $_GET["id"];

    $result = mysqli_query($con, "SELECT * FROM restaurants WHERE id=$restaurant_id");    
    $restaurant = mysqli_fetch_assoc($result);

    $result = mysqli_query($con, "SELECT * FROM sub_categories WHERE restaurant_id=$restaurant_id");  
    $sub_categories = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    $result = mysqli_query($con, "SELECT c.id, c.name FROM categories c
                                  INNER JOIN restaurant_categories rc ON c.id=rc.category_id
                                  WHERE rc.restaurant_id=$restaurant_id");
    $categories = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>