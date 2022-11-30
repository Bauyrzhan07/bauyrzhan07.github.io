<?php
    include "config/db.php";
    include "services/is_lunch_time.php";

    $is_lunch = is_lunch();
    if(isset($_GET['category_id'])) {
        $category_id = $_GET['category_id'];
        $result = mysqli_query($con, "SELECT * FROM restaurants r
                                      INNER JOIN restaurant_categories rc ON rc.restaurant_id=r.id
                                      WHERE rc.category_id=$category_id AND type='STORE';");
    } else {
        $result = mysqli_query($con, "SELECT * FROM restaurants WHERE type='STORE';");
    }
    $stores = mysqli_fetch_all($result, MYSQLI_ASSOC);
    if($is_lunch)
        for($i = 0; $i < count($stores); $i++)
            $stores[$i]['delivery_price'] *= 1.1;
?>