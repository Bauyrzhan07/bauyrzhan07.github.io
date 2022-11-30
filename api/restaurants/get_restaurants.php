<?php
    include "config/db.php";
    include "services/is_lunch_time.php";

    $is_lunch = is_lunch();
    
    if(isset($_GET['category_id'])) {
        $category_id = $_GET['category_id'];
        $result = mysqli_query($con, "SELECT * FROM restaurants r
                                      INNER JOIN restaurant_categories rc ON rc.restaurant_id=r.id
                                      WHERE rc.category_id=$category_id AND type='RESTAURANT';");
    } else {
        $result = mysqli_query($con, "SELECT * FROM restaurants WHERE type='RESTAURANT';");
    }
    $restaurants = mysqli_fetch_all($result, MYSQLI_ASSOC);
    if($is_lunch)
        for($i = 0; $i < count($restaurants); $i++)
            $restaurants[$i]['delivery_price'] *= 1.1;
?>