<?php
    include "../config/db.php";

    $restaurant_id = $_REQUEST["id"];

    mysqli_query($con, "SELECT * FROM restaurants WHERE id=$restaurant_id")
    
>