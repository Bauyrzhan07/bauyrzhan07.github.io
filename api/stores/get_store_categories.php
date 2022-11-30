<?php
    include "config/db.php";
    
    $result = mysqli_query($con, "SELECT * FROM categories WHERE type='STORE' ORDER BY places_count DESC;");
    $categories = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>