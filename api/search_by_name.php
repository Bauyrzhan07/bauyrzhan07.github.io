<?php 
    include "config/db.php";
    include "services/is_lunch_time.php";
    $is_lunch = is_lunch();
    
    $search = $_GET['search'];
    $result = mysqli_query($con, "SELECT * FROM restaurants WHERE name LIKE '%$search%';");
    $restaurants = mysqli_fetch_all($result, MYSQLI_ASSOC);
    if($is_lunch)
        for($i = 0; $i < count($restaurants); $i++)
            $restaurants[$i]['delivery_price'] *= 1.1;
?>