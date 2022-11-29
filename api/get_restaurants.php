<?php
    include "config/db.php";

    $result = mysqli_query($con, "SELECT * FROM restaurants WHERE type='RESTAURANT';");
    $restaurants = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>